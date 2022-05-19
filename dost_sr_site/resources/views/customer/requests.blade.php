<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('customer.page-style.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <div class="position-relative h-100">
                    <div class="row mx-0 justify-content-center align-items-center h-100">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body bg-gray-300">
                                    <div class="bg-gray-600 px-3 py-2" style="width: 285px; margin-left: -1.25rem;">
                                        <div class="text-capitalize text-gray-100 font-weight-bold h4 mb-0">
                                            Request Interface
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                                        <div class="row mx-0 g-2">
                                            <div class="col-xl-12 d-flex justify-content-center">
                                                <a href="/request-for-repair" class="btn btn-primary">
                                                    Add Repair Request

                                                    <div class="my-1">
                                                        <img src="/icons/svg-files/files.svg" alt="add-repair-request" width="42" height="42" class="icon-white opacity-80">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xl-12 d-flex justify-content-center">
                                                <a href="/request-for-ict-job/{{ auth()->user()->id }}" class="btn btn-primary">
                                                    Add ICT Job Request

                                                    <div class="my-1">
                                                        <img src="/icons/svg-files/files.svg" alt="add-ict-job-request" width="42" height="42" class="icon-white opacity-80">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-main>
        </section>
    </main>

    <x-flash />
</x-right-content-layout>
