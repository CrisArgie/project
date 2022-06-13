<x-right-content-layout>

    @php
        date_default_timezone_set('Asia/Manila');
    @endphp

    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                @include('posts.left-sidebar') {{-- Admin LEFT SIDEBAR --}}
            @else
                @include('customer.page-style.left-sidebar') {{-- Customer LEFT SIDEBAR --}}
            @endif

            <x-main>
                @if ($requests == null)
                    <form action="/request-for-ict-job/create" method="POST" enctype="multipart/form-data">
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
                                                        <label for="date_requested"
                                                            class="mb-0 text-capitalize text-gray-900">
                                                            Date/Time of Request: </label>
                                                        <input value="{{ date('Y-m-d h:i') }}" id="date_requested"
                                                            name="date_requested" type="text" class="input-design-1"
                                                            readonly tabindex="-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-auto col-sm-12 mb-2">
                                                <div style="width: 305px">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <label class="mb-0 text-capitalize text-gray-900"
                                                            for="request_no">
                                                            Request No.: </label>

                                                        @if ($ictforms->last() == null)
                                                            <input value="{{ 0 + 1 . 0 . '-' . date('Y-md') }}"
                                                                type="text" id="request_no" name="request_no"
                                                                class="input-design-1" readonly tabindex="-1">
                                                        @else
                                                            <input
                                                                value="{{ $ictforms->last()->id + 1 . 0 . '-' . date('Y-md') }}"
                                                                type="text" id="request_no" name="request_no"
                                                                class="input-design-1" readonly tabindex="-1">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mt-0 mb-3">
                                        <div class="row mx-0">
                                            <section class="col-xl-6">
                                                <div class="text-uppercase text-gray-900 font-weight-bold"> Client
                                                    Information</div>
                                                <div class="mb-2">
                                                    <label for="users_id" class="mb-0 text-gray-800 text-capitalize h6">
                                                        End User:</label>
                                                    <input value="{{ $user->id }}" id="users_id" name="users_id"
                                                        hidden type="text" required>
                                                    <input value="{{ $user->first_name . ' ' . $user->last_name }}"
                                                        type="text" class="input-design-1 w-100 h6 mb-0" readonly
                                                        tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="mb-0 text-gray-600 text-capitalize h6">
                                                        Division/Section/Unit:</label>
                                                    <input value="{{ $user->divisions_id }}" type="text" hidden>
                                                    <input type="text"
                                                        value="{{ $user->divisions->division_number . ' - ' . $user->divisions->division_name }}"
                                                        class="input-design-1 w-100 h6 mb-0" readonly tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="property_no"
                                                        class="mb-0 text-gray-600 text-capitalize h6">
                                                        Equipment Property No.:</label>
                                                    <input value="{{ old('property_no') }}" id="property_no"
                                                        name="property_no" type="text"
                                                        class="input-design-1 w-100 h6 mb-0" required
                                                        placeholder="ex. JVJV212324XJ97WN">
                                                </div>
                                            </section>
                                            <section class="col-xl-6">
                                                <div class="text-gray-900 font-weight-bold text-uppercase">
                                                    Type Of Request:
                                                </div>
                                                <label for="type_of_requests_id" class="m-0" hidden></label>
                                                <div class="d-flex flex-column justify-content-between g-5">
                                                    <div class="row mx-0" x-data="{ open: false }">
                                                        <div class="col-xl-6 p-0">
                                                            <div class="d-flex align-items-center g-1">
                                                                <input type="radio" value="1" name="type_of_requests_id"
                                                                    id="type_of_requests_id" x-on:click="open = false">
                                                                <label class="mb-0 text-gray-600 text-capitalize"
                                                                    for="">Repair</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 p-0">
                                                            <div class="d-flex align-items-center g-1">
                                                                <input type="radio" value="2" name="type_of_requests_id"
                                                                    id="type_of_requests_id" x-on:click="open = false">
                                                                <label class="mb-0 text-gray-600 text-capitalize"
                                                                    for="">Upgrade</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 p-0">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center g-1">
                                                                    <input type="radio" value="3"
                                                                        name="type_of_requests_id"
                                                                        id="type_of_requests_id" class="input-design-1"
                                                                        x-on:click="open = true">
                                                                    <label class="mb-0 text-gray-600 text-capitalize"
                                                                        for="">Other</label>
                                                                </div>
                                                                <label for="type_request_description"
                                                                    class="m-0"></label>
                                                                <input type="text" name="type_request_description"
                                                                    id="type_request_description"
                                                                    class="input-design-1 w-100" x-cloak x-show="open">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row flex-column mx-0 align-items-end">
                                                        {{-- <div class="row mx-0">
                                                        <button class="btn btn-info btn-icon-split" type="button" x-model="show">
                                                            <span class="icon text-white-50">
                                                                <img src="/icons/svg-files/upload.svg" alt="upload.png"
                                                                    width="16" height="16" class="icon-white">
                                                            </span>
                                                            <span class="text">Upload</span>
                                                        </button>
                                                    </div>
                                                    <div class="row mx-0">
                                                        <p class="text-xs text-gray-600 m-0" x-text="text">No file upload, yet.</p>
                                                    </div> --}}
                                                        <div class="row mx-0">
                                                            <label for="path_imgs"
                                                                class="text-capitalize text-xs text-gray-700 mb-0">Images:
                                                            </label>
                                                            <input type="file" multiple="" id="path_imgs[]"
                                                                name="path_imgs[]"
                                                                class="input-design-1 text-gray-600 text-xs"
                                                                accept="image/x-png,image/gif,image/jpeg,image/jpg">

                                                        </div>
                                                        <div class="row mx-0">
                                                            <label for="path_docs"
                                                                class="text-capitalize text-xs text-gray-700 mb-0">documents:
                                                            </label>
                                                            <input type="file" id="path_docs" name="path_docs"
                                                                class="input-design-1 text-gray-600 text-xs"
                                                                accept=".pdf,.doc,.ppt,.docx">
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row mx-0 g-2 mb-3 mx-0">
                                            <div class="text-gray-900 font-weight-bold h5 mb-0 text-uppercase">
                                                Area of Request
                                            </div>
                                            <div class="font-weight-normal font-italic">
                                                (Check all that apply)
                                            </div>
                                        </div>

                                        <div class="row mx-0 mb-1 g-2" style="padding-left: 12px; padding-right: 12px;">
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="1">
                                                <label for="cable" class="mb-0">Cable</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="2">
                                                <label for="keyboard" class="mb-0">Keyboard</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="3">
                                                <label for="mouse" class="mb-0">Mouse</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="4">
                                                <label for="printer" class="mb-0">Printer</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="5">
                                                <label for="internet" class="mb-0">Internet</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="6">
                                                <label for="cddrive" class="mb-0">CD/DVD Drive</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="7">
                                                <label for="memory" class="mb-0">Memory</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="8">
                                                <label for="network" class="mb-0">Network</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="9">
                                                <label for="powersupply" class="mb-0">Power Supply</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="10">
                                                <label for="hardrive" class="mb-0">Hard Drive</label>
                                            </div>
                                            <div class="d-flex align-items-center g-1">
                                                <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                    value="11">
                                                <label for="monitor" class="mb-0">Monitor</label>
                                            </div>
                                        </div>
                                        <div class="row mx-0">
                                            <div class="col-xl-4" x-data="{ open: false }">
                                                <div class="d-flex align-items-center g-1 mb-1">
                                                    <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                        value="12" x-on:click="open = ! open">
                                                    <label for="software_programs" class="mb-0">Software
                                                        Programs (list):</label>
                                                </div>
                                                <label for="SF_description" hidden></label>
                                                <textarea name="SF_description" id="SF_description" rows="10" class="input-design-1 w-100 " placeholder="Type here..."
                                                    :class="open ? 'required' : 'disabled'" tabindex="-1"></textarea>
                                            </div>
                                            <div class="col-xl-4" x-data="{ open: false }">
                                                <div class="d-flex align-items-center g-1 mb-1">
                                                    <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                        value="13" x-on:click="open = ! open">
                                                    <label for="other_hardware" class="mb-0">Other
                                                        Hardware:</label>
                                                </div>
                                                <label for="OH_description" hidden></label>
                                                <textarea name="OH_description" id="OH_description" rows="10" class="input-design-1 w-100 " placeholder="Type here..."
                                                    :class="open ? 'required' : 'disabled'" tabindex="-1"></textarea>
                                            </div>
                                            <div class="col-xl-4" x-data="{ open: false }">
                                                <div class="d-flex align-items-center g-1 mb-1">
                                                    <input type="checkbox" name="arearequest[]" id="arearequest[]"
                                                        value="14" x-on:click="open = ! open">
                                                    <label for="usb_device" class="mb-0">USB
                                                        Device:</label>
                                                </div>
                                                <label for="UD_description" hidden></label>
                                                <textarea name="UD_description" id="UD_description" rows="10" class="input-design-1 w-100 " placeholder="Type here..."
                                                    :class="open ? 'required' : 'disabled'" tabindex="-1"></textarea>
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
                                            @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                                                <a href="{{ url()->previous() }}" class="btn btn-danger">
                                                    <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                        alt="Return to Previous page" class="icon-white">
                                                </a>
                                            @else
                                                <a href="{{ url()->previous() }}" class="btn btn-danger">
                                                    <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                        alt="Return to Previous page" class="icon-white">
                                                </a>
                                            @endif


                                        </div>
                                    </div>
                                    <div class="col-xl-auto col-md-8 w-100 p-0">
                                        <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                            <div class="row mx-0">

                                                @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                                                    {{-- <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="button" class="btn btn-primary w-100">
                                                        <img src="/icons/svg-files/save.svg" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="Save.png">
                                                    </button>
                                                </div> --}}
                                                    {{-- <div class="col-xl-12 col-md-4 p-1">
                                                        <button type="button" class="btn btn-primary w-100">
                                                            <img src="printer?" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="">
                                                        </button>
                                                    </div> --}}
                                                    <div class="col-xl-12 col-md-4 p-1">
                                                        <button type="reset" class="btn btn-primary w-100">
                                                            <img src="/icons/svg-files/eraser.svg" width="26"
                                                                height="26" class="icon-white col-xl-12 col-md-4 p-0"
                                                                alt="Reset.png">
                                                        </button>
                                                    </div>
                                                    <div class="col-xl-12 col-md-4 p-1">
                                                        <button type="submit" name="action" value="submit"
                                                            class="btn btn-primary w-100">
                                                            <img src="/icons/svg-files/telegram.svg" width="26"
                                                                height="26" class="icon-white col-xl-12 col-md-4 p-0"
                                                                alt="Send.svg">
                                                        </button>
                                                    </div>
                                                @else
                                                    <div class="col-xl-12 col-md-4 p-1">
                                                        <button type="submit" name="action" value="print"
                                                            class="btn btn-primary text-capitalize w-100">
                                                            <img src="/icons/svg-files/printer.svg" alt="printer"
                                                                class="icon-white col-xl-12 col-md-4 p-0" width="24"
                                                                height="24">
                                                            <div
                                                                class="text-xs text-gray-100 text-uppercase opacity-80">
                                                                print
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-xl-12 col-md-4 p-1">
                                                        <button type="reset"
                                                            class="btn btn-warning text-capitalize w-100">
                                                            <img src="/icons/svg-files/eraser.svg" alt="reset"
                                                                class="icon-white col-xl-12 col-md-4 p-0" width="24"
                                                                height="24">
                                                            <div
                                                                class="text-xs text-gray-100 text-uppercase opacity-80">
                                                                reset
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-xl-12 col-md-4 p-1">
                                                        <button type="submit" name="action" value="submit"
                                                            class="btn btn-success text-capitalize w-100">
                                                            <img src="/icons/svg-files/telegram.svg" alt="send"
                                                                class="icon-white col-xl-12 col-md-4 p-0" width="24"
                                                                height="24">
                                                            <div
                                                                class="text-xs text-gray-100 text-uppercase opacity-80">
                                                                submit
                                                            </div>
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                @elseif ($requests == 'view')
                    <form action="/request/delete" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <div class="row mx-0">
                            <section class="col-xl-11">
                                <div class="card">
                                    <div class="card-body rounded-none shadow">
                                        <div class="row mx-0">
                                            <div
                                                class="col-xl-12 bg-heading-color-1 d-flex justify-content-center py-1">
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
                                                        <input value="{{ $user->date_requested }}" type="text"
                                                            class="input-design-1" readonly tabindex="-1"
                                                            name="date_requested" id="date_requested">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-auto col-sm-12 mb-2">
                                                <div style="width: 305px">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <label class="mb-0 text-capitalize text-gray-900"
                                                            for="request_no">
                                                            Request No.: </label>
                                                        <input value="{{ $user->request_no }}" type="text"
                                                            class="input-design-1" readonly tabindex="-1"
                                                            name="request_no" id="request_no">
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
                                                        value="{{ $user->users->first_name . ' ' . $user->users->last_name }}"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Equipment Property No.:</label>
                                                    <input value="{{ $user->equipment->property_no }}" type="text"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                            </section>
                                            <section class="col-xl-6">
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Division/Section/Unit:</label>
                                                    <input type="text" class="input-design-1 w-100" readonly
                                                        tabindex="-1"
                                                        value="{{ $user->users->divisions->division_number . ' - ' . $user->users->divisions->division_name }}">
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
                                                            @if ($user->type_of_requests_id == 3)
                                                                <div class="d-flex text-gray-900">
                                                                    <div class="text-capitalize text-gray-500">
                                                                        request:&nbsp;
                                                                    </div>
                                                                    <div>
                                                                        {{ $user->type_of_requests->request_title }}
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-column text-gray-800">
                                                                    <div class="text-capitalize text-gray-500">
                                                                        Description:
                                                                    </div>
                                                                    <textarea name="" id="" rows="6" class="input-design-1 w-100">
                                                                {{ $user->type_request_description }}
                                                            </textarea>
                                                                </div>
                                                            @else
                                                                @if ($user->type_of_requests_id == 1)
                                                                    <div class="d-flex text-gray-900">
                                                                        <div class="text-capitalize text-gray-500">
                                                                            request:&nbsp;</div>
                                                                        <div>
                                                                            {{ $user->type_of_requests->request_title }}
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="d-flex text-gray-900">
                                                                        <div class="text-capitalize text-gray-500">
                                                                            request:&nbsp;</div>
                                                                        <div>
                                                                            {{ $user->type_of_requests->request_title }}
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @if (!$user->ict_requests->isEmpty())
                                                <div class="col-xl-8">
                                                    <div class="card">
                                                        <div class="card shadow border-bottom-info">
                                                            <div class="card-header">
                                                                <div class="">
                                                                    Images & Documents
                                                                </div>

                                                            </div>
                                                            <div class="card-body">
                                                                {{-- {!! $ictrequests->images->path_name !!} --}}
                                                                <div class="d-flex g-2">
                                                                    <div class="overflow-auto"
                                                                        style="width: 649px; height: 270px;">
                                                                        @if ($user->ict_requests->first()->images_id != null)
                                                                            @foreach ($user->ict_requests as $img)
                                                                                <a href="{{ asset('storage/' . $img->images->path_name) }}"
                                                                                    target="_blank"
                                                                                    class="hover-1"
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
                                                                    <div
                                                                        class="d-flex flex-column justify-content-between">
                                                                        @if ($user->ict_requests->first()->documents == null)
                                                                            <p class="m-0 text-xs text-danger">
                                                                                No document file upload.
                                                                            </p>
                                                                        @else
                                                                            <a href="{{ asset('storage/' . $user->ict_requests->first()->documents->path_name) }}"
                                                                                target="_blank"
                                                                                class="d-flex flex-column m-0 text-xs text-primary hover-1">
                                                                                <img src="/icons/svg-files/folder.svg"
                                                                                    alt="document.png" width="42"
                                                                                    height="42">
                                                                                1 - File exist
                                                                            </a>
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
                                            @endif
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
                                                    @foreach ($user->arearequests as $eachAR)
                                                        @if ($eachAR->area_of_requests_id > 11)
                                                            <div class="col-xl-6">
                                                                <div class="card mb-3 py-1 border-left-info">
                                                                    <div class="card-body">
                                                                        <div class="row mx-0 mb-2">
                                                                            <label for="AreaRequest[]"
                                                                                class="m-0">{{ $eachAR->area_of_requests->request_title }}</label>
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
                                                                            class="m-0">{{ $eachAR->area_of_requests->request_title }}</label>

                                                                        @if ($eachAR->has_description != null)
                                                                            <textarea class="input-design-1 m-0 w-100">{{ $eachAR->has_description }}</textarea>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        {{-- {{ $eachAR->area_of_requests->request_title }} --}}
                                                    @endforeach
                                                    {{-- @foreach ($user->arearequests as $eachAR)
                                                    @if ($arName = $area_request->where('id', $eachAR->area_of_requests_id)->first())

                                                    @endif
                                                @endforeach --}}
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
                                <div class="row mx-0 h-100 justify-content-center">
                                    <div class="col-xl-12 col-md-4 px-0 pt-1">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ url()->previous() }}" class="btn btn-danger">
                                                <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page" class="icon-white">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-auto col-md-8 p-0">
                                        <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                            <div class="row mx-0">
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    @if ($user->status == 'in-progress')
                                                    @else
                                                        <button type="submit" name="action" value="ict-delete"
                                                            class="btn btn-warning text-capitalize w-100">
                                                            delete
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                @endif
            </x-main>
        </section>
        <div id="overlay"></div>
    </main>

    <x-flash />

</x-right-content-layout>
