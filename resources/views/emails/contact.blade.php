<h2>New Free Consultation Request</h2>

<p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
<p><strong>Last Name:</strong> {{ $data['last_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>

<hr>

<p><strong>Message:</strong></p>
<p>{!! nl2br(e($data['message'])) !!}</p>