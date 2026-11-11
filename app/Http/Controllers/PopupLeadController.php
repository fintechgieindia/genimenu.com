<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Csubmissions;

class PopupLeadController extends Controller
{
    public function store(Request $request)
    {
        // Support phone combination
        $phone = $request->input('phone');
        if (!$phone && $request->filled('phone_number')) {
            $phone = trim(($request->input('phone_code') ?? '') . ' ' . $request->input('phone_number'));
        }

        $request->merge([
            'phone' => $phone,
            'business_name' => $request->input('business_name') ?: $request->input('restaurant_name'),
            'country' => $request->input('country') ?: $request->input('city'),
        ]);

        $validated = $request->validate([
            'full_name' => 'required|string|min:2|max:255',
            'business_name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|min:7|max:50',
        ], [
            'full_name.required' => 'Please enter your full name.',
            'full_name.min' => 'Full Name must be at least 2 characters.',
            'business_name.required' => 'Please enter your business or restaurant name.',
            'business_name.min' => 'Business Name must be at least 2 characters.',
            'email.required' => 'Please enter your business email.',
            'email.email' => 'Please enter a valid email address.',
            'country.required' => 'Please select your country.',
            'phone.required' => 'Please enter your phone number with country code.',
            'phone.min' => 'Phone number must be at least 7 digits.',
        ]);

        $fullName     = $validated['full_name'];
        $businessName = $validated['business_name'];
        $email        = $validated['email'];
        $country      = $validated['country'];
        $cleanPhone   = $validated['phone'];

        // 1. Store into submissions (Csubmissions) so Superadmin Messages displays it under "Popup Leads"
        try {
            Csubmissions::create([
                'name'        => $fullName,
                'email'       => $email,
                'company'     => $businessName,
                'country'     => $country,
                'address'     => $country,
                'phone'       => $cleanPhone,
                'subject'     => 'Personalised Demo Request',
                'message'     => 'Requested a Personalised Demo from the website popup modal.',
                'form_type'   => 'popup',
            ]);
        } catch (\Throwable $subEx) {
            \Log::error('Csubmissions popup store error: ' . $subEx->getMessage());
        }

        // 2. Also store in popup_leads table for backward compatibility
        $popupData = [
            'full_name'       => $fullName,
            'email'           => $email,
            'phone'           => $cleanPhone,
            'restaurant_name' => $businessName,
            'business_name'   => $businessName,
            'city'            => $country,
            'country'         => $country,
            'created_at'      => now(),
        ];

        try {
            DB::table('popup_leads')->insert($popupData);
        } catch (\Throwable $popEx) {
            \Log::error('popup_leads table store error: ' . $popEx->getMessage());
        }

        // 3. Dispatch emails after response (instant user feedback)
        dispatch(function () use ($popupData) {
            try {
                // Admin Mail
                Mail::send('emails.popup-admin', $popupData, function ($m) {
                    $m->to(['genimenuglobal@gmail.com', 'business@wegeni.com'])
                        ->subject('New Popup Submission From Geni Menu');
                });
            } catch (\Throwable $e) {
                \Log::error('Popup lead admin mail error: ' . $e->getMessage());
            }

            try {
                // User Mail
                Mail::to($popupData['email'])->send(new \App\Mail\PopupLeadUserMail($popupData));
            } catch (\Throwable $e) {
                \Log::error('Popup lead user mail error: ' . $e->getMessage());
            }

            try {
                // Notify SuperAdmins
                $superAdmins = \App\Models\User::whereNull('restaurant_id')->get();
                \Illuminate\Support\Facades\Notification::send($superAdmins, new \App\Notifications\NewPopupLeadNotification($popupData));
            } catch (\Throwable $e) {
                \Log::error('Popup lead notification error: ' . $e->getMessage());
            }
        })->afterResponse();

        $successMsg = 'Thank you! Your demo request has been submitted successfully. Our team will connect with you shortly.';

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $successMsg,
            ]);
        }

        return back()->with('success', $successMsg);
    }
}
