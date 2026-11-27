<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class InstagramService
{
    /**
     * Cache key prefix for Instagram reels
     */
    const CACHE_KEY_PREFIX = 'instagram_showcase_reels_';

    /**
     * Get effective Instagram configuration from Database (GlobalSetting) with .env fallback.
     *
     * @return array
     */
    public static function getConfig(): array
    {
        $setting = function_exists('global_setting') ? global_setting() : \App\Models\GlobalSetting::first();

        $token = (!empty($setting->instagram_access_token))
            ? $setting->instagram_access_token
            : (config('services.instagram.access_token') ?: env('INSTAGRAM_ACCESS_TOKEN', ''));

        $username = (!empty($setting->instagram_username))
            ? $setting->instagram_username
            : (config('services.instagram.username') ?: env('INSTAGRAM_USERNAME', 'genimenu'));

        $cacheTime = (!empty($setting->instagram_cache_time))
            ? (int) $setting->instagram_cache_time
            : ((int) (config('services.instagram.cache_time') ?: env('INSTAGRAM_CACHE_TIME', 7200)));

        return [
            'token'      => trim((string)$token),
            'username'   => ltrim(trim((string)$username), '@'),
            'cache_time' => $cacheTime > 0 ? $cacheTime : 7200,
        ];
    }

    /**
     * Get the latest REELS formatted specifically for the frontend gallery.
     * Always returns an array of 5 reels (falling back to static cards if no token or API error).
     *
     * @param int $limit
     * @return array
     */
    public static function getLatestCards(int $limit = 5): array
    {
        $config = self::getConfig();
        $token = $config['token'];
        $cacheSeconds = $config['cache_time'];

        if (empty($token)) {
            return self::getFallbackCards();
        }

        $cacheKey = self::CACHE_KEY_PREFIX . $limit;

        return Cache::remember($cacheKey, $cacheSeconds, function () use ($token, $limit) {
            try {
                $rawItems = self::fetchMediaFromMeta($token, 35);

                if (!empty($rawItems) && is_array($rawItems)) {
                    $cards = [];

                    // Filter strictly for REELS / Videos
                    foreach ($rawItems as $index => $item) {
                        $mediaType        = strtoupper($item['media_type'] ?? '');
                        $mediaProductType = strtoupper($item['media_product_type'] ?? '');
                        $permalink        = $item['permalink'] ?? '';

                        $isReel = ($mediaProductType === 'REELS') 
                            || ($mediaType === 'VIDEO') 
                            || (strpos($permalink, '/reel') !== false);

                        if (!$isReel) {
                            continue; // Skip non-reel / photo posts
                        }

                        $imageUrl = !empty($item['thumbnail_url']) 
                            ? $item['thumbnail_url'] 
                            : ($item['media_url'] ?? asset('assets/images/home/social-' . (($index % 5) + 1) . '.png'));

                        $caption = trim($item['caption'] ?? '');
                        $shortTitle = !empty($caption)
                            ? \Illuminate\Support\Str::limit($caption, 35, '...')
                            : ('Reel #' . (count($cards) + 1));

                        $cards[] = [
                            'id'         => $item['id'] ?? ('ig-reel-' . $index),
                            'theme'      => $shortTitle,
                            'image'      => $imageUrl,
                            'alt'        => !empty($caption) ? \Illuminate\Support\Str::limit($caption, 80, '...') : 'Geni Menu Instagram Reel',
                            'url'        => $permalink ?: 'https://www.instagram.com/genimenu/',
                            'media_type' => 'VIDEO',
                            'is_reel'    => true,
                            'timestamp'  => $item['timestamp'] ?? null,
                        ];

                        if (count($cards) >= $limit) {
                            break;
                        }
                    }

                    // Pad if fewer reels than limit
                    if (count($cards) < $limit) {
                        $fallbacks = self::getFallbackCards();
                        for ($i = count($cards); $i < $limit; $i++) {
                            $cards[] = $fallbacks[$i] ?? $fallbacks[0];
                        }
                    }

                    return array_slice($cards, 0, $limit);
                }
            } catch (\Throwable $e) {
                Log::error('Instagram API fetch error: ' . $e->getMessage());
            }

            return self::getFallbackCards();
        });
    }

    /**
     * Fetch media from Meta, auto-detecting Facebook Graph API (EA...) vs Instagram Basic Display (IG...)
     *
     * @param string $token
     * @param int $limit
     * @return array
     */
    public static function fetchMediaFromMeta(string $token, int $limit = 35): array
    {
        $token = trim($token);

        // CASE 1: Facebook Graph API token (Meta Business / System User - starts with EA...)
        if (str_starts_with($token, 'EA')) {
            // Check connected Instagram business accounts
            $pagesRes = Http::timeout(8)->get('https://graph.facebook.com/v21.0/me/accounts', [
                'fields'       => 'id,name,instagram_business_account{id,username,media{id,caption,media_type,media_product_type,media_url,thumbnail_url,permalink,timestamp}}',
                'access_token' => $token,
            ]);

            if ($pagesRes->successful()) {
                $pages = $pagesRes->json()['data'] ?? [];
                foreach ($pages as $page) {
                    if (!empty($page['instagram_business_account']['media']['data'])) {
                        return $page['instagram_business_account']['media']['data'];
                    }
                    if (!empty($page['instagram_business_account']['id'])) {
                        $igId = $page['instagram_business_account']['id'];
                        $mediaRes = Http::timeout(8)->get("https://graph.facebook.com/v21.0/{$igId}/media", [
                            'fields'       => 'id,caption,media_type,media_product_type,media_url,thumbnail_url,permalink,timestamp',
                            'access_token' => $token,
                            'limit'        => $limit,
                        ]);
                        if ($mediaRes->successful()) {
                            return $mediaRes->json()['data'] ?? [];
                        }
                    }
                }
            }

            // Also check directly under /me/media if it is a user token
            $directRes = Http::timeout(8)->get('https://graph.facebook.com/v21.0/me/media', [
                'fields'       => 'id,caption,media_type,media_product_type,media_url,thumbnail_url,permalink,timestamp',
                'access_token' => $token,
                'limit'        => $limit,
            ]);
            if ($directRes->successful()) {
                return $directRes->json()['data'] ?? [];
            }
        }

        // CASE 2: Instagram Graph / Basic Display endpoint
        $igRes = Http::timeout(8)->get('https://graph.instagram.com/me/media', [
            'fields'       => 'id,caption,media_type,media_product_type,media_url,thumbnail_url,permalink,timestamp',
            'access_token' => $token,
            'limit'        => $limit,
        ]);

        if ($igRes->successful()) {
            return $igRes->json()['data'] ?? [];
        }

        return [];
    }

    /**
     * Fallback static cards when no token is present or when API fails.
     * Guaranteed to never break the frontend design.
     *
     * @return array
     */
    public static function getFallbackCards(): array
    {
        $profileUrl = self::getProfileUrl();

        return [
            [
                'id'    => 'card-1',
                'theme' => 'Chef Experience',
                'image' => asset('assets/images/home/social-1.png'),
                'alt'   => 'Chef Experience – Geni Menu',
                'url'   => $profileUrl,
            ],
            [
                'id'    => 'card-2',
                'theme' => 'Digital Menu Experience',
                'image' => asset('assets/images/home/social-2.png'),
                'alt'   => 'Digital Menu Experience – Geni Menu',
                'url'   => $profileUrl,
            ],
            [
                'id'    => 'card-3',
                'theme' => 'QR Menu Experience',
                'image' => asset('assets/images/home/social-3.png'),
                'alt'   => 'QR Menu Experience – Geni Menu',
                'url'   => $profileUrl,
            ],
            [
                'id'    => 'card-4',
                'theme' => 'Café Experience',
                'image' => asset('assets/images/home/social-4.png'),
                'alt'   => 'Café Experience – Geni Menu',
                'url'   => $profileUrl,
            ],
            [
                'id'    => 'card-5',
                'theme' => 'Dining Experience',
                'image' => asset('assets/images/home/social-5.png'),
                'alt'   => 'Dining Experience – Geni Menu',
                'url'   => $profileUrl,
            ],
        ];
    }

    /**
     * Get Instagram Profile URL
     *
     * @return string
     */
    public static function getProfileUrl(): string
    {
        $config = self::getConfig();
        $username = $config['username'];
        return !empty($username) ? "https://www.instagram.com/{$username}/" : 'https://www.instagram.com/genimenu/';
    }

    /**
     * Clear the cached Instagram posts to force an immediate refresh.
     *
     * @param int $limit
     * @return void
     */
    public static function clearCache(int $limit = 5): void
    {
        Cache::forget(self::CACHE_KEY_PREFIX . $limit);
    }

    /**
     * Test token connection against Meta API (supports both EA... and IG... tokens)
     *
     * @param string|null $customToken
     * @return array
     */
    public static function testToken(?string $customToken = null): array
    {
        $config = self::getConfig();
        $token  = trim($customToken ?: $config['token']);

        if (empty($token)) {
            return [
                'success' => false,
                'message' => 'No Instagram Access Token configured in Superadmin Settings or .env',
                'data'    => null,
            ];
        }

        try {
            // IF TOKEN STARTS WITH EA... (Meta Business / System User / Facebook Graph API)
            if (str_starts_with($token, 'EA')) {
                $userRes = Http::timeout(8)->get('https://graph.facebook.com/v21.0/me', [
                    'fields'       => 'id,name',
                    'access_token' => $token,
                ]);

                if (!$userRes->successful()) {
                    $err = $userRes->json()['error']['message'] ?? $userRes->body();
                    return [
                        'success' => false,
                        'message' => 'Meta Facebook Graph API Error: ' . $err,
                        'data'    => $userRes->json(),
                    ];
                }

                $userData = $userRes->json();
                $userName = $userData['name'] ?? 'System User';

                // Check accounts / Instagram business accounts assigned to this user
                $accountsRes = Http::timeout(8)->get('https://graph.facebook.com/v21.0/me/accounts', [
                    'fields'       => 'id,name,instagram_business_account{id,username}',
                    'access_token' => $token,
                ]);

                $pages = $accountsRes->json()['data'] ?? [];
                $hasInstagramAccount = false;
                $igUsername = '';

                foreach ($pages as $p) {
                    if (!empty($p['instagram_business_account']['id'])) {
                        $hasInstagramAccount = true;
                        $igUsername = $p['instagram_business_account']['username'] ?? '';
                        break;
                    }
                }

                if ($hasInstagramAccount) {
                    $media = self::fetchMediaFromMeta($token, 5);
                    return [
                        'success' => true,
                        'message' => "Successfully connected to Meta Business User '{$userName}' and Instagram account '@{$igUsername}'! Found " . count($media) . " items.",
                        'count'   => count($media),
                        'sample'  => $media[0] ?? null,
                    ];
                }

                return [
                    'success' => false,
                    'message' => "Token is VALID for Meta System User '{$userName}' (ID: {$userData['id']}), but no Instagram Business Account asset has been assigned to this System User in Meta Business Suite. Please assign your Instagram Account/Page to this System User under Meta Business Settings > Accounts > Instagram Accounts.",
                    'data'    => $userData,
                ];
            }

            // IF TOKEN STARTS WITH IG... (Instagram Basic Display API)
            $response = Http::timeout(10)->get('https://graph.instagram.com/me/media', [
                'fields'       => 'id,caption,media_type,media_product_type,media_url,thumbnail_url,permalink,timestamp',
                'access_token' => $token,
                'limit'        => 5,
            ]);

            if ($response->successful()) {
                $data = $response->json()['data'] ?? [];
                return [
                    'success' => true,
                    'message' => 'Successfully connected to Meta Instagram API! Found ' . count($data) . ' posts.',
                    'count'   => count($data),
                    'sample'  => $data[0] ?? null,
                ];
            }

            $error = $response->json()['error']['message'] ?? $response->body();
            return [
                'success' => false,
                'message' => 'Meta API Error: ' . $error,
                'data'    => $response->json(),
            ];
        } catch (\Throwable $e) {
            return [
                'success' => false,
                'message' => 'Connection Exception: ' . $e->getMessage(),
                'data'    => null,
            ];
        }
    }
}
