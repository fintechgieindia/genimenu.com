<p>Hello Geni Menu Team,</p>

<p>
    You have received a new inquiry through the <strong>{{ $form_name ?? 'Contact Form' }}</strong> on the website.
</p>

<p>
    <strong>Submission Details:</strong>
</p>

<p>
    <strong>Form:</strong> {{ $form_name ?? 'Contact Form' }} <br>
    <strong>Name:</strong> {{ $name }} <br>
    <strong>Email:</strong> {{ $email }} <br>
    <strong>Phone:</strong> {{ $phone }} <br>

    @if(!empty($address))
        <strong>Country / Location:</strong> {{ $address }} <br>
    @endif

    @if(!empty($company))
        <strong>Business / Company:</strong> {{ $company }} <br>
    @endif

    @if(!empty($designation))
        <strong>Designation:</strong> {{ $designation }} <br>
    @endif

    @if(!empty($subject))
        <strong>Subject:</strong> {{ $subject }} <br>
    @endif

    @if(!empty($other_subject))
        <strong>Specified Business Type:</strong> {{ $other_subject }} <br>
    @endif
</p>
<p>
    <strong>Message:</strong><br>
    {{ $user_message }}
</p>

<p>
    <strong>Next Steps:</strong><br>
    • Review the message and categorize the enquiry <br>
    • Respond to the customer promptly <br>
    • Provide necessary follow-up information
</p>

<p>
    Thank you,<br>
    <strong>Geni Menu</strong>
</p>