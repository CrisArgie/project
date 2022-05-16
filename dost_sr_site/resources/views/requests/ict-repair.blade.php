<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <form action="/requests/repair-ict-request/{{ $repair_ictform->users->id }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

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
                                                    <input value="{{ $repair_ictform->date_requested }}" type="text"
                                                        class="input-design-1" readonly tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 305px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900" for="request_no">
                                                        Request No.: </label>
                                                    <input value="{{ $repair_ictform->request_no }}" type="text"
                                                        class="input-design-1" readonly tabindex="-1" name="request_no" id="request_no">
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
                                                <input type="text"
                                                    value="{{ $repair_ictform->users->first_name . ' ' . $repair_ictform->users->last_name }}"
                                                    class="input-design-1 w-100" readonly tabindex="-1">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Equipment Property No.:</label>
                                                <input value="{{ $ictrequests->first()->equipment->property_no }}"
                                                    type="text" class="input-design-1 w-100" readonly tabindex="-1">
                                            </div>
                                        </section>
                                        <section class="col-xl-6">
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Division/Section/Unit:</label>
                                                <input type="text" class="input-design-1 w-100" readonly tabindex="-1"
                                                    value="{{ $division->division_number . ' - ' . $division->division_name }}">
                                            </div>
                                        </section>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row mx-0">
                                        <div class="col-xl-4">
                                            <div class="card shadow border-bottom-success">
                                                <div class="card-header">
                                                    <div class="text-uppercase text-gray-600">
                                                        Type of Request
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        @if ($repair_ictform->type_of_requests_id == 3)
                                                            <div class="d-flex text-gray-900">
                                                                <div class="text-capitalize text-gray-500">
                                                                    request:&nbsp;
                                                                </div>
                                                                <div>
                                                                    {{ $repair_ictform->type_of_requests->request_title }}
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column text-gray-800">
                                                                <div class="text-capitalize text-gray-500">
                                                                    Description:
                                                                </div>
                                                                <textarea name="" id="" rows="6" class="input-design-1 w-100">
                                                                    {{ $repair_ictform->type_request_description }}
                                                                </textarea>
                                                            </div>
                                                        @else
                                                            @if ($repair_ictform->type_of_requests_id == 1)
                                                                <div class="d-flex text-gray-900">
                                                                    <div class="text-capitalize text-gray-500">
                                                                        request:&nbsp;</div>
                                                                    <div>
                                                                        {{ $repair_ictform->type_of_requests->request_title }}
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="d-flex text-gray-900">
                                                                    <div class="text-capitalize text-gray-500">
                                                                        request:&nbsp;</div>
                                                                    <div>
                                                                        {{ $repair_ictform->type_of_requests->request_title }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="card">
                                                <div class="card shadow border-bottom-info">
                                                    <div class="card-header">
                                                        @if ($ictrequests != null)
                                                            <div class="">
                                                                Images & Documents
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="card-body">
                                                        {{-- {!! $ictrequests->images->path_name !!} --}}
                                                        <div class="d-flex g-2">
                                                            <div class="overflow-auto"
                                                                style="width: 649px; height: 270px;">
                                                                @if ($ictrequests->first()->images_id != null)
                                                                    @foreach ($ictrequests as $img)
                                                                        <a href="{{ asset('storage/' . $img->images->path_name) }}"
                                                                            target="_blank" class="hover-1"
                                                                            style="color: transparent; text-decoration: none;">
                                                                            <img src="{{ asset('storage/' . $img->images->path_name) }}"
                                                                                style="max-width: 500px; min-width: 64px; min-height: 125px; max-height: 256px;"
                                                                                alt="image.png">
                                                                        </a>
                                                                    @endforeach
                                                                @else
                                                                    <p class="m-0 text-xs text-danger">
                                                                        No upload file(s).
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-between">
                                                                @if ($ictrequests->first()->documents != null)
                                                                    <a href="{{ asset('storage/' . $ictrequests->first()->documents->path_name) }}"
                                                                        target="_blank"
                                                                        class="d-flex flex-column m-0 text-xs text-primary hover-1">
                                                                        <img src="/icons/svg-files/folder.svg"
                                                                            alt="document.png" width="42" height="42">
                                                                        File exist
                                                                    </a>
                                                                @else
                                                                    <p class="m-0 text-xs text-danger">
                                                                        No document file upload.
                                                                    </p>
                                                                @endif

                                                                {{-- <a href="/download/{{ $ictrequests->first()->ict_forms_id }}"
                                                                    class="btn btn-primary text-capitalize">download</a> --}}
                                                            </div>
                                                        </div>

                                                        {{-- {{ $ictrequests->documents->path_name }} --}}
                                                        {{-- <iframe src="{{ asset('storage/' . $ictrequests->documents->path_name) }}"></iframe> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row mx-0">
                                        <div class="col-xl-12 mb-3">
                                            <div class="row g-2 mx-0">
                                                <div class="text-gray-900 font-weight-bold h5 text-uppercase">
                                                    Area of Request
                                                </div>
                                                <div class="font-weight-normal font-italic">
                                                    (List and file document, can be download)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="row mx-0 mb-4">
                                                @foreach ($repair_ictform->arearequests as $eachAR)
                                                    @if ($arName = $area_request->where('id', $eachAR->area_of_requests_id)->first())
                                                        @if ($arName->id > 11)
                                                            <div class="col-xl-6">
                                                                <div class="card mb-3 py-1 border-left-info">
                                                                    <div class="card-body">
                                                                        <div class="row mx-0 mb-2">
                                                                            <label for="AreaRequest[]"
                                                                                class="m-0">{{ $arName->request_title }}</label>
                                                                            <input type="checkbox" name="AreaRequest[]"
                                                                                id="AreaRequest[]"
                                                                                class="input-design-1 position-absolute"
                                                                                style="right: 0.5em; bottom: 0.5em; width:20px; height:20px;" required>
                                                                        </div>

                                                                        <div class="row mx-0 px-4">
                                                                            @if ($eachAR->has_description != null)
                                                                                <textarea class="input-design-1 w-100" rows="10">{{ $eachAR->has_description }}</textarea>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="col-xl-3">
                                                                <div class="card mb-4 py-1 border-left-info">
                                                                    <div class="card-body">
                                                                        <label for="AreaRequest[]"
                                                                            class="m-0">{{ $arName->request_title }}</label>
                                                                        <input type="checkbox" id="AreaRequest[]"
                                                                            name="AreaRequest[]" required
                                                                            class="input-design-1 position-absolute"
                                                                            style="right: 0.5em; bottom: 0.5em; width:20px; height:20px;">

                                                                        @if ($eachAR->has_description != null)
                                                                            <textarea class="input-design-1 m-0 w-100">{{ $eachAR->has_description }}</textarea>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($errors->all() as $error)
                                        <div class="row mx-0 g-2">
                                            <p class="text-danger text-xs">{{ $error }}</p>
                                        </div>
                                    @endforeach
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
                                            <div class="col-xl-12 col-md-4 p-1 mb-2">
                                                <a href="/request-for-repair"
                                                    class="btn btn-info text-capitalize w-100 text-xs">Need
                                                    Repair - Request</a>
                                            </div>
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button type="submit"
                                                    class="btn btn-success text-capitalize w-100">done</button>
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
