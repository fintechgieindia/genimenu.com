<p>Hello {{ $recipientName ?? 'Admin' }},</p>

<p>
    A new restaurant has registered through the <strong>Restaurant Registration Form</strong> on the website.
</p>

<p>
    <strong>Registration Details:</strong>
</p>

<p>
    <strong>Form:</strong> Restaurant Registration Form <br>
    <strong>Restaurant Name:</strong> {{ $restaurantName }} <br>
    <strong>Branch Name:</strong> {{ $branchName }} <br>
    <strong>Owner Name:</strong> {{ $ownerName }} <br>
    <strong>Email:</strong> {{ $ownerEmail }} <br>
    <strong>Phone:</strong> {{ $ownerPhone }} <br>
    @if(!empty($address) && $address !== 'N/A')
    <strong>Address:</strong> {{ $address }} <br>
    @endif
    @if(!empty($country))
    <strong>Country:</strong> {{ $country }} <br>
    @endif
    <strong>Registered At:</strong> {{ $registeredAt }}
</p>

<p>
    <strong>Superadmin Dashboard:</strong><br>
    You can view and manage this restaurant account directly from the Superadmin panel:<br>
    <a href="{{ $adminDashboardUrl }}">{{ $adminDashboardUrl }}</a>
</p>

<p>
    <strong>Next Steps:</strong><br>
    • Review restaurant information <br>
    • Verify branch and contact details <br>
    • Assist the client with onboarding and setup if needed
</p>

<p>
    Thank you,<br>
    <strong>{{ $siteName ?? 'Geni Menu' }} System</strong>
</p>
