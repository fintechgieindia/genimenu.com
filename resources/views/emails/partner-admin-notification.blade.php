<p>Hello Admin,</p>

<p>
    A new application for the partnership has been submitted on <strong>Geni Menu</strong>.
</p>

<p>
    <strong>Submitted Details:</strong><br>
    &bull; <strong>Name:</strong> {{ $full_name ?? $name }}<br>
    &bull; <strong>Company / Business Name:</strong> {{ $company_name ?? $company }}<br>
    &bull; <strong>Business Email:</strong> <a href="mailto:{{ $business_email ?? $email }}">{{ $business_email ?? $email }}</a><br>
    &bull; <strong>Contact Number:</strong> {{ !empty($country_code) ? ($country_code . ' ' . $phone_number) : ($phone_number ?? $phone) }}<br>
    &bull; <strong>Country:</strong> {{ $country ?? $address }}<br>
    &bull; <strong>Website:</strong> {{ !empty($company_website) ? $company_website : (!empty($website) ? $website : '-') }}<br>
    &bull; <strong>Business Type:</strong> {{ $business_type ?? $subject }}<br>
    &bull; <strong>Preferred Partnership Model:</strong> {{ $partnership_model ?? $preferred_model ?? '-' }}<br>
    &bull; <strong>Current Customer Base:</strong> {{ $customer_base ?? '-' }}<br>
    &bull; <strong>Years in Business:</strong> {{ $years_in_business ?? '-' }}<br>
    &bull; <strong>Notes:</strong> {{ !empty($business_details) ? $business_details : (!empty($user_message) ? $user_message : '-') }}<br>
    &bull; <strong>Submitted From Page:</strong> {{ $source_page ?? 'Partner Programme Page' }}<br>
    &bull; <strong>Page URL:</strong> <a href="{{ $page_url ?? url('/partners') }}" style="color: #C58B50; text-decoration: none;">{{ $page_url ?? url('/partners') }}</a><br>
    &bull; <strong>Submitted On:</strong> {{ $submitted_at ?? now()->format('d M Y, h:i A') }}
</p>

<p>
    Thanks,<br>
    <strong>Geni Menu System</strong>
</p>
