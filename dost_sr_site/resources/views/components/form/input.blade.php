@props(['name'])

<x-form.field class="{{ $attributes['class'] }}">
    <x-form.label name="{{ $name }}" label="{{ $attributes['label'] }}" />

    <input class="border border-gray-200 w-full rounded" name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>

    {{-- @dd($attributes) --}}

    <x-form.error name="{{ $name }}" />
</x-form.field>
