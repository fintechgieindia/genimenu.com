<p>Hi {{ $full_name ?? $name }},</p>

<p>
    Welcome to <strong>Geni Menu</strong>! We have received your application for <strong>{{ $company_name ?? $company }}</strong>.
</p>

<p>
    <strong>Here is what happens next:</strong><br>
    1. <strong>Review</strong> &ndash; We review your details, target region ({{ $country ?? $address }}), and business background.<br>
    2. <strong>Connect &amp; Agree</strong> &ndash; Our team will reach out to align and set clear agreement terms.<br>
    3. <strong>Get Started</strong> &ndash; Once onboarded, you can start and grow with us.
</p>

<p>
    <strong>Your Submitted Details:</strong><br>
    &bull; <strong>Name:</strong> {{ $full_name ?? $name }}<br>
    &bull; <strong>Company / Business Name:</strong> {{ $company_name ?? $company }}<br>
    &bull; <strong>Business Email:</strong> {{ $business_email ?? $email }}<br>
    &bull; <strong>Contact Number:</strong> {{ !empty($country_code) ? ($country_code . ' ' . $phone_number) : ($phone_number ?? $phone) }}<br>
    &bull; <strong>Country:</strong> {{ $country ?? $address }}<br>
    &bull; <strong>Website:</strong> {{ !empty($company_website) ? $company_website : (!empty($website) ? $website : '-') }}<br>
    &bull; <strong>Business Type:</strong> {{ $business_type ?? $subject }}<br>
    &bull; <strong>Preferred Partnership Model:</strong> {{ $partnership_model ?? $preferred_model ?? '-' }}<br>
    &bull; <strong>Current Customer Base:</strong> {{ $customer_base ?? '-' }}<br>
    &bull; <strong>Years in Business:</strong> {{ $years_in_business ?? '-' }}<br>
    &bull; <strong>Notes:</strong> {{ !empty($business_details) ? $business_details : (!empty($user_message) ? $user_message : '-') }}
</p>

<p>
    Need help? Reply to this email or contact us at <a href="tel:+918667205661" style="color: #C58B50; text-decoration: none; font-weight: bold;">+91 86672 05661</a>.
</p>

<p>
    Best regards,<br>
    <strong>Geni Menu Team</strong><br>
    WeGeni - IT Services &amp; Consulting Pvt. Ltd
</p>
