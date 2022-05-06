<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <form action="" method="" enctype="multipart/form-data">
                    <div class="row mx-0">
                        <section class="col-xl-11">
                            <div class="card">
                                <div class="card-body rounded-none shadow">
                                    <div class="row mx-0">
                                        <div class="col-xl-12 bg-heading-color-1 d-flex justify-content-center py-1">
                                            <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                                ICT JOB REQUEST FORM
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-3 justify-content-between">
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 375px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900">
                                                        Date/Time of Request: </label>
                                                    <input value="" type="text" class="input-design-1" readonly
                                                        tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 305px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900">
                                                        Request No.: </label>
                                                    <input value="" type="text" class="input-design-1" readonly
                                                        tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mx-0">
                                        <section class="col-xl-12">
                                            <div class="h5 text-uppercase text-gray-900 font-weight-bold"> Client
                                                Information</div>
                                        </section>
                                        <section class="col-xl-6">
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    End User:</label>
                                                <input type="text" class="input-design-1 w-100" readonly tabindex="-1">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Equipment Property No.:</label>
                                                <input value="" type="text" class="input-design-1 w-100" readonly
                                                    tabindex="-1">
                                            </div>
                                        </section>
                                        <section class="col-xl-6">
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Division/Section/Unit:</label>
                                                <input type="text" class="input-design-1 w-100" readonly tabindex="-1">
                                            </div>
                                        </section>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row mx-0">
                                        <div class="col-xl-12 mb-2">
                                            <div class="row g-2 mx-0">
                                                <div class="text-gray-900 font-weight-bold h5 text-uppercase">
                                                    Area of Request
                                                </div>
                                                <div class="font-weight-normal font-italic">
                                                    (List and file document, can be download)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">

                                            <div class="row mx-0 mb-4">
                                                <div class="col-xl-6">
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Cable</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Keyboard</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Mouse</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Printer</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Internet</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">CD/DVD Drive</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Memory</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Network</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Power Supply</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Hard Drive</label>
                                                    </div>
                                                    <div class="d-flex align-items-center g-2">
                                                        <input type="checkbox">
                                                        <label for="" class="mb-0 text-gray-900 text-capitalize">Monitor</label>
                                                    </div>
                                                    <div class="d-flex flex-column g-1 my-2">
                                                        <div
                                                            class="mb-0 h6 text-gray-900 font-weight-bold text-capitalize">
                                                            Type Of Request:</div>
                                                        <input type="text" class="input-design-1" readonly
                                                            tabindex="-1">
                                                        <input type="text" class="input-design-1" readonly tabindex="-1"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mx-0 mb-3">
                                                <div class="col-xl-12">
                                                    <div class="card rounded-0 border-dark">
                                                        <div class="card-body" style="height: 210px">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 px-4 mb-3">
                                            <div class="row align-items-center mx-0 mb-3">
                                                <input type="checkbox" name="" id="">
                                                <label for="" class="mb-0 mx-2 text-gray-900 text-capitalize"> Software Programs (list): </label>
                                                <div class="col-xl-12">
                                                    <textarea class="input-design-1" name="" id="" rows="4" style="width: 100%"></textarea>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mx-0 mb-3">
                                                <input type="checkbox" name="" id="">
                                                <label for="" class="mb-0 mx-2 text-gray-900 text-capitalize"> Other Hardware: </label>
                                                <div class="col-xl-12">
                                                    <textarea class="input-design-1" name="" id="" rows="4" style="width: 100%"></textarea>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mx-0 mb-3">
                                                <input type="checkbox" name="" id="">
                                                <label for="" class="mb-0 mx-2 text-gray-900 text-capitalize"> USB Device: </label>
                                                    <div class="col-xl-12">
                                                    <textarea class="input-design-1" name="" id="" rows="4" style="width: 100%"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="col-xl-1 pt-4 px-0">
                            <div class="row mx-0 h-100">
                                <div class="col-xl-12 col-md-4 px-0 pt-1">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" onclick="window.history.back()" class="btn btn-danger">
                                            <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                alt="Return to Previous page" class="icon-white">
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-md-8 p-0">
                                    <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                        <div class="row mx-0">
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button class="btn btn-primary text-capitalize w-100">
                                                    <div class="row mx-0 justify-content-center align-content-center">
                                                        <img src="/icons/svg-files/printer.svg" width="24" height="24"
                                                            alt="Printer.svg" class="icon-white col-xl-12 col-md-4 p-0">
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
