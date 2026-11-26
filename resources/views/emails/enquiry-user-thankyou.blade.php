<p>Hi {{ $full_name ?? $name }},</p>

<p>
    Thank you for your enquiry with <strong>Geni Menu</strong>! We have received your request for a free demo and pricing details for <strong>{{ $business_name ?? ($company_name ?? ($company ?? 'your business')) }}</strong>, and our team will get back to you shortly.
</p>

<p>
    <strong>Your Submitted Details:</strong><br>
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
    Need immediate help? Call <a href="tel:+918667205661" style="color: #C58B50; text-decoration: none; font-weight: bold;">+91 86672 05661</a> or email <a href="mailto:genimenuglobal@gmail.com" style="color: #C58B50; text-decoration: none; font-weight: bold;">genimenuglobal@gmail.com</a>.
</p>

<p>
    Best regards,<br>
    <strong>Geni Menu Team</strong><br>
    WeGeni - IT Services &amp; Consulting Pvt. Ltd
</p>
