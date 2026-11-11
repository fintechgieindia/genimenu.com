@extends('layouts.app')

@section('content')
<div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-3 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            <div>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Messages & Form Submissions</h1>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                    Live real-time feed of enquiries and contact messages received from the website.
                </p>
            </div>
            {{-- Quick Live Refresh Button --}}
            <div class="flex items-center gap-2">
                <button type="button"
                        id="refreshBtn"
                        onclick="refreshMessages(true)"
                        class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-skin-base dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600 transition shadow-sm"
                        title="Check for new submissions now">
                    <svg id="refreshIcon" class="w-3.5 h-3.5 me-1.5 text-gray-500 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    <span id="refreshBtnText">Refresh Now</span>
                </button>
                <span id="liveStatusBadge" class="inline-flex items-center gap-1 px-2 py-1 text-[11px] font-medium text-green-700 bg-green-50 border border-green-200 rounded-full dark:bg-green-900/30 dark:text-green-300 dark:border-green-800">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                    Live Auto-Sync
                </span>
            </div>
        </div>

        {{-- Flash Messages --}}
        @if (session('success'))
            <div class="p-3 mb-3 text-xs text-green-800 rounded-lg bg-green-50 dark:bg-gray-700 dark:text-green-400 border border-green-200 dark:border-green-800 flex items-center justify-between" role="alert">
                <span><strong class="font-semibold">Success!</strong> {{ session('success') }}</span>
                <button type="button" onclick="this.parentElement.remove()" class="text-green-600 hover:text-green-900 text-sm font-bold">&times;</button>
            </div>
        @endif

        {{-- Instant Tabs (Zero-Reload / Client-side Switching) & Search --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-b border-gray-200 dark:border-gray-700 pb-2.5">
            <div class="flex items-center space-x-2">
                {{-- Contact Messages Tab Button --}}
                <button type="button"
                        id="tab-btn-contact"
                        onclick="switchTab('contact')"
                        class="tab-btn inline-flex items-center px-3.5 py-2 text-xs font-semibold rounded-lg transition {{ $activeTab === 'contact' ? 'bg-skin-base text-white shadow' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700' }}">
                    <svg class="w-3.5 h-3.5 me-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Contact Messages
                    <span id="contactCountBadge" class="ms-2 px-1.5 py-0.5 text-[11px] font-bold rounded-full {{ $activeTab === 'contact' ? 'bg-white/20 text-white' : 'bg-gray-200 text-gray-700 dark:bg-gray-600 dark:text-gray-200' }}">
                        {{ $contactCount }}
                    </span>
                </button>

                {{-- Enquiry Messages Tab Button --}}
                <button type="button"
                        id="tab-btn-enquiry"
                        onclick="switchTab('enquiry')"
                        class="tab-btn inline-flex items-center px-3.5 py-2 text-xs font-semibold rounded-lg transition {{ $activeTab === 'enquiry' ? 'bg-skin-base text-white shadow' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700' }}">
                    <svg class="w-3.5 h-3.5 me-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Enquiry Messages
                    <span id="enquiryCountBadge" class="ms-2 px-1.5 py-0.5 text-[11px] font-bold rounded-full {{ $activeTab === 'enquiry' ? 'bg-white/20 text-white' : 'bg-gray-200 text-gray-700 dark:bg-gray-600 dark:text-gray-200' }}">
                        {{ $enquiryCount }}
                    </span>
                </button>

                {{-- Popup Leads Tab Button --}}
                <button type="button"
                        id="tab-btn-popup"
                        onclick="switchTab('popup')"
                        class="tab-btn inline-flex items-center px-3.5 py-2 text-xs font-semibold rounded-lg transition {{ $activeTab === 'popup' ? 'bg-skin-base text-white shadow' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700' }}">
                    <svg class="w-3.5 h-3.5 me-1.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    Popup Leads
                    <span id="popupCountBadge" class="ms-2 px-1.5 py-0.5 text-[11px] font-bold rounded-full {{ $activeTab === 'popup' ? 'bg-white/20 text-white' : 'bg-gray-200 text-gray-700 dark:bg-gray-600 dark:text-gray-200' }}">
                        {{ $popupCount }}
                    </span>
                </button>
            </div>

            {{-- Search Bar --}}
            <form action="{{ route('superadmin.messages.index') }}" method="GET" class="flex items-center gap-2">
                <input type="hidden" name="type" id="searchFormType" value="{{ $activeTab }}">
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-2.5 pointer-events-none">
                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" name="search" value="{{ $search ?? '' }}"
                           placeholder="Search submissions..."
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-skin-base focus:border-skin-base block w-full pl-8 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                </div>
                <button type="submit" class="px-3 py-1.5 text-xs font-semibold text-white bg-skin-base rounded-lg hover:opacity-90 transition">
                    Search
                </button>
                @if (!empty($search))
                    <a href="{{ route('superadmin.messages.index', ['type' => $activeTab]) }}" class="px-2.5 py-1.5 text-xs text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-300">
                        Clear
                    </a>
                @endif
            </form>
        </div>
    </div>
</div>

<div class="p-4 bg-white dark:bg-gray-800">

    {{-- ======================== 1. CONTACT TAB PANE ======================== --}}
    <div id="tab-pane-contact" class="{{ $activeTab === 'contact' ? '' : 'hidden' }}">
        <div class="flex items-center justify-between mb-2 text-xs text-gray-500 dark:text-gray-400">
            <div>
                Showing <span class="font-semibold text-gray-900 dark:text-white" id="contactDisplayCount">{{ $contactMessages->total() }}</span> Contact submission(s)
            </div>
            <div class="text-[11px] text-gray-400">
                Source: <span class="font-mono text-skin-base font-semibold">/contact-us</span>
            </div>
        </div>

        <div class="overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">#</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Full Name</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Email Address</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Phone</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Country</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Subject</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Message Preview</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Date Received</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-right text-gray-500 uppercase tracking-wider dark:text-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody id="contactTableBody" class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @forelse ($contactMessages as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="py-2.5 px-3 text-xs font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </td>
                            <td class="py-2.5 px-3 text-xs font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                <a href="mailto:{{ $item->email }}" class="text-blue-600 hover:underline dark:text-blue-400">
                                    {{ $item->email }}
                                </a>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-800 whitespace-nowrap dark:text-gray-200 font-medium">
                                <a href="tel:{{ $item->phone }}" class="hover:underline">
                                    {{ $item->phone }}
                                </a>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                {{ $item->country ?? $item->address ?? '-' }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-medium bg-amber-50 text-amber-900 dark:bg-amber-900/40 dark:text-amber-200 border border-amber-200 dark:border-amber-700">
                                    {{ $item->subject }}
                                </span>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-500 max-w-xs truncate dark:text-gray-400" title="{{ $item->message }}">
                                {{ Str::limit($item->message, 45) }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $item->created_at ? $item->created_at->format('d M Y, h:i A') : '-' }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-right whitespace-nowrap">
                                <div class="inline-flex items-center gap-1.5 justify-end">
                                    <button type="button"
                                            onclick='openMessageModal(@json($item))'
                                            class="inline-flex items-center px-2 py-1 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600 shadow-sm"
                                            title="View Details">
                                        <svg class="w-3 h-3 me-1 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        View
                                    </button>
                                    <button type="button"
                                            onclick="confirmDelete({{ $item->id }}, '{{ addslashes($item->name) }}')"
                                            class="inline-flex items-center p-1 text-xs text-red-600 bg-white border border-red-200 rounded hover:bg-red-50 focus:outline-none dark:bg-gray-700 dark:text-red-400 dark:border-red-900/50"
                                            title="Delete Message">
                                        <svg class="w-3.5 h-3.5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="py-10 text-center text-xs text-gray-500 dark:text-gray-400">
                                <p class="font-medium text-gray-700 dark:text-gray-300">No contact messages found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($contactMessages->hasPages())
            <div class="mt-3">
                {{ $contactMessages->links() }}
            </div>
        @endif
    </div>

    {{-- ======================== 2. ENQUIRY TAB PANE ======================== --}}
    <div id="tab-pane-enquiry" class="{{ $activeTab === 'enquiry' ? '' : 'hidden' }}">
        <div class="flex items-center justify-between mb-2 text-xs text-gray-500 dark:text-gray-400">
            <div>
                Showing <span class="font-semibold text-gray-900 dark:text-white" id="enquiryDisplayCount">{{ $enquiryMessages->total() }}</span> Enquiry submission(s)
            </div>
            <div class="text-[11px] text-gray-400">
                Source: <span class="font-mono text-skin-base font-semibold">/enquiry</span>
            </div>
        </div>

        <div class="overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">#</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Contact Person</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Business / Restaurant</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Email Address</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Phone</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Country</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Business Type</th>
                        <th scope="col" class="py-2.5 px-2 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Outlets</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Requirements</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Date Received</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-right text-gray-500 uppercase tracking-wider dark:text-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody id="enquiryTableBody" class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @forelse ($enquiryMessages as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="py-2.5 px-3 text-xs font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </td>
                            <td class="py-2.5 px-3 text-xs font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-700 whitespace-nowrap dark:text-gray-300">
                                <span class="font-semibold text-gray-900 dark:text-white">{{ $item->company ?? '-' }}</span>
                                @if ($item->website)
                                    <a href="{{ Str::startsWith($item->website, 'http') ? $item->website : 'https://' . $item->website }}" target="_blank" class="block text-[11px] text-skin-base hover:underline mt-0.5" title="{{ $item->website }}">
                                        {{ Str::limit($item->website, 20) }} &#8599;
                                    </a>
                                @endif
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                <a href="mailto:{{ $item->email }}" class="text-blue-600 hover:underline dark:text-blue-400">
                                    {{ $item->email }}
                                </a>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-800 whitespace-nowrap dark:text-gray-200 font-medium">
                                <a href="tel:{{ $item->phone }}" class="hover:underline">
                                    {{ $item->phone }}
                                </a>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                {{ $item->country ?? $item->address ?? '-' }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-medium bg-blue-50 text-blue-800 dark:bg-blue-900/50 dark:text-blue-300 border border-blue-200 dark:border-blue-800">
                                    {{ $item->subject }}
                                </span>
                            </td>
                            <td class="py-2.5 px-2 text-xs text-gray-700 whitespace-nowrap dark:text-gray-300 font-medium">
                                {{ $item->designation ?? '-' }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 max-w-xs dark:text-gray-300">
                                @php
                                    $reqStr = $item->requirements;
                                    if (!$reqStr && str_contains($item->message, 'Interested In:')) {
                                        if (preg_match('/Interested In:\s*([^\n\r]+)/', $item->message, $m)) {
                                            $reqStr = $m[1];
                                        }
                                    }
                                @endphp
                                @if ($reqStr)
                                    @php
                                        $reqList = array_filter(array_map('trim', explode(',', $reqStr)));
                                    @endphp
                                    <div class="flex flex-wrap gap-1">
                                        @foreach (array_slice($reqList, 0, 2) as $r)
                                            <span class="inline-block px-1.5 py-0.5 bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200 rounded text-[10px]">
                                                {{ $r }}
                                            </span>
                                        @endforeach
                                        @if (count($reqList) > 2)
                                            <span class="text-[10px] text-gray-400 font-semibold">+{{ count($reqList) - 2 }}</span>
                                        @endif
                                    </div>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $item->created_at ? $item->created_at->format('d M Y, h:i A') : '-' }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-right whitespace-nowrap">
                                <div class="inline-flex items-center gap-1.5 justify-end">
                                    <button type="button"
                                            onclick='openMessageModal(@json($item))'
                                            class="inline-flex items-center px-2 py-1 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600 shadow-sm"
                                            title="View Details">
                                        <svg class="w-3 h-3 me-1 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        View
                                    </button>
                                    <button type="button"
                                            onclick="confirmDelete({{ $item->id }}, '{{ addslashes($item->name) }}')"
                                            class="inline-flex items-center p-1 text-xs text-red-600 bg-white border border-red-200 rounded hover:bg-red-50 focus:outline-none dark:bg-gray-700 dark:text-red-400 dark:border-red-900/50"
                                            title="Delete Message">
                                        <svg class="w-3.5 h-3.5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="py-10 text-center text-xs text-gray-500 dark:text-gray-400">
                                <p class="font-medium text-gray-700 dark:text-gray-300">No enquiry messages found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($enquiryMessages->hasPages())
            <div class="mt-3">
                {{ $enquiryMessages->links() }}
            </div>
        @endif
    </div>

    {{-- ======================== 3. POPUP TAB PANE ======================== --}}
    <div id="tab-pane-popup" class="{{ $activeTab === 'popup' ? '' : 'hidden' }}">
        <div class="flex items-center justify-between mb-2 text-xs text-gray-500 dark:text-gray-400">
            <div>
                Showing <span class="font-semibold text-gray-900 dark:text-white" id="popupDisplayCount">{{ $popupMessages->total() }}</span> Popup Lead submission(s)
            </div>
            <div class="text-[11px] text-gray-400">
                Source: <span class="font-mono text-skin-base font-semibold">Website Popup Modal</span>
            </div>
        </div>

        <div class="overflow-x-auto shadow ring-1 ring-black ring-opacity-5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">#</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Full Name</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Business Name</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Email Address</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Phone</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Country</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Request Type</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-left text-gray-500 uppercase tracking-wider dark:text-gray-300">Date Received</th>
                        <th scope="col" class="py-2.5 px-3 text-xs font-semibold text-right text-gray-500 uppercase tracking-wider dark:text-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody id="popupTableBody" class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @forelse ($popupMessages as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="py-2.5 px-3 text-xs font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </td>
                            <td class="py-2.5 px-3 text-xs font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-700 whitespace-nowrap dark:text-gray-300">
                                <span class="font-semibold text-gray-900 dark:text-white">{{ $item->company ?? '-' }}</span>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                <a href="mailto:{{ $item->email }}" class="text-blue-600 hover:underline dark:text-blue-400">
                                    {{ $item->email }}
                                </a>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-800 whitespace-nowrap dark:text-gray-200 font-medium">
                                <a href="tel:{{ $item->phone }}" class="hover:underline">
                                    {{ $item->phone }}
                                </a>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                {{ $item->country ?? $item->address ?? '-' }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-600 whitespace-nowrap dark:text-gray-300">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-medium bg-emerald-50 text-emerald-900 border border-emerald-200 dark:bg-emerald-900/40 dark:text-emerald-200 dark:border-emerald-700">
                                    {{ $item->subject ?? 'Personalised Demo' }}
                                </span>
                            </td>
                            <td class="py-2.5 px-3 text-xs text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $item->created_at ? $item->created_at->format('d M Y, h:i A') : '-' }}
                            </td>
                            <td class="py-2.5 px-3 text-xs text-right whitespace-nowrap">
                                <div class="inline-flex items-center gap-1.5 justify-end">
                                    <button type="button"
                                            onclick='openMessageModal(@json($item))'
                                            class="inline-flex items-center px-2 py-1 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-50 focus:outline-none dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600 shadow-sm"
                                            title="View Details">
                                        <svg class="w-3 h-3 me-1 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        View
                                    </button>
                                    <button type="button"
                                            onclick="confirmDelete({{ $item->id }}, '{{ addslashes($item->name) }}')"
                                            class="inline-flex items-center p-1 text-xs text-red-600 bg-white border border-red-200 rounded hover:bg-red-50 focus:outline-none dark:bg-gray-700 dark:text-red-400 dark:border-red-900/50"
                                            title="Delete Message">
                                        <svg class="w-3.5 h-3.5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="py-10 text-center text-xs text-gray-500 dark:text-gray-400">
                                <p class="font-medium text-gray-700 dark:text-gray-300">No popup lead messages found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($popupMessages->hasPages())
            <div class="mt-3">
                {{ $popupMessages->links() }}
            </div>
        @endif
    </div>

</div>

{{-- ======================== COMPACT MESSAGE DETAIL MODAL ======================== --}}
<div id="messageDetailModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-3 sm:p-4">
    <div class="relative w-full max-w-lg bg-white rounded-xl shadow-2xl dark:bg-gray-800 border border-gray-100 dark:border-gray-700 overflow-hidden transform transition-all animate-in fade-in zoom-in-95 duration-150">
        {{-- Compact Modal Header --}}
        <div class="flex items-center justify-between px-4 py-3 border-b border-gray-200 dark:border-gray-700 bg-gray-50/80 dark:bg-gray-800">
            <div class="flex items-center gap-2">
                <span id="modalTypeBadge" class="px-2 py-0.5 text-[10px] font-bold rounded-full uppercase tracking-wider"></span>
                <h3 class="text-sm font-bold text-gray-900 dark:text-white" id="modalTitle">
                    Message Details
                </h3>
            </div>
            <button type="button" onclick="closeMessageModal()" class="text-gray-400 hover:text-gray-700 rounded-lg text-sm w-7 h-7 inline-flex justify-center items-center hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

        {{-- Compact Modal Body --}}
        <div class="p-4 space-y-2.5 max-h-[78vh] overflow-y-auto text-xs">
            {{-- Contact Information Grid (2 Columns, Tight spacing) --}}
            <div class="grid grid-cols-2 gap-2">
                <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                    <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider" id="modalNameLabel">Full Name</span>
                    <span id="modalName" class="text-xs font-semibold text-gray-900 dark:text-white block truncate"></span>
                </div>
                <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                    <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Email Address</span>
                    <a id="modalEmailLink" href="#" class="text-xs font-semibold text-blue-600 hover:underline dark:text-blue-400 block truncate">
                        <span id="modalEmail"></span>
                    </a>
                </div>
                <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                    <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Phone Number</span>
                    <a id="modalPhoneLink" href="#" class="text-xs font-semibold text-gray-900 dark:text-white hover:underline block truncate">
                        <span id="modalPhone"></span>
                    </a>
                </div>
                <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                    <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Country</span>
                    <span id="modalCountry" class="text-xs font-semibold text-gray-900 dark:text-white block truncate"></span>
                </div>
            </div>

            {{-- Enquiry specific fields --}}
            <div id="modalEnquiryRow" class="space-y-2" style="display: none;">
                <div class="grid grid-cols-3 gap-2">
                    <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                        <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Business Name</span>
                        <span id="modalCompany" class="text-xs font-semibold text-gray-900 dark:text-white block truncate"></span>
                    </div>
                    <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                        <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Outlets</span>
                        <span id="modalOutlets" class="text-xs font-semibold text-gray-900 dark:text-white block truncate"></span>
                    </div>
                    <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                        <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Website</span>
                        <a id="modalWebsiteLink" href="#" target="_blank" class="text-xs font-semibold text-skin-base hover:underline block truncate">
                            <span id="modalWebsite">-</span>
                        </a>
                    </div>
                </div>

                {{-- Requirements Checkboxes Box --}}
                <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                    <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Services Interested In</span>
                    <div id="modalRequirementsContainer" class="flex flex-wrap gap-1">
                        <span class="text-xs text-gray-400 italic">None selected</span>
                    </div>
                </div>
            </div>

            {{-- Subject / Business Type & Timestamp --}}
            <div class="grid grid-cols-2 gap-2">
                <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                    <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider" id="modalSubjectLabel">Subject</span>
                    <span id="modalSubject" class="text-xs font-semibold text-gray-900 dark:text-white block truncate"></span>
                </div>
                <div class="p-2 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                    <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Received Date & Time</span>
                    <span id="modalDate" class="text-xs text-gray-700 dark:text-gray-300 block truncate"></span>
                </div>
            </div>

            {{-- Message Body --}}
            <div class="p-2.5 bg-gray-50 dark:bg-gray-700/40 rounded-lg border border-gray-100 dark:border-gray-700">
                <span class="block text-[10px] font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1" id="modalMessageLabel">Message</span>
                <div id="modalMessage" class="text-xs text-gray-800 dark:text-gray-200 whitespace-pre-wrap leading-relaxed max-h-28 overflow-y-auto"></div>
            </div>
        </div>

        {{-- Compact Modal Footer --}}
        <div class="flex items-center justify-end px-4 py-2.5 border-t border-gray-200 dark:border-gray-700 bg-gray-50/80 dark:bg-gray-800">
            <button type="button" onclick="closeMessageModal()" class="px-3.5 py-1.5 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 shadow-sm transition">
                Close
            </button>
        </div>
    </div>
</div>

{{-- Delete Confirmation Modal --}}
<div id="deleteConfirmModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="relative w-full max-w-sm bg-white rounded-xl shadow-2xl dark:bg-gray-800 border border-gray-100 dark:border-gray-700 overflow-hidden p-5 text-center">
        <svg class="mx-auto mb-3 text-red-500 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
        </svg>
        <h3 class="mb-1 text-sm font-bold text-gray-900 dark:text-white">Delete Message</h3>
        <p class="mb-4 text-xs text-gray-500 dark:text-gray-400">
            Delete message from <span id="deleteSenderName" class="font-semibold text-gray-900 dark:text-white"></span>? This cannot be undone.
        </p>
        <form id="deleteMessageForm" method="POST" action="">
            @csrf
            @method('DELETE')
            <div class="flex items-center justify-center gap-2">
                <button type="button" onclick="closeDeleteModal()" class="px-3 py-1.5 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600">
                    Cancel
                </button>
                <button type="submit" class="px-3.5 py-1.5 text-xs font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 shadow-sm">
                    Yes, Delete
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// ==================== 1. ZERO-RELOAD INSTANT TAB SWITCHING ====================
var currentTab = '{{ $activeTab }}';

function switchTab(tab) {
    if (currentTab === tab) return;
    currentTab = tab;

    // Update Panes visibility instantly
    var contactPane = document.getElementById('tab-pane-contact');
    var enquiryPane = document.getElementById('tab-pane-enquiry');
    var popupPane   = document.getElementById('tab-pane-popup');

    var contactBtn  = document.getElementById('tab-btn-contact');
    var enquiryBtn  = document.getElementById('tab-btn-enquiry');
    var popupBtn    = document.getElementById('tab-btn-popup');

    var contactBadge = document.getElementById('contactCountBadge');
    var enquiryBadge = document.getElementById('enquiryCountBadge');
    var popupBadge   = document.getElementById('popupCountBadge');

    var searchFormType = document.getElementById('searchFormType');
    if (searchFormType) searchFormType.value = tab;

    var activeBtnClass = 'tab-btn inline-flex items-center px-3.5 py-2 text-xs font-semibold rounded-lg transition bg-skin-base text-white shadow';
    var inactiveBtnClass = 'tab-btn inline-flex items-center px-3.5 py-2 text-xs font-semibold rounded-lg transition text-gray-600 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700';

    var activeBadgeClass = 'ms-2 px-1.5 py-0.5 text-[11px] font-bold rounded-full bg-white/20 text-white';
    var inactiveBadgeClass = 'ms-2 px-1.5 py-0.5 text-[11px] font-bold rounded-full bg-gray-200 text-gray-700 dark:bg-gray-600 dark:text-gray-200';

    // Hide all
    if (contactPane) contactPane.classList.add('hidden');
    if (enquiryPane) enquiryPane.classList.add('hidden');
    if (popupPane) popupPane.classList.add('hidden');

    if (contactBtn) contactBtn.className = inactiveBtnClass;
    if (enquiryBtn) enquiryBtn.className = inactiveBtnClass;
    if (popupBtn) popupBtn.className = inactiveBtnClass;

    if (contactBadge) contactBadge.className = inactiveBadgeClass;
    if (enquiryBadge) enquiryBadge.className = inactiveBadgeClass;
    if (popupBadge) popupBadge.className = inactiveBadgeClass;

    if (tab === 'contact') {
        if (contactPane) contactPane.classList.remove('hidden');
        if (contactBtn) contactBtn.className = activeBtnClass;
        if (contactBadge) contactBadge.className = activeBadgeClass;
    } else if (tab === 'enquiry') {
        if (enquiryPane) enquiryPane.classList.remove('hidden');
        if (enquiryBtn) enquiryBtn.className = activeBtnClass;
        if (enquiryBadge) enquiryBadge.className = activeBadgeClass;
    } else if (tab === 'popup') {
        if (popupPane) popupPane.classList.remove('hidden');
        if (popupBtn) popupBtn.className = activeBtnClass;
        if (popupBadge) popupBadge.className = activeBadgeClass;
    }

    // Update URL history without reloading page
    var url = new URL(window.location);
    url.searchParams.set('type', tab);
    window.history.replaceState({}, '', url);
}

// ==================== 2. LIVE REFRESH & SILENT POLLING ====================
var isRefreshing = false;

function refreshMessages(isManual) {
    if (isRefreshing) return;
    isRefreshing = true;

    var refreshIcon = document.getElementById('refreshIcon');
    var refreshBtnText = document.getElementById('refreshBtnText');
    if (refreshIcon) refreshIcon.classList.add('animate-spin');
    if (isManual && refreshBtnText) refreshBtnText.textContent = 'Updating...';

    var pollUrl = '{{ route("superadmin.messages.index") }}?poll=1';

    fetch(pollUrl, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        if (!data || !data.success) return;

        // Update counts
        var cCount = document.getElementById('contactCountBadge');
        var eCount = document.getElementById('enquiryCountBadge');
        var pCount = document.getElementById('popupCountBadge');
        var cDisp = document.getElementById('contactDisplayCount');
        var eDisp = document.getElementById('enquiryDisplayCount');
        var pDisp = document.getElementById('popupDisplayCount');

        var prevCCount = cCount ? parseInt(cCount.textContent) : 0;
        var prevECount = eCount ? parseInt(eCount.textContent) : 0;
        var prevPCount = pCount ? parseInt(pCount.textContent) : 0;

        if (cCount) cCount.textContent = data.contactCount;
        if (eCount) eCount.textContent = data.enquiryCount;
        if (pCount && data.popupCount !== undefined) pCount.textContent = data.popupCount;
        if (cDisp) cDisp.textContent = data.contactCount;
        if (eDisp) eDisp.textContent = data.enquiryCount;
        if (pDisp && data.popupCount !== undefined) pDisp.textContent = data.popupCount;

        // If new messages detected, flash the live badge
        if (data.contactCount > prevCCount || data.enquiryCount > prevECount || (data.popupCount && data.popupCount > prevPCount)) {
            var liveBadge = document.getElementById('liveStatusBadge');
            if (liveBadge) {
                liveBadge.className = 'inline-flex items-center gap-1 px-2.5 py-1 text-[11px] font-bold text-white bg-green-600 rounded-full shadow-md animate-bounce';
                setTimeout(function() {
                    liveBadge.className = 'inline-flex items-center gap-1 px-2 py-1 text-[11px] font-medium text-green-700 bg-green-50 border border-green-200 rounded-full dark:bg-green-900/30 dark:text-green-300 dark:border-green-800';
                }, 3000);
            }
            // Auto reload current tab list if count changed on manual click
            if (isManual) {
                window.location.reload();
            }
        }
    })
    .catch(function(err) {
        console.warn('Poll update failed:', err);
    })
    .finally(function() {
        isRefreshing = false;
        if (refreshIcon) refreshIcon.classList.remove('animate-spin');
        if (refreshBtnText) refreshBtnText.textContent = 'Refresh Now';
    });
}

// Silent poll every 10 seconds to auto-detect frontend form submissions instantly
setInterval(function() {
    refreshMessages(false);
}, 10000);

// ==================== 3. COMPACT MODAL LOGIC ====================
function openMessageModal(data) {
    var modal = document.getElementById('messageDetailModal');
    if (!modal) return;

    var isPopup   = (data.form_type === 'popup');
    var isEnquiry = (data.form_type === 'enquiry');
    var badge = document.getElementById('modalTypeBadge');
    var enquiryRow = document.getElementById('modalEnquiryRow');
    var nameLabel = document.getElementById('modalNameLabel');
    var messageLabel = document.getElementById('modalMessageLabel');

    if (isPopup) {
        badge.textContent = 'Popup Lead (/popup-lead)';
        badge.className = 'px-2 py-0.5 text-[10px] font-bold rounded-full uppercase bg-emerald-100 text-emerald-800 dark:bg-emerald-900/60 dark:text-emerald-300';
        document.getElementById('modalSubjectLabel').textContent = 'Request Type';
        nameLabel.textContent = 'Full Name';
        messageLabel.textContent = 'Message / Details';
        if (enquiryRow) enquiryRow.style.display = 'block';

        document.getElementById('modalCompany').textContent = data.company || '-';
        document.getElementById('modalOutlets').textContent = '-';

        var webLink = document.getElementById('modalWebsiteLink');
        var webSpan = document.getElementById('modalWebsite');
        webSpan.textContent = '-';
        webLink.removeAttribute('href');

        var reqContainer = document.getElementById('modalRequirementsContainer');
        reqContainer.innerHTML = '<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-emerald-50 text-emerald-900 border border-emerald-200">Personalised Demo Request</span>';

    } else if (isEnquiry) {
        badge.textContent = 'Enquiry (/enquiry)';
        badge.className = 'px-2 py-0.5 text-[10px] font-bold rounded-full uppercase bg-blue-100 text-blue-800 dark:bg-blue-900/60 dark:text-blue-300';
        document.getElementById('modalSubjectLabel').textContent = 'Business Type';
        nameLabel.textContent = 'Contact Person';
        messageLabel.textContent = 'Additional Notes & Requirements';
        if (enquiryRow) enquiryRow.style.display = 'block';

        document.getElementById('modalCompany').textContent = data.company || '-';
        document.getElementById('modalOutlets').textContent = data.designation || '-';

        var webLink = document.getElementById('modalWebsiteLink');
        var webSpan = document.getElementById('modalWebsite');
        if (data.website) {
            webSpan.textContent = data.website;
            webLink.href = data.website.startsWith('http') ? data.website : ('https://' + data.website);
            webLink.style.display = 'inline';
        } else {
            webSpan.textContent = '-';
            webLink.removeAttribute('href');
        }

        // Requirements badges
        var reqContainer = document.getElementById('modalRequirementsContainer');
        reqContainer.innerHTML = '';
        var rawReq = data.requirements || '';
        if (!rawReq && data.message && data.message.indexOf('Interested In:') !== -1) {
            var m = data.message.match(/Interested In:\s*([^\n\r]+)/);
            if (m && m[1]) rawReq = m[1];
        }

        if (rawReq && rawReq.trim() !== '') {
            var parts = rawReq.split(',');
            parts.forEach(function(item) {
                var trimmed = item.trim();
                if (trimmed) {
                    var pill = document.createElement('span');
                    pill.className = 'inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-amber-50 text-amber-900 border border-amber-200 dark:bg-amber-900/30 dark:text-amber-200 dark:border-amber-700';
                    pill.textContent = trimmed;
                    reqContainer.appendChild(pill);
                }
            });
        } else {
            var emptySpan = document.createElement('span');
            emptySpan.className = 'text-xs text-gray-400 italic';
            emptySpan.textContent = 'None specified';
            reqContainer.appendChild(emptySpan);
        }

    } else {
        badge.textContent = 'Contact (/contact-us)';
        badge.className = 'px-2 py-0.5 text-[10px] font-bold rounded-full uppercase bg-amber-100 text-amber-800 dark:bg-amber-900/60 dark:text-amber-300';
        document.getElementById('modalSubjectLabel').textContent = 'Subject';
        nameLabel.textContent = 'Full Name';
        messageLabel.textContent = 'Message';
        if (enquiryRow) enquiryRow.style.display = 'none';
    }

    document.getElementById('modalName').textContent    = data.name || '-';
    document.getElementById('modalEmail').textContent   = data.email || '-';
    document.getElementById('modalEmailLink').href      = 'mailto:' + (data.email || '');
    document.getElementById('modalPhone').textContent   = data.phone || '-';
    document.getElementById('modalPhoneLink').href      = 'tel:' + (data.phone || '');
    document.getElementById('modalCountry').textContent = data.country || data.address || '-';
    document.getElementById('modalSubject').textContent = data.subject || '-';

    var dateStr = '-';
    if (data.created_at) {
        try {
            var d = new Date(data.created_at);
            dateStr = d.toLocaleString();
        } catch(e) {
            dateStr = data.created_at;
        }
    }
    document.getElementById('modalDate').textContent = dateStr;

    // Clean Message Content (remove duplicated Website: and Interested In: lines if present)
    var displayMsg = data.message || '-';
    if (isEnquiry && displayMsg) {
        displayMsg = displayMsg
            .replace(/^Website:\s*[^\n\r]*[\r\n]*/mi, '')
            .replace(/^Interested In:\s*[^\n\r]*[\r\n]*/mi, '')
            .trim();
        if (!displayMsg) displayMsg = '-';
    }
    document.getElementById('modalMessage').textContent = displayMsg;

    modal.classList.remove('hidden');
}

function closeMessageModal() {
    var modal = document.getElementById('messageDetailModal');
    if (modal) modal.classList.add('hidden');
}

function confirmDelete(id, name) {
    var modal = document.getElementById('deleteConfirmModal');
    var form = document.getElementById('deleteMessageForm');
    var nameSpan = document.getElementById('deleteSenderName');
    if (nameSpan) nameSpan.textContent = name;
    if (form) form.action = '{{ url("superadmin/messages") }}/' + id;
    if (modal) modal.classList.remove('hidden');
}

function closeDeleteModal() {
    var modal = document.getElementById('deleteConfirmModal');
    if (modal) modal.classList.add('hidden');
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeMessageModal();
        closeDeleteModal();
    }
});
</script>
@endsection
