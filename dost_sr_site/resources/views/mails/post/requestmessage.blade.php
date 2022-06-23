@component('mail::message')

Hi {{ $name }}



The request no: {{ $request }}. The {{ $type }} is now queued and the status is {{ $status }}.


<div class="my-3">
    Thanks,
    The DOST XII Team
</div>

@endcomponent
