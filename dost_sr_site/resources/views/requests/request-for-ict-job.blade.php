<x-right-content-layout>

    @php
        date_default_timezone_set('Asia/Manila');
    @endphp

    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
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
                                                    <input value="{{ now() }}" id="date_requested"
                                                        name="date_requested" type="text" class="input-design-1"
                                                        readonly tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 305px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900" for="request_no">
                                                        Request No.: </label>
                                                    <input value="{{ $ictforms->last()->id + 1 . $user->id . '-' . date('Y-md') }}"
                                                        type="text" id="request_no" name="request_no"
                                                        class="input-design-1" readonly tabindex="-1">
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
                                                <input value="{{ $user->id }}" id="users_id" name="users_id" hidden
                                                    type="text" required>
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
                                                <label for="property_no" class="mb-0 text-gray-600 text-capitalize h6">
                                                    Equipment Property No.:</label>
                                                <input value="{{ old('property_no') }}" id="property_no" name="property_no" type="text"
                                                    class="input-design-1 w-100 h6 mb-0" required>
                                            </div>
                                        </section>
                                        <section class="col-xl-6">
                                            <div class="text-gray-900 font-weight-bold text-uppercase">
                                                Type Of Request:
                                            </div>
                                            <label for="type_of_requests_id" class="m-0" hidden></label>
                                            <div class="d-flex flex-column justify-content-between g-5">
                                                <div class="row mx-0">
                                                    <div class="col-xl-6 p-0">
                                                        <div class="d-flex align-items-center g-1">
                                                            <input type="radio" value="1" name="type_of_requests_id"
                                                                id="type_of_requests_id">
                                                            <label class="mb-0 text-gray-600 text-capitalize"
                                                                for="">Repair</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 p-0">
                                                        <div class="d-flex align-items-center g-1">
                                                            <input type="radio" value="2" name="type_of_requests_id"
                                                                id="type_of_requests_id">
                                                            <label class="mb-0 text-gray-600 text-capitalize"
                                                                for="">Upgrade</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 p-0">
                                                        <div class="d-flex flex-column" x-data="{ open: false }">
                                                            <div class="d-flex align-items-center g-1">
                                                                <input type="radio" value="3" name="type_of_requests_id"
                                                                    id="type_of_requests_id" class="input-design-1"
                                                                    x-on:click="open = ! open">
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
                                            <input type="checkbox" name="cable" id="cable" value="1">
                                            <label for="cable" class="mb-0">Cable</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="keyboard" id="keyboard" value="2">
                                            <label for="keyboard" class="mb-0">Keyboard</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="mouse" id="mouse" value="3">
                                            <label for="mouse" class="mb-0">Mouse</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="printer" id="printer" value="4">
                                            <label for="printer" class="mb-0">Printer</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="internet" id="internet" value="5">
                                            <label for="internet" class="mb-0">Internet</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="cddrive" id="cddrive" value="6">
                                            <label for="cddrive" class="mb-0">CD/DVD Drive</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="memory" id="memory" value="7">
                                            <label for="memory" class="mb-0">Memory</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="network" id="network" value="8">
                                            <label for="network" class="mb-0">Network</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="powersupply" id="powersupply" value="9">
                                            <label for="powersupply" class="mb-0">Power Supply</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="hardrive" id="hardrive" value="10">
                                            <label for="hardrive" class="mb-0">Hard Drive</label>
                                        </div>
                                        <div class="d-flex align-items-center g-1">
                                            <input type="checkbox" name="monitor" id="monitor" value="11">
                                            <label for="monitor" class="mb-0">Monitor</label>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-xl-4" x-data="{ open: false }">
                                            <div class="d-flex align-items-center g-1 mb-1">
                                                <input type="checkbox" name="software_programs" id="software_programs"
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
                                                <input type="checkbox" name="other_hardware" id="other_hardware"
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
                                                <input type="checkbox" name="usb_device" id="usb_device" value="14"
                                                    x-on:click="open = ! open">
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
                                        <button type="button" onclick="window.history.back()" class="btn btn-danger">
                                            <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                alt="Return to Previous page" class="icon-white">
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-md-8 w-100 p-0">
                                    <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                        <div class="row mx-0">

                                            @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="button" class="btn btn-primary w-100">
                                                        <img src="/icons/svg-files/save.svg" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="Save.png">
                                                    </button>
                                                </div>
                                                {{-- <div class="col-xl-12 col-md-4 p-1">
                                                        <button type="button" class="btn btn-primary w-100">
                                                            <img src="printer?" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="">
                                                        </button>
                                                    </div> --}}
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="reset" class="btn btn-primary w-100">
                                                        <img src="/icons/svg-files/eraser.svg" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="Reset.png">
                                                    </button>
                                                </div>
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="submit" class="btn btn-primary w-100">
                                                        <img src="/icons/svg-files/telegram.svg" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="Send.svg">
                                                    </button>
                                                </div>
                                            @else
                                            @endif

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
