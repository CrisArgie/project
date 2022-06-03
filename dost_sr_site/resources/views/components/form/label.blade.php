@props(['name'])

{{-- <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}"> --}}
{{-- @dd($attributes) --}}
<label for="{{ $name }}" class="mb-0 text-gray-900 text-capitalize">
    {{ $attributes['label'] }}
</label>
