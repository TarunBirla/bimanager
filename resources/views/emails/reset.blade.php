

<p>Hello,</p>

<p>You requested a password reset. Click the link below to reset your password:</p>


<a href="{{ url('http://localhost:3000/reset-password?token=' . $token . '&email=' . urlencode($email)) }}">
    Reset Password
</a>
<p>If you did not request this, please ignore this email.</p>
