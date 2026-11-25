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

        // Append multi-selected requirements into message for email visibility
        if ($reqString) {
            $reqText = "Interested In: " . $reqString;
            $origMsg = $request->input('message', '');
            $fullMsg = $origMsg ? ($reqText . "\n\n" . $origMsg) : $reqText;
            $request->merge(['message' => $fullMsg]);
        }

        // Handle partner programme fields
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

        // Send email notifications asynchronously after response has been sent to the user's browser
        // This makes the form submit instant (< 50ms) and saves data to DB immediately!
        $data = $validated;
        $data['user_message'] = $validated['message'];

        $rawFormType = strtolower($validated['form_type'] ?? $request->input('form_type', 'contact'));
        if ($rawFormType === 'partner') {
            $formName = 'Partner Programme Application';
            $successMsg = 'Your partnership application has been successfully submitted. The Geni Menu team will review your business profile and contact you shortly.';
        } elseif ($rawFormType === 'enquiry') {
            $formName = 'Enquiry Form';
            $successMsg = 'Your enquiry has been successfully submitted. The Geni Menu team will review your details and get back to you shortly.';
        } else {
            $formName = 'Contact Form';
            $successMsg = 'Your message has been successfully submitted. The Geni Menu team will get back to you shortly.';
        }
        $data['form_name'] = $formName;

        dispatch(function () use ($data, $validated, $formName) {
            try {
                \Log::info("Mail sending started after response for {$formName}");

                $adminEmail = config('mail.admin_email') ?: config('mail.from.address') ?: env('ADMIN_EMAIL') ?: 'genimenuglobal@gmail.com';

                Mail::send('emails.admin-contact', $data, function ($message) use ($adminEmail, $formName) {
                    $message->to($adminEmail)
                        ->subject("New {$formName} Submission - Geni Menu");
                });

                Mail::send('emails.user-thankyou', $data, function ($message) use ($validated, $formName) {
                    $subject = ($formName === 'Partner Programme Application')
                        ? 'Thank You for Applying to the Geni Menu Partner Programme'
                        : 'Thank You for Contacting Geni Menu';
                    $message->to($validated['email'])
                        ->subject($subject);
                });

                \Log::info("Mail successfully sent for {$formName} to {$adminEmail} and {$validated['email']}");
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
