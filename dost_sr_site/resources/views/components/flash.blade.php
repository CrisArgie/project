@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="flash-msg-1">
        <p class="mb-0">{{ session('success') }}</p>
    </div>
@elseif (session()->has('fail'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="flash-msg-1 bg-danger">
        <p class="mb-0">{{ session('fail') }}</p>
    </div>
@endif
