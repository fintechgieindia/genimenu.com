@extends('layouts.app')

@section('content')
<div class="p-4 bg-white block dark:bg-gray-800 dark:border-gray-700">
    <div class="mb-4 flex items-center justify-between">
        <div>
            <a href="{{ route('superadmin.messages.index', ['type' => $message->form_type ?? 'contact']) }}" class="inline-flex items-center text-sm font-medium text-skin-base hover:underline mb-2">
                &larr; Back to {{ ($message->form_type === 'popup') ? 'Popup Leads' : (($message->form_type === 'enquiry') ? 'Enquiry Messages' : 'Contact Messages') }}
            </a>
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                Message #{{ $message->id }} Details
            </h1>
        </div>
        <span class="px-3 py-1 text-xs font-semibold rounded-full uppercase {{ ($message->form_type === 'popup') ? 'bg-emerald-100 text-emerald-800 dark:bg-emerald-900/60 dark:text-emerald-300' : (($message->form_type === 'enquiry') ? 'bg-blue-100 text-blue-800 dark:bg-blue-900/60 dark:text-blue-300' : 'bg-amber-100 text-amber-800 dark:bg-amber-900/60 dark:text-amber-300') }}">
            {{ ($message->form_type === 'popup') ? 'Popup Lead (Website)' : (($message->form_type === 'enquiry') ? 'Enquiry Message (/enquiry)' : 'Contact Message (/contact-us)') }}
        </span>
    </div>

    <div class="bg-gray-50 dark:bg-gray-700/40 rounded-xl p-6 border border-gray-100 dark:border-gray-700 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                    {{ ($message->form_type === 'enquiry') ? 'Contact Person (Full Name)' : 'Full Name' }}
                </span>
                <span class="text-base font-semibold text-gray-900 dark:text-white">{{ $message->name }}</span>
            </div>
            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Email Address</span>
                <a href="mailto:{{ $message->email }}" class="text-base font-semibold text-blue-600 hover:underline dark:text-blue-400">{{ $message->email }}</a>
            </div>
            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Phone Number</span>
                <a href="tel:{{ $message->phone }}" class="text-base font-semibold text-gray-900 dark:text-white hover:underline">{{ $message->phone }}</a>
            </div>
            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Country</span>
                <span class="text-base text-gray-800 dark:text-gray-200">{{ $message->country ?? $message->address ?? '-' }}</span>
            </div>

            @if ($message->form_type === 'enquiry')
                <div>
                    <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Business / Restaurant Name</span>
                    <span class="text-base font-semibold text-gray-900 dark:text-white">{{ $message->company ?? '-' }}</span>
                </div>
                <div>
                    <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Number of Outlets</span>
                    <span class="text-base text-gray-800 dark:text-gray-200">{{ $message->designation ?? '-' }}</span>
                </div>
                <div>
                    <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Website / Social Link</span>
                    @if ($message->website)
                        <a href="{{ Str::startsWith($message->website, 'http') ? $message->website : 'https://' . $message->website }}" target="_blank" class="text-base text-skin-base hover:underline">{{ $message->website }} &#8599;</a>
                    @else
                        <span class="text-base text-gray-400">-</span>
                    @endif
                </div>
                <div>
                    <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400 mb-1.5">Requirements / Services Interested In</span>
                    @php
                        $reqStr = $message->requirements;
                        if (!$reqStr && str_contains($message->message, 'Interested In:')) {
                            if (preg_match('/Interested In:\s*([^\n\r]+)/', $message->message, $m)) {
                                $reqStr = $m[1];
                            }
                        }
                    @endphp
                    @if ($reqStr)
                        <div class="flex flex-wrap gap-1.5">
                            @foreach (explode(',', $reqStr) as $r)
                                @if (trim($r))
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-skin-base/10 text-skin-base border border-skin-base/30">
                                        {{ trim($r) }}
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <span class="text-sm text-gray-400 italic">None specified</span>
                    @endif
                </div>
            @endif

            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                    {{ ($message->form_type === 'enquiry') ? 'Business Type' : 'Subject' }}
                </span>
                <span class="text-base font-medium text-gray-900 dark:text-white">{{ $message->subject }}</span>
            </div>
            <div>
                <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Received Date & Time</span>
                <span class="text-sm text-gray-700 dark:text-gray-300">{{ $message->created_at ? $message->created_at->format('D, d M Y, h:i A') : '-' }}</span>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-200 dark:border-gray-600">
            <span class="block text-xs font-medium text-gray-500 uppercase dark:text-gray-400 mb-2">
                {{ ($message->form_type === 'enquiry') ? 'Additional Requirements & Notes' : 'Message Content' }}
            </span>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg border border-gray-200 dark:border-gray-600 text-gray-800 dark:text-gray-100 whitespace-pre-wrap leading-relaxed">
                {{ $message->message }}
            </div>
        </div>

        <div class="pt-4 flex items-center justify-between">
            <form action="{{ route('superadmin.messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-lg dark:bg-red-900/30 dark:text-red-400 dark:hover:bg-red-900/50">
                    Delete Message
                </button>
            </form>
            <a href="{{ route('superadmin.messages.index', ['type' => $message->form_type ?? 'contact']) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600">
                Back to List
            </a>
        </div>
    </div>
</div>
@endsection
