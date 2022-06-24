@component('mail::message')

Hi {{ $name }}



The request no: <a href="http://127.0.0.1:8000/request/{{ $action }}/{{ $views }}/{{ $request }}">{{ $request }}</a>. The {{ $type }} is now queued and the status is {{ $status }}.


<div class="my-3">
    Thanks,
    The DOST XII Team
</div>

@endcomponent
