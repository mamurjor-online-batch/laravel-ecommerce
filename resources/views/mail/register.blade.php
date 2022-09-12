Name: {{ $mailContent['name'] }} <br>
<br>
E-mail: {{ $mailContent['email'] }}
<br>
<br>
<br>
<a href="{{ route('user.email.verify', $mailContent['token']) }}">Email Verify</a>
