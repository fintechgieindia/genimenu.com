<p>Hi {{ $data['full_name'] ?? 'there' }},</p>

<p>
    Thank you for contacting <strong>Geni Menu</strong>.<br>
    We have received your request regarding <strong>{{ $data['restaurant_name'] ?? ($data['business_name'] ?? 'your restaurant') }}</strong>.
</p>

<p>Our team will review your details and get back to you shortly to schedule a demo.</p>

<p><strong>Here are the details you submitted:</strong></p>

<p>
    Name: {{ $data['full_name'] }}<br>
    Phone: {{ $data['phone'] }}<br>
    Email: {{ $data['email'] }}<br>
    Restaurant / Business: {{ $data['restaurant_name'] ?? ($data['business_name'] ?? 'N/A') }}<br>
    Country / Location: {{ $data['country'] ?? ($data['city'] ?? 'N/A') }}
</p>

<p>If your enquiry is urgent, feel free to contact us directly:</p>

<p>
    Email: genimenuglobal@gmail.com<br>
    Phone: +91 90475 55066
</p>

<p>
    Best regards,<br>
    <strong>Geni Menu Support Team</strong>
</p>
