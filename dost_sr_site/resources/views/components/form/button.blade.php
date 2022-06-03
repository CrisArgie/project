<x-form.field>
    <button type="{{ $attributes['type'] }}" name="{{ $attributes['name'] }}" value="{{ $attributes['value'] }}"
        {{-- class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"> --}}
        class="btn text-capitalize {{ $attributes['class'] }}">
        {{ $slot }}
    </button>
</x-form.field>
