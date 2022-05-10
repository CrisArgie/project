<div class="w-100 h-100 m-auto">
    <div class="d-flex justify-content-center align-items-center">
        <div class="h6 text-dark mb-0">
            There is no Pending Request. &nbsp;
        </div>
        {{-- <a onclick="window.history.back()" role="button" class="h6 mb-0"> --}}
        @if (auth()->user()->user_type == ('admin' || 'technician'))
            <a href="/requests" role="button" class="h6 mb-0">
                Return to previous page
            </a>
        @endif

    </div>
</div>
