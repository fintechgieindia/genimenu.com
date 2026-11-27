<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class SpamProtectionService
{
    /**
     * List of disposable / temporary burner email domains.
     */
    protected static array $disposableDomains = [
        'mailinator.com', 'tempmail.com', 'temp-mail.org', '10minutemail.com',
        'guerrillamail.com', 'guerrillamail.net', 'guerrillamail.org', 'sharklasers.com',
        'yopmail.com', 'yopmail.net', 'yopmail.fr', 'throwawaymail.com',
        'dispostable.com', 'trashmail.com', 'trashmail.net', 'fakemail.net',
        'getnada.com', 'mohmal.com', 'crazymailing.com', 'generator.email',
        'emailondeck.com', 'burnermail.io', 'dropmail.me', 'inboxkitten.com',
        'maildrop.cc', 'mytemp.email', 'tempail.com', 'nada.ltd',
        'armyspy.com', 'cuvox.de', 'dayrep.com', 'fleckens.hu', 'gustr.com',
        'jourrapide.com', 'rhyta.com', 'superrito.com', 'teleworm.us', 'tinypm.com',
        'discard.email', 'discardmail.com', 'spambog.com', 'tempr.email',
        'fakeinbox.com', 'mytempemail.com', 'trashmail.de', 'mailcatch.com',
        'harakirimail.com', 'zillamail.com', 'deadaddress.com', 'filzmail.com',
        'mailexpire.com', 'mailnull.com', 'spamgourmet.com', 'trashcanmail.com'
    ];

    /**
     * Known spam patterns (BBCode, casino, crypto phishing, SEO spam, adult).
     */
    protected static array $spamPatterns = [
        '/\[url=/i',
        '/\[link=/i',
        '/<a\s+href=/i',
        '/\b(viagra|cialis|levitra)\b/i',
        '/\b(casino|poker|slots\s*online|gambling)\b/i',
        '/\b(crypto\s*investment|bitcoin\s*doubler|forex\s*trading\s*bot)\b/i',
        '/\b(buy\s*backlinks|seo\s*backlink|guest\s*post\s*outreach)\b/i',
        '/\b(whatsapp\s*us\s*at|telegram\s*@|t\.me\/)\b/i',
        '/\b(porn|adult\s*cam|escort\s*service)\b/i',
        '/[\p{Cyrillic}]/u', // Russian / Cyrillic bot spam (not applicable to Indian/English/Middle-East menu systems)
    ];

    /**
     * Run all anti-spam checks against incoming form request.
     *
     * @param Request $request
     * @return array ['is_spam' => bool, 'reason' => ?string, 'error_message' => ?string, 'silent_drop' => bool]
     */
    public static function check(Request $request): array
    {
        $ip = $request->ip();

        // 1. RATE LIMITING: Max 5 submissions per 10 minutes per IP
        $rateLimitKey = 'form_submit:' . $ip;
        if (RateLimiter::tooManyAttempts($rateLimitKey, 5)) {
            $seconds = RateLimiter::availableIn($rateLimitKey);
            return [
                'is_spam'       => true,
                'reason'        => "Rate limit exceeded (try again in {$seconds}s)",
                'error_message' => "Too many attempts from your network. Please wait a few minutes before submitting again.",
                'silent_drop'   => false,
            ];
        }
        RateLimiter::hit($rateLimitKey, 600); // 10 minutes window

        // 2. HONEYPOT TRAP: Bots fill hidden inputs
        $hpFields = ['_hp_website', '_hp_email', 'website_hp', 'extra_notes_hp'];
        foreach ($hpFields as $hp) {
            if ($request->filled($hp)) {
                return [
                    'is_spam'       => true,
                    'reason'        => "Honeypot field '{$hp}' filled with: " . Str::limit($request->input($hp), 50),
                    'error_message' => null,
                    'silent_drop'   => true, // Pretend success to bot, drop internally
                ];
            }
        }

        // 3. TIME-BASED CHECK: Humans take >= 3 seconds to complete forms
        if ($request->filled('_form_time')) {
            try {
                $formTime = (int) decrypt($request->input('_form_time'));
                $elapsed = time() - $formTime;

                // If submitted in less than 3 seconds, it's a robotic submission
                if ($elapsed < 3) {
                    return [
                        'is_spam'       => true,
                        'reason'        => "Form submitted impossibly fast ({$elapsed} seconds)",
                        'error_message' => null,
                        'silent_drop'   => true,
                    ];
                }

                // If form token is older than 24 hours, expired/replayed
                if ($elapsed > 86400) {
                    return [
                        'is_spam'       => true,
                        'reason'        => "Form token expired ({$elapsed} seconds)",
                        'error_message' => "Your form session has expired. Please refresh the page and try again.",
                        'silent_drop'   => false,
                    ];
                }
            } catch (\Throwable $e) {
                // Invalid encryption token
                return [
                    'is_spam'       => true,
                    'reason'        => "Invalid form time signature",
                    'error_message' => null,
                    'silent_drop'   => true,
                ];
            }
        }

        // 4. DISPOSABLE / BURNER EMAIL DETECTION
        $email = strtolower(trim((string) $request->input('email', '')));
        if ($email && str_contains($email, '@')) {
            $domain = substr(strrchr($email, '@'), 1);
            if (in_array($domain, self::$disposableDomains, true)) {
                return [
                    'is_spam'       => true,
                    'reason'        => "Disposable email domain: {$domain}",
                    'error_message' => "Temporary / disposable email addresses are not accepted. Please use a valid company or personal email.",
                    'silent_drop'   => false,
                ];
            }
        }

        // 5. SPAM PATTERNS / PHISHING LINKS / CYRILLIC BOTS
        $textToScan = implode(' ', array_filter([
            $request->input('name', ''),
            $request->input('company', ''),
            $request->input('message', ''),
            $request->input('subject', ''),
        ]));

        foreach (self::$spamPatterns as $pattern) {
            if (preg_match($pattern, $textToScan)) {
                return [
                    'is_spam'       => true,
                    'reason'        => "Matched spam pattern: {$pattern}",
                    'error_message' => null,
                    'silent_drop'   => true,
                ];
            }
        }

        // 6. EXCESSIVE LINKS CHECK: More than 2 http/https links in message
        $message = (string) $request->input('message', '');
        if (preg_match_all('#https?://#i', $message) > 2) {
            return [
                'is_spam'       => true,
                'reason'        => "Too many hyperlinks in message",
                'error_message' => null,
                'silent_drop'   => true,
            ];
        }

        // 7. GIBBERISH / REPEATED CHARACTERS CHECK (e.g. "aaaaaaa", "zzzzzzzz")
        $name = (string) $request->input('name', '');
        if (preg_match('/(.)\1{5,}/', $name) || preg_match('/(.)\1{8,}/', $message)) {
            return [
                'is_spam'       => true,
                'reason'        => "Gibberish / excessive repeated characters",
                'error_message' => null,
                'silent_drop'   => true,
            ];
        }

        // All checks passed cleanly!
        return [
            'is_spam'       => false,
            'reason'        => null,
            'error_message' => null,
            'silent_drop'   => false,
        ];
    }
}
