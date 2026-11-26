<p>Hi {{ $full_name ?? $name }},</p>

<p>
    Thank you for contacting <strong>Geni Menu</strong>. We have received your message and our team will get back to you shortly.
</p>

<p>
    <strong>Submitted Details:</strong><br>
    &bull; <strong>Full Name:</strong> {{ $full_name ?? $name }}<br>
    &bull; <strong>Email Address:</strong> <a href="mailto:{{ $email_address ?? $email }}">{{ $email_address ?? $email }}</a><br>
    &bull; <strong>Country:</strong> {{ $country ?? $address }}<br>
    &bull; <strong>Phone Number:</strong> {{ !empty($country_code) ? ($country_code . ' ' . $phone_number) : ($phone_number ?? $phone) }}<br>
    &bull; <strong>Subject:</strong> {{ $subject }}<br>
    &bull; <strong>Message:</strong> {{ $message ?? $user_message }}<br>
    &bull; <strong>Submitted From:</strong> Contact Geni Menu<br>
    &bull; <strong>Submitted On:</strong> {{ $submitted_at ?? now()->format('d M Y, h:i A') }}
</p>

<p>
    For urgent help, call <a href="tel:+918667205661" style="color: #C58B50; text-decoration: none; font-weight: bold;">+91 86672 05661</a> or email <a href="mailto:support@genimenu.com" style="color: #C58B50; text-decoration: none; font-weight: bold;">support@genimenu.com</a>.
</p>

<p>
    Regards,<br>
    <strong>Geni Menu Team</strong><br>
    WeGeni - IT Services &amp; Consulting Pvt. Ltd
</p>
