@props(['name'])
{{-- @dd($attributes) --}}
<x-form.field class="{{ $attributes['class-label'] }}">
    <x-form.label name="{{ $name }}" label="{{ $attributes['label'] }}" />

    <textarea class="border border-gray-200 w-full rounded {{ $attributes['input'] }}" style="{{ $attributes['style'] }}"
        name="{{ $name }}" id="{{ $name }}"
        {{ $attributes }}>{{ $attributes['value'] ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />

</x-form.field>
