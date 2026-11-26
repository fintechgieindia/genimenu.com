<p>Hello Admin,</p>

<p>
    A new contact form message has been submitted on <strong>Contact Geni Menu</strong>.
</p>

<p>
    <strong>Submitted Details:</strong><br>
    &bull; <strong>Full Name:</strong> {{ $full_name ?? $name }}<br>
    &bull; <strong>Email Address:</strong> <a href="mailto:{{ $email_address ?? $email }}">{{ $email_address ?? $email }}</a><br>
    &bull; <strong>Country:</strong> {{ $country ?? $address }}<br>
    &bull; <strong>Phone Number:</strong> {{ !empty($country_code) ? ($country_code . ' ' . $phone_number) : ($phone_number ?? $phone) }}<br>
    &bull; <strong>Subject:</strong> {{ $subject }}<br>
    &bull; <strong>Message:</strong> {{ $message ?? $user_message }}<br>
    &bull; <strong>Submitted From Page:</strong> Contact Geni Menu<br>
    &bull; <strong>Submitted On:</strong> {{ $submitted_at ?? now()->format('d M Y, h:i A') }}
</p>

<p>
    Thanks,<br>
    <strong>Geni Menu System</strong>
</p>
