@props(['name'])
{{-- @dd($attributes) --}}

<div class="modal" id="{{ $attributes['id'] }}" style="overflow: visible;">
    <div class="modal-header">
        <div class="title">
            {{ $attributes['title'] }}
        </div>
        <button type="button" data-close-button class="close-button">&times;</button>
    </div>

    <div class="modal-body p-4">
        {{ $slot }}
    </div>
</div>
