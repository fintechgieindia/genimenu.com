<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Csubmissions;

class MessageController extends Controller
{
    /**
     * Display a listing of messages with instant client-side tab switching & live refresh.
     */
    public function index(Request $request)
    {
        $activeTab = $request->get('type', 'contact');
        if (!in_array($activeTab, ['contact', 'enquiry', 'popup', 'partner'])) {
            $activeTab = 'contact';
        }

        $search = $request->get('search');

        // Contact query
        $contactQuery = Csubmissions::where(function ($q) {
            $q->where('form_type', 'contact')
              ->orWhereNull('form_type');
        });

        // Enquiry query
        $enquiryQuery = Csubmissions::where('form_type', 'enquiry');

        // Popup query
        $popupQuery = Csubmissions::where('form_type', 'popup');

        // Partner query
        $partnerQuery = Csubmissions::where('form_type', 'partner');

        if (!empty($search)) {
            $searchCallback = function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('other_subject', 'like', "%{$search}%")
                  ->orWhere('preferred_model', 'like', "%{$search}%")
                  ->orWhere('country', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%")
                  ->orWhere('designation', 'like', "%{$search}%")
                  ->orWhere('website', 'like', "%{$search}%")
                  ->orWhere('requirements', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            };
            $contactQuery->where($searchCallback);
            $enquiryQuery->where($searchCallback);
            $popupQuery->where($searchCallback);
            $partnerQuery->where($searchCallback);
        }

        $contactCount = (clone $contactQuery)->count();
        $enquiryCount = (clone $enquiryQuery)->count();
        $popupCount = (clone $popupQuery)->count();
        $partnerCount = (clone $partnerQuery)->count();

        // Support fast silent AJAX polling / instant refresh
        if ($request->has('poll')) {
            $latestContact = (clone $contactQuery)->latest()->take(25)->get()->map(function ($item) {
                $item->formatted_date = $item->created_at ? $item->created_at->format('d M Y, h:i A') : '-';
                return $item;
            });
            $latestEnquiry = (clone $enquiryQuery)->latest()->take(25)->get()->map(function ($item) {
                $item->formatted_date = $item->created_at ? $item->created_at->format('d M Y, h:i A') : '-';
                return $item;
            });
            $latestPopup = (clone $popupQuery)->latest()->take(25)->get()->map(function ($item) {
                $item->formatted_date = $item->created_at ? $item->created_at->format('d M Y, h:i A') : '-';
                return $item;
            });
            $latestPartner = (clone $partnerQuery)->latest()->take(25)->get()->map(function ($item) {
                $item->formatted_date = $item->created_at ? $item->created_at->format('d M Y, h:i A') : '-';
                return $item;
            });

            return response()->json([
                'success'        => true,
                'contactCount'   => $contactCount,
                'enquiryCount'   => $enquiryCount,
                'popupCount'     => $popupCount,
                'partnerCount'   => $partnerCount,
                'contactMessages'=> $latestContact,
                'enquiryMessages'=> $latestEnquiry,
                'popupMessages'  => $latestPopup,
                'partnerMessages'=> $latestPartner,
            ]);
        }

        $contactMessages = $contactQuery->latest()->paginate(15, ['*'], 'contact_page')->withQueryString();
        $enquiryMessages = $enquiryQuery->latest()->paginate(15, ['*'], 'enquiry_page')->withQueryString();
        $popupMessages   = $popupQuery->latest()->paginate(15, ['*'], 'popup_page')->withQueryString();
        $partnerMessages = $partnerQuery->latest()->paginate(15, ['*'], 'partner_page')->withQueryString();

        return view('messages.index', compact(
            'contactMessages',
            'enquiryMessages',
            'popupMessages',
            'partnerMessages',
            'activeTab',
            'contactCount',
            'enquiryCount',
            'popupCount',
            'partnerCount',
            'search'
        ));
    }

    /**
     * Display the specified message details.
     */
    public function show($id, Request $request)
    {
        $message = Csubmissions::findOrFail($id);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $message,
                'created_at_formatted' => $message->created_at ? $message->created_at->format('D, d M Y, h:i A') : '-',
            ]);
        }

        return view('messages.show', compact('message'));
    }

    /**
     * Remove the specified message from storage.
     */
    public function destroy($id)
    {
        $message = Csubmissions::findOrFail($id);
        $type = $message->form_type ?? 'contact';
        $message->delete();

        return redirect()->route('superadmin.messages.index', ['type' => $type])
            ->with('success', 'Message deleted successfully.');
    }
}
