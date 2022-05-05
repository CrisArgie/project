<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}


            @php
                $post = $repair_request->first()
            @endphp

            <x-main>
                <form action="" method="" enctype="multipart/form-data">
                    <div class="row mx-0">
                        <section class="col-xl-11">
                            <div class="card">
                                <div class="card-body rounded-none shadow">
                                    <div class="row justify-content-between mx-0">
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900">
                                                        No.: </label>
                                                    <input value="{{ $post->request_no }}" type="text" class="input-design-1" readonly
                                                        tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900">
                                                        Date: </label>
                                                    <input value="" type="text" class="input-design-1" readonly
                                                        tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2 mb-3">
                                        <div class="col-xl-12 bg-heading-color-1 d-flex justify-content-center py-1">
                                            <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                                Request for Repair
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <section class="col-xl-6">
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Desciption of Property Type:</label>
                                                <input value="" type="text" class="input-design-1 w-100" readonly
                                                    tabindex="-1">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Serial/Engine No.:</label>
                                                <input value="" type="text" class="input-design-1 w-100" readonly
                                                    tabindex="-1">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Acquisition Date:</label>
                                                <input value="" type="text" class="input-design-1 w-100" readonly
                                                    tabindex="-1">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Location:</label>
                                                <input value="" type="text" class="input-design-1 w-100" readonly
                                                    tabindex="-1">
                                            </div>
                                        </section>
                                        <section class="col-xl-6">
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Brand Model:</label>
                                                <input type="text" class="input-design-1 w-100" readonly tabindex="-1">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Property No.:</label>
                                                <input type="text" class="input-design-1 w-100" readonly tabindex="-1">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Acquisition Cost:</label>
                                                <input value="" type="text" class="input-design-1 w-100" readonly
                                                    tabindex="-1">
                                            </div>
                                        </section>
                                    </div>
                                    <hr class="mb-2">
                                    <div class="row mx-0">
                                        <div class="col-xl-6 mt-2">
                                            <div class="d-flex flex-column">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Problem Encountered:</label>
                                                <textarea class="input-design-1" name="" id="" cols="30" rows="7.5" placeholder="Type here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mt-2">
                                            <div class="d-flex flex-column ">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Corrective Action Performed:</label>
                                                <textarea class="input-design-1" name="" id="" cols="30" rows="7.5" placeholder="Type here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="col-xl-1 pt-4 px-0">
                            <div class="row mx-0 h-100">
                                <div class="col-xl-12 col-md-4 px-0 p-1">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" onclick="window.history.back()"
                                            class="btn btn-danger">
                                            <img    src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page"
                                                    class="icon-white"
                                            >
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-md-8 p-0">
                                    <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                        <div class="row mx-0">
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button class="btn btn-primary text-capitalize w-100">
                                                    <div class="row mx-0 justify-content-center align-content-center">
                                                        <img    src="/icons/svg-files/printer.svg"
                                                                width="24"
                                                                height="24"
                                                                alt="Printer.svg"
                                                                class="icon-white col-xl-12 col-md-4 p-0"
                                                        >
                                                        <div class="col-xl-12 col-md-8 px-1">print</div>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button class="btn btn-primary text-capitalize w-100">save</button>
                                            </div>
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button class="btn btn-success text-capitalize w-100">done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </x-main>
        </section>
    </main>

    <x-flash />
</x-right-content-layout>
