<x-right-content-layout>

    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="border-left-secondary shadow border-radius-1 p-4 d-flex flex-column" style="width: 540px; height: 65vh" x-data="{ open: false }">
                        <label class="mb-2 text-gray-600 text-uppercase h4 w-100">
                            Selecting the End User:</label>
                        <button type="button"
                            class="input-design-1 bg-white w-50 d-flex align-items-center justify-content-between img-chev-down"
                            x-on:click="open = ! open">
                            <div class="text-gray-500">
                                Select here...
                            </div>
                        </button>

                        <div class="input-design-1 overflow-auto w-auto" style="height: 400px" x-show="open" x-cloak>
                            @foreach ($users as $user)
                                <a href="/request-for-ict-job/{{ $user->id }}"
                                    class="d-flex flex-column mb-2 p-2 btn-link-2 text-decoration-none">
                                    <div class="text-gray-800">
                                        {{ $user->first_name . ' ' . $user->last_name . ' - ' . $user->email }}</div>
                                    <p class="text-gray-600 mb-0">Division:&nbsp;</p>
                                    <span class="d-flex text-gray-600 pl-4">
                                        {{ $user->divisions->division_name . ' - ' . $user->divisions->division_number }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </x-main>
        </section>
    </main>

    <x-flash></x-flash>
</x-right-content-layout>
