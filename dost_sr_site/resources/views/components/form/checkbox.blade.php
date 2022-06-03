@props(['name'])

<x-form.field class="{{ $attributes['class'] }}">
    <input class="border border-gray-200 w-full rounded" name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>
    <x-form.label name="{{ $name }}" label="{{ $attributes['label'] }}" />

    <x-form.error name="{{ $name }}" />
</x-form.field>
