<p>Hello Admin,</p>

<p>
    A new demo &amp; pricing enquiry has been submitted on <strong>Geni Menu</strong>.
</p>

<p>
    <strong>Submitted Details:</strong><br>
    &bull; <strong>Full Name:</strong> {{ $full_name ?? $name }}<br>
    &bull; <strong>Business Name:</strong> {{ $business_name ?? ($company_name ?? ($company ?? '-')) }}<br>
    &bull; <strong>Business Email:</strong> <a href="mailto:{{ $business_email ?? ($email_address ?? $email) }}">{{ $business_email ?? ($email_address ?? $email) }}</a><br>
    &bull; <strong>Country:</strong> {{ $country ?? ($address ?? '-') }}<br>
    &bull; <strong>Phone Number:</strong> {{ !empty($country_code) ? ($country_code . ' ' . $phone_number) : ($phone_number ?? $phone) }}<br>
    &bull; <strong>Business Type:</strong> {{ $business_type ?? ($subject ?? '-') }}<br>
    &bull; <strong>Number of Outlets:</strong> {{ $number_of_outlets ?? ($designation ?? '-') }}<br>
    &bull; <strong>Website URL:</strong> {{ !empty($website_url) ? $website_url : (!empty($website) ? $website : '-') }}<br>
    &bull; <strong>Message:</strong> {{ $message ?? ($user_message ?? '-') }}<br>
    &bull; <strong>Submitted From Page:</strong> Enquiry &amp; Free Demo<br>
    &bull; <strong>Submitted On:</strong> {{ $submitted_at ?? now()->format('d M Y, h:i A') }}
</p>

<p>
    Thanks,<br>
    <strong>Geni Menu System</strong>
</p>
