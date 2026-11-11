<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Csubmissions;

class ContactController extends Controller
{

    /**
     * Display the contact form.
     */


    /**
     * Handle contact form submission.
     */


    public function submit(Request $request)
    {
        // Support country dialing code + phone number or direct phone
        if ($request->filled('phone_code') && $request->filled('phone_number')) {
            $request->merge([
                'phone' => trim($request->phone_code . ' ' . $request->phone_number)
            ]);
        } elseif ($request->filled('phone_number') && !$request->filled('phone')) {
            $request->merge([
                'phone' => trim($request->phone_number)
            ]);
        }

        // Support country selection stored into both country and address
        if ($request->filled('country') && !$request->filled('address')) {
            $request->merge([
                'address' => $request->country
            ]);
        } elseif ($request->filled('address') && !$request->filled('country')) {
            $request->merge([
                'country' => $request->address
            ]);
        }

        // Handle requirements (array from enquiry form checkboxes) -> store clean string in DB
        $reqString = null;
        if ($request->has('requirements')) {
            $reqArray = is_array($request->requirements) ? $request->requirements : [$request->requirements];
            $reqFiltered = array_filter(array_map('trim', $reqArray));
            if (!empty($reqFiltered)) {
                $reqString = implode(', ', $reqFiltered);
            }
        }
        $request->merge(['requirements' => $reqString]);

        // Append multi-selected requirements into message for email visibility
        if ($reqString) {
            $reqText = "Interested In: " . $reqString;
            $origMsg = $request->input('message', '');
            $fullMsg = $origMsg ? ($reqText . "\n\n" . $origMsg) : $reqText;
            $request->merge(['message' => $fullMsg]);
        }

        // If website is filled, prepend to message for email visibility
        if ($request->filled('website')) {
            $webText = "Website: " . $request->website;
            $origMsg = $request->input('message', '');
            $fullMsg = $origMsg ? ($webText . "\n" . $origMsg) : $webText;
            $request->merge(['message' => $fullMsg]);
        }

        // Determine form type (contact vs enquiry)
        $formType = $request->input('form_type');
        if (!$formType) {
            $formType = ($request->filled('company') && $request->company !== 'Individual / General Enquiry') ? 'enquiry' : 'contact';
        }
        $request->merge(['form_type' => $formType]);

        // If company is not provided (e.g. from the general Contact Us form), provide a default
        if (!$request->filled('company')) {
            $request->merge([
                'company' => 'Individual / General Enquiry'
            ]);
        }

        // Validate Google reCAPTCHA v2 if present in request
        $recaptchaSecret = config('services.recaptcha.secret_key');
        if ($recaptchaSecret && $request->has('g-recaptcha-response')) {
            $recaptchaToken = $request->input('g-recaptcha-response');
            if (empty($recaptchaToken)) {
                return back()->withInput()->withErrors(['g-recaptcha-response' => 'Please verify that you are not a robot.']);
            }

            // In production (non-test key), verify with Google endpoint
            if ($recaptchaSecret !== '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe') {
                try {
                    $verifyRes = \Illuminate\Support\Facades\Http::asForm()->timeout(5)->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret'   => $recaptchaSecret,
                        'response' => $recaptchaToken,
                        'remoteip' => $request->ip(),
                    ]);
                    if (!$verifyRes->json('success')) {
                        return back()->withInput()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.']);
                    }
                } catch (\Throwable $e) {
                    \Illuminate\Support\Facades\Log::warning('reCAPTCHA siteverify warning: ' . $e->getMessage());
                }
            }
        }

        $validated = $request->validate([
            'form_type' => 'nullable|string|in:contact,enquiry',
            'name' => [
                'required',
                'string',
                'min:2',
                'max:255',
                'regex:/^[\pL\s\.\'\-]+$/u',
            ],
            'company' => 'nullable|string|min:2|max:255',
            'website' => 'nullable|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/',
            ],
            'country' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'phone' => [
                'required',
                'string',
                'min:7',
                'max:50',
                'regex:/^[\+\d\s\-]{7,30}$/',
            ],
            'address' => 'nullable|string|max:500',
            'requirements' => 'nullable|string|max:1000',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:3000',
        ], [
            'name.required' => 'Please enter your full name.',
            'name.regex' => 'Full Name should contain only letters and spaces (no numbers).',
            'name.min' => 'Full Name must be at least 2 characters.',
            'company.required' => 'Please enter your restaurant / business name.',
            'company.min' => 'Business Name must be at least 2 characters.',
            'phone.required' => 'Please enter your phone number.',
            'phone.regex' => 'Phone number should contain only digits.',
            'phone.min' => 'Phone number must be at least 7 digits.',
            'email.required' => 'Business email cannot be empty.',
            'email.email' => 'Please enter a valid email address.',
            'email.regex' => 'Please enter a valid email address.',
            'subject.required' => 'Please select your business type.',
            'message.required' => 'Please enter your message or requirements.',
            'message.min' => 'Please write at least 10 characters in your message.',
        ]);

        try {
            // Save to database
            Csubmissions::create($validated);
        } catch (\Exception $e) {
            \Log::error('Contact form DB error: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Unable to submit your enquiry right now. Please try again.');
        }

        // Send email notifications asynchronously after response has been sent to the user's browser
        // This makes the form submit instant (< 50ms) and saves data to DB immediately!
        $data = $validated;
        $data['user_message'] = $validated['message'];

        dispatch(function () use ($data, $validated) {
            try {
                \Log::info('Mail sending started after response');

                Mail::send('emails.admin-contact', $data, function ($message) {
                    $message->to('business@wegeni.com')
                        ->subject('New Contact Submission - Geni Fast');
                });

                Mail::send('emails.user-thankyou', $data, function ($message) use ($validated) {
                    $message->to($validated['email'])
                        ->subject('Thank You for Contacting Geni Fast');
                });
            } catch (\Throwable $mailEx) {
                \Log::error('Mail Error: ' . $mailEx->getMessage());
            }
        })->afterResponse();

        return back()->with(
            'success',
            'Your enquiry has been successfully submitted. The Geni Menu team will review your details and get back to you shortly.'
        );
    }

    public function index()
    {
        $contacts = Csubmissions::latest()->paginate(10);
        return view('contactsubmission.index', compact('contacts'));
    }
    public function show($id)
    {
        $contact = Csubmissions::findOrFail($id);
        return view('contactsubmission.show', compact('contact'));
    }
    public function destroy($id)
    {
        $contact = Csubmissions::findOrFail($id);
        $contact->delete();
        return redirect()->route('superadmin.admin.contacts')->with('success', 'Contact submission deleted successfully.');
    }

}
