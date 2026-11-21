<p>Hello Geni Menu Team,</p>

<p>You have received a new enquiry through the <strong>Popup Form</strong> on the website.</p>

<p><strong>Submission Details:</strong></p>

<p>
    Name: {{ $full_name }}<br>
    Phone: {{ $phone }}<br>
    Email: {{ $email ?? 'N/A' }}<br>
    Restaurant / Business: {{ $restaurant_name ?? ($business_name ?? 'N/A') }}<br>
    Country / Location: {{ $country ?? ($city ?? 'N/A') }}
</p>

<p>Please follow up with this lead at the earliest.</p>

<p>
    Regards,<br>
    <strong>Geni Menu Team</strong>
</p>
