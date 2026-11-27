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
        // 0. Comprehensive Anti-Spam Verification (Honeypot, Timing, Disposable Emails, Bot Patterns)
        $spam = \App\Services\SpamProtectionService::check($request);
        if ($spam['is_spam']) {
            \Log::warning("Form submission blocked by Spam Protection: {$spam['reason']} | IP: {$request->ip()} | Email: " . $request->input('email'));

            if (!empty($spam['error_message'])) {
                return back()->withInput()->with('error', $spam['error_message']);
            }

            // Silent drop for automated bots (returns fake success to prevent bot adaptation, but NO DB record is saved and NO email is sent!)
            $formType = $request->input('form_type', 'contact');
            $fakeSuccessMsg = ($formType === 'partner')
                ? 'Your partnership application has been successfully submitted. The Geni Menu team will review your business profile and contact you shortly.'
                : 'Your message has been successfully submitted. The Geni Menu team will get back to you shortly.';

            return back()->with('success', $fakeSuccessMsg);
        }

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

        // Append multi-selected requirements into message for email visibility
        if ($reqString) {
            $reqText = "Interested In: " . $reqString;
            $origMsg = $request->input('message', '');
            $fullMsg = $origMsg ? ($reqText . "\n\n" . $origMsg) : $reqText;
            $request->merge(['message' => $fullMsg]);
        }

        // Handle partner programme fields
        $origPartnerNotes = $request->input('message', '');
        $partnerPhoneCode = $request->input('phone_code', '');
        $partnerPhoneNumber = $request->input('phone_number', '');
        $partnerCustomerBase = $request->input('customer_base', '');
        $partnerYearsInBusiness = $request->input('years_in_business', '');
        $prefModel = $request->input('preferred_model', '');

        if ($request->input('form_type') === 'partner' || $request->filled('preferred_model')) {
            $partnerDetails = [];
            $prefModel = $request->input('preferred_model');
            if ($request->filled('other_preferred_model')) {
                $otherModel = trim($request->input('other_preferred_model'));
                if ($otherModel !== '') {
                    $prefModel = ($prefModel === 'Other' || empty($prefModel)) ? ('Other: ' . $otherModel) : ($prefModel . ' (' . $otherModel . ')');
                }
            }
            if ($prefModel) {
                $partnerDetails[] = "Preferred Partnership Model: " . $prefModel;
            }
            if ($request->filled('customer_base')) {
                $partnerDetails[] = "Current Customer Base: " . $request->customer_base;
            }
            if ($request->filled('years_in_business')) {
                $partnerDetails[] = "Years in Business: " . $request->years_in_business;
            }
            if (!empty($partnerDetails)) {
                $pText = implode("\n", $partnerDetails);
                $origMsg = $request->input('message', '');
                $fullMsg = $origMsg ? ($pText . "\n\n" . $origMsg) : $pText;
                $request->merge(['message' => $fullMsg]);
            }
        }

        // If website is filled, prepend to message for email visibility
        if ($request->filled('website')) {
            $webText = "Website: " . $request->website;
            $origMsg = $request->input('message', '');
            $fullMsg = $origMsg ? ($webText . "\n" . $origMsg) : $webText;
            $request->merge(['message' => $fullMsg]);
        }

        // Handle Other Business Type / Subject
        $otherSub = $request->input('other_subject') ?: $request->input('other_business_type');
        if (!empty($otherSub)) {
            $otherSubject = trim($otherSub);
            if ($otherSubject !== '') {
                // If subject is Other, format subject to include the specified value
                if ($request->input('subject') === 'Other' || !$request->filled('subject')) {
                    $request->merge([
                        'subject' => 'Other: ' . $otherSubject,
                        'other_subject' => $otherSubject
                    ]);
                } else {
                    $request->merge([
                        'other_subject' => $otherSubject
                    ]);
                }
            }
        }

        // Determine form type (contact vs enquiry vs partner)
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

        $validated = $request->validate([
            'form_type' => 'nullable|string|in:contact,enquiry,partner',
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
            'requirements' => 'nullable',
            'subject' => 'required|string|max:255',
            'other_subject' => 'nullable|string|max:255',
            'other_business_type' => 'nullable|string|max:255',
            'preferred_model' => 'nullable|string|max:255',
            'other_preferred_model' => 'nullable|string|max:255',
            'customer_base' => 'nullable|string|max:255',
            'years_in_business' => 'nullable|string|max:255',
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

        $validated['requirements'] = $reqString;
        $validated['preferred_model'] = $prefModel ?: ($validated['preferred_model'] ?? null);
        $validated['customer_base'] = $partnerCustomerBase ?: ($validated['customer_base'] ?? null);
        $validated['years_in_business'] = $partnerYearsInBusiness ?: ($validated['years_in_business'] ?? null);

        try {
            // Filter data according to columns that actually exist in the database table
            // This guarantees live submissions never fail even if migrations are pending on production
            $existingColumns = \Illuminate\Support\Facades\Schema::getColumnListing('submissions');
            $dataToSave = !empty($existingColumns)
                ? array_intersect_key($validated, array_flip($existingColumns))
                : $validated;

            Csubmissions::create($dataToSave);
        } catch (\Exception $e) {
            \Log::error('Contact form DB error: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Unable to submit your enquiry right now. Please try again.');
        }

        $rawFormType = strtolower($validated['form_type'] ?? $request->input('form_type', 'contact'));
        if ($rawFormType === 'partner') {
            $formName = 'Partner Programme Application';
            $successMsg = 'Your partnership application has been successfully submitted. The Geni Menu team will review your business profile and contact you shortly.';
        } elseif ($rawFormType === 'enquiry') {
            $formName = 'Enquiry & Free Demo';
            $successMsg = 'Your enquiry has been successfully submitted. The Geni Menu team will review your details and get back to you shortly.';
        } else {
            $formName = 'Contact Form';
            $successMsg = 'Your message has been successfully submitted. The Geni Menu team will get back to you shortly.';
        }

        // Send email notifications asynchronously after response has been sent to the user's browser
        // This makes the form submit instant (< 50ms) and saves data to DB immediately!
        $data = $validated;
        $data['user_message'] = $validated['message'];

        // Common & specific template variables matching user's requested formats:
        $data['full_name'] = $validated['name'];
        $data['email_address'] = $validated['email'];
        $data['company_name'] = $validated['company'] ?? '';
        $data['business_name'] = $validated['company'] ?? '';
        $data['business_email'] = $validated['email'];
        $data['country_code'] = $partnerPhoneCode ?: ($request->input('phone_code') ?: '');
        $data['phone_number'] = $partnerPhoneNumber ?: ($request->input('phone_number') ?: $validated['phone']);
        $data['country'] = $validated['country'] ?? ($validated['address'] ?? '');
        $data['company_website'] = $validated['website'] ?? '-';
        $data['website_url'] = !empty($validated['website']) ? $validated['website'] : '-';
        $data['business_type'] = !empty($validated['other_subject']) ? ($validated['subject'] . ' (' . $validated['other_subject'] . ')') : ($validated['subject'] ?? '');
        $data['number_of_outlets'] = $validated['designation'] ?? '-';
        $data['partnership_model'] = !empty($prefModel) ? $prefModel : ($validated['preferred_model'] ?? '-');
        $data['customer_base'] = $partnerCustomerBase ?: ($validated['customer_base'] ?? '-');
        $data['years_in_business'] = $partnerYearsInBusiness ?: ($validated['years_in_business'] ?? '-');
        $data['business_details'] = $origPartnerNotes ?: '-';
        $data['source_page'] = ($rawFormType === 'partner') ? 'Partner Programme Page' : (($rawFormType === 'enquiry') ? 'Enquiry & Free Demo' : 'Contact Geni Menu');
        $data['page_url'] = $request->headers->get('referer') ?: url($rawFormType === 'partner' ? '/partners' : ($rawFormType === 'enquiry' ? '/enquiry' : '/contact'));
        $data['submitted_at'] = now()->timezone('Asia/Kolkata')->format('d M Y, h:i A') . ' (IST)';
        $data['form_name'] = $formName;

        dispatch(function () use ($data, $validated, $formName, $rawFormType) {
            try {
                \Log::info("Mail sending started after response for {$formName}");

                // Explicitly bind Superadmin Email Settings to runtime mail config
                $emailSetting = \App\Models\EmailSetting::first();
                if ($emailSetting && !empty($emailSetting->mail_password)) {
                    config([
                        'mail.default' => !empty($emailSetting->mail_driver) ? $emailSetting->mail_driver : 'smtp',
                        'mail.mailers.smtp.host' => !empty($emailSetting->smtp_host) ? $emailSetting->smtp_host : 'smtp.gmail.com',
                        'mail.mailers.smtp.port' => !empty($emailSetting->smtp_port) ? (int)$emailSetting->smtp_port : 465,
                        'mail.mailers.smtp.encryption' => !empty($emailSetting->smtp_encryption) ? $emailSetting->smtp_encryption : 'ssl',
                        'mail.mailers.smtp.username' => $emailSetting->mail_username,
                        'mail.mailers.smtp.password' => $emailSetting->mail_password,
                        'mail.from.address' => !empty($emailSetting->mail_from_email) ? $emailSetting->mail_from_email : 'genimenuglobal@gmail.com',
                        'mail.from.name' => !empty($emailSetting->mail_from_name) ? $emailSetting->mail_from_name : 'Geni Menu',
                    ]);
                }

                $adminEmail = (!empty($emailSetting->mail_from_email))
                    ? $emailSetting->mail_from_email
                    : (config('mail.admin_email') ?: config('mail.from.address') ?: env('ADMIN_EMAIL') ?: 'genimenuglobal@gmail.com');
                $recipients = array_values(array_filter([$adminEmail]));

                // For partner application forms, also send notification to the partner notification email configured in Superadmin Email Settings
                if ($rawFormType === 'partner') {
                    $globalSetting = function_exists('global_setting') ? global_setting() : \App\Models\GlobalSetting::first();

                    $partnerEmail = !empty($emailSetting->partner_notification_email)
                        ? $emailSetting->partner_notification_email
                        : (!empty($globalSetting->partner_notification_email)
                            ? $globalSetting->partner_notification_email
                            : (config('mail.partner_email') ?: env('PARTNER_NOTIFICATION_EMAIL') ?: 'priyamayil04@gmail.com'));

                    $partnerEmail = trim((string)$partnerEmail);
                    if ($partnerEmail && !in_array($partnerEmail, $recipients)) {
                        $recipients[] = $partnerEmail;
                    }
                }

                // 1. Send submission notification to admin(s)
                if ($rawFormType === 'partner') {
                    Mail::send('emails.partner-admin-notification', $data, function ($message) use ($recipients) {
                        $message->to($recipients)
                            ->subject("New Partner Application Submission - Geni Menu");
                    });
                } elseif ($rawFormType === 'enquiry') {
                    Mail::send('emails.enquiry-admin-notification', $data, function ($message) use ($recipients) {
                        $message->to($recipients)
                            ->subject("New Demo & Pricing Enquiry - Geni Menu");
                    });
                } elseif ($rawFormType === 'contact') {
                    Mail::send('emails.contact-admin-notification', $data, function ($message) use ($recipients) {
                        $message->to($recipients)
                            ->subject("New Contact Form Message - Geni Menu");
                    });
                } else {
                    Mail::send('emails.admin-contact', $data, function ($message) use ($recipients, $formName) {
                        $message->to($recipients)
                            ->subject("New {$formName} Submission - Geni Menu");
                    });
                }

                // 2. Send customized confirmation email to the user / applicant
                if ($rawFormType === 'partner') {
                    Mail::send('emails.partner-user-thankyou', $data, function ($message) use ($validated) {
                        $message->to($validated['email'])
                            ->subject('Welcome to Geni Menu - Partner Application Received');
                    });
                } elseif ($rawFormType === 'enquiry') {
                    Mail::send('emails.enquiry-user-thankyou', $data, function ($message) use ($validated) {
                        $message->to($validated['email'])
                            ->subject('Thank you for your enquiry with Geni Menu');
                    });
                } elseif ($rawFormType === 'contact') {
                    Mail::send('emails.contact-user-thankyou', $data, function ($message) use ($validated) {
                        $message->to($validated['email'])
                            ->subject('Thank you for contacting Geni Menu');
                    });
                } else {
                    Mail::send('emails.user-thankyou', $data, function ($message) use ($validated, $formName) {
                        $message->to($validated['email'])
                            ->subject('Thank You for Contacting Geni Menu');
                    });
                }

                $recipientList = implode(', ', $recipients);
                \Log::info("Mail successfully sent for {$formName} to [{$recipientList}] and {$validated['email']}");
            } catch (\Throwable $mailEx) {
                \Log::error("Mail Error in {$formName}: " . $mailEx->getMessage() . "\n" . $mailEx->getTraceAsString());
            }
        })->afterResponse();

        return back()->with('success', $successMsg);
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
