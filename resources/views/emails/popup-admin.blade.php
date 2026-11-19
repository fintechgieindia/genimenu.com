<h2 style="margin-bottom:15px;">
    New Popup Form Submission
</h2>

<p style="margin-bottom:15px;">
    A new enquiry has been submitted through the <strong>Popup Form</strong> on the Geni Menu website. Below are the details:
</p>

<p>
    <strong>Form:</strong> Popup Form <br>
    <strong>Name:</strong> {{ $full_name }} <br>
    <strong>Phone Number:</strong> {{ $phone }} <br>
    <strong>Restaurant Name:</strong> {{ $restaurant_name ?? ($business_name ?? 'N/A') }} <br>
    <strong>Email:</strong> {{ $email ?? 'N/A' }} <br>
    <strong>City / Country:</strong> {{ $city ?? ($country ?? 'N/A') }}
</p>

<p style="margin-top:20px;">
    Please follow up with this lead at the earliest.
</p>
<br>
<p>
    Regards,<br>
    <strong>Geni Menu Team</strong>
</p>