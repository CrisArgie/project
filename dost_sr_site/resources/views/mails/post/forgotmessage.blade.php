@component('mail::message')

Hi {{ $name }}!

A sign in attempt requires further verification because we did not recognize your device. To complete the sign in, enter the verification code on the unrecognized device.

Verification code: {{ $code }}

If you did not attempt to sign in to your account, your password may be compromised. Email us to inform to create a new, strong password for your account.


<a href="http://127.0.0.1:8000/auth/code/{{ $id }}">
    Click here
</a>

<br>
{{-- @component('mail::button', ['url' => 'http://127.0.0.1:8000/auth/code/{{ $id }}'])
    Click here
@endcomponent --}}


Thanks,
The DOST service request Team

@endcomponent
