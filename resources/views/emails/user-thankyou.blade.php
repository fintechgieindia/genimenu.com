<p>Hi {{ $name }},</p>

<p>
    Thank you for contacting <strong>Geni Menu</strong>.
    We’ve received your enquiry and our team will review it and get back to you shortly.
</p>

<p><strong>Here are the details you submitted:</strong></p>

<p>
    Full Name: {{ $name }} <br>
    Phone: {{ $phone }} <br>
    Email: {{ $email }} <br>
    @if(!empty($company))
        Company: {{ $company }} <br>
    @endif
    @if(!empty($designation))
        Designation: {{ $designation }} <br>
    @endif
    @if(!empty($address))
        Address: {{ $address }} <br>
    @endif
    Subject: {{ $subject }} <br>
    Message: {{ $user_message }}
</p>

<p>
    Thank you once again for choosing <strong>Geni Menu</strong>.
    We look forward to serving you!
</p>

<p>
    If your enquiry is urgent, feel free to contact us directly:
</p>

<p>
    📧 Email: genimenuglobal@gmail.com <br>
    📞 Phone: +91 90475 55066
</p>

<p>
    Best regards, <br>
    <strong>Geni Menu Support Team</strong>
</p>