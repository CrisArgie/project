<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://127.0.0.1:8000/img/DOST_log.png" class="logo" alt="DOST Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
