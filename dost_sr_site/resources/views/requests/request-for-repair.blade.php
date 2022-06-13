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
                <form action="/request-for-repair" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mx-0">
                        <section class="col-xl-11">
                            <div class="card">
                                <div class="card-body rounded-none shadow">
                                    <div class="row justify-content-between mx-0">
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="request_no" class="mb-0 text-capitalize text-gray-900">
                                                        No.: </label>

                                                    @if ($repair_request->last() == null)
                                                        <input name="request_no" id="request_no"
                                                            value="{{ 0 + 1 . 1 . '-' . date('Y-md') }}" readonly
                                                            tabindex="-1" type="text" class="input-design-1" required>
                                                    @else
                                                        <input name="request_no" id="request_no"
                                                            value="{{ $repair_request->last()->id + 1 . 1 . '-' . date('Y-md') }}"
                                                            readonly tabindex="-1" type="text" class="input-design-1"
                                                            required>
                                                    @endif

                                                </div>
                                                @error('request_no')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="date_requested"
                                                        class="mb-0 text-capitalize text-gray-900">
                                                        Date: </label>
                                                    <input name="date_requested" id="date_requested"
                                                        value="{{ date('Y-m-d') }}" readonly tabindex="-1" type="text"
                                                        class="input-design-1" required>
                                                </div>
                                                @error('date_requested')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
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
                                                <label for="description_of_property_type"
                                                    class="mb-0 text-gray-900 text-capitalize">
                                                    Desciption of Property Type:</label>
                                                <input name="description_of_property_type"
                                                    id="description_of_property_type" type="text"
                                                    class="input-design-1 w-100" required
                                                    value="{{ old('description_of_property_type') }}"
                                                    placeholder="ex. CPU problem">
                                                @error('description_of_property_type')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <label for="serial_no" class="mb-0 text-gray-900 text-capitalize">
                                                    Serial/Engine No.:</label>
                                                <input name="serial_no" id="serial_no" type="text"
                                                    class="input-design-1 w-100" required
                                                    value="{{ old('serial_no') }}"
                                                    placeholder="ex. 14D77D2498">
                                                @error('serial_no')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <label for="acquisition_date"
                                                    class="mb-0 text-gray-900 text-capitalize">
                                                    Acquisition Date:</label>
                                                <input name="acquisition_date" id="acquisition_date" type="date"
                                                    class="input-design-1 w-100" required
                                                    value="{{ old('acquisition_date') }}">
                                                @error('acquisition_date')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <label for="location" class="mb-0 text-gray-900 text-capitalize">
                                                    Location:</label>
                                                <input name="location" id="location" type="text"
                                                    class="input-design-1 w-100" required
                                                    value="{{ old('location') }}"
                                                    placeholder="BARANGAY, CITY, PROVINCE, REGION">
                                                @error('location')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </section>
                                        <section class="col-xl-6">
                                            <div class="mb-2">
                                                <label for="brand_model" class="mb-0 text-gray-900 text-capitalize">
                                                    Brand Model:</label>
                                                <input name="brand_model" id="brand_model" type="text"
                                                    class="input-design-1 w-100" required
                                                    value="{{ old('brand_model') }}"
                                                    placeholder="ex. DELL, LENOVO, INTEL(s) or AMD(s)">
                                                @error('brand_model')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <label for="property_no" class="mb-0 text-gray-900 text-capitalize">
                                                    Property No.:</label>
                                                <input name="property_no" id="property_no" type="text"
                                                    class="input-design-1 w-100" required
                                                    value="{{ old('property_no') }}"
                                                    placeholder="ex. JVJV212324XJ97WN">
                                                @error('property_no')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <label for="acquisition_cost"
                                                    class="mb-0 text-gray-900 text-capitalize">
                                                    Acquisition Cost:</label>
                                                <input name="acquisition_cost" id="acquisition_cost" type="text"
                                                    class="input-design-1 w-100" required
                                                    value="{{ old('acquisition_cost') }}"
                                                    placeholder="ex. 2440 - (PHP 2,440.00)">
                                                @error('acquisition_cost')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </section>
                                    </div>
                                    <hr class="mb-2">
                                    <div class="row mx-0">
                                        <div class="col-xl-6 mt-2">
                                            <div class="d-flex flex-column">
                                                <label for="problem_encountered"
                                                    class="mb-0 text-gray-900 text-capitalize">
                                                    Problem Encountered:</label>
                                                <textarea class="input-design-1" name="problem_encountered" id="problem_encountered" cols="30" rows="8"
                                                    placeholder="Type here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mt-2">
                                            <div class="d-flex flex-column ">
                                                <label for="corrective_action_performed"
                                                    class="mb-0 text-gray-900 text-capitalize">
                                                    Corrective Action Performed:</label>
                                                <textarea class="input-design-1" name="corrective_action_performed" id="corrective_action_performed" cols="30" rows="8"
                                                    placeholder="Type here..."></textarea>
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
                                        @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                                            <a href="/requests" class="btn btn-danger">
                                                <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page" class="icon-white">
                                            </a>
                                        @else
                                            <a href="/customer/request" class="btn btn-danger">
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
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    {{-- <button type="submit" name="action" value="save"
                                                        class="btn btn-primary w-100">
                                                        <img src="/icons/svg-files/save.svg" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="Save.png">
                                                    </button> --}}
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
                                                <div class="col-xl-12 col-md-4 p-1" x-data="{ open: false }">
                                                    {{-- Submit MODAL --}}
                                                    <button type="button" class="btn btn-primary w-100"
                                                        x-on:click="open = ! open">
                                                        <img src="/icons/svg-files/telegram.svg" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="Send.svg">
                                                    </button>
                                                    <div x-show="open" x-cloak class="modal active"
                                                        style="width: 465px">
                                                        <div class="card">
                                                            <div class="card-header"
                                                                style="background-color: var(--color2)">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5
                                                                        class="m-0 font-weight-bold text-white text-uppercase">
                                                                        Request to User</h5>
                                                                    <button type="button" class="btn btn-danger"
                                                                        x-on:click="open = ! open">×</button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row mx-0">
                                                                    <div class="col-xl-12 my-2">
                                                                        <div class="h6 text-gray-900"> User/Owner name:
                                                                        </div>
                                                                        <label for="users_id" hidden></label>
                                                                        <span class="p-0 text-xs text-gray-600">Select
                                                                            only one user</span>
                                                                        <div class="d-flex">
                                                                            <select name="users_id" id="users_id"
                                                                                size="8" class="input-design-1 w-100">
                                                                                @foreach ($users as $user)
                                                                                    <option class="overflow-auto"
                                                                                        value="{{ $user->id }}">
                                                                                        {{ $user->first_name . ': ' . $user->email }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    @error('users_id')
                                                                        <p class="mb-0 text-danger text-xs">
                                                                            {{ $message }}</p>
                                                                    @enderror
                                                                    <div class="col-xl-12 mt-3">
                                                                        <button type="submit" name="action"
                                                                            value="submit"
                                                                            class="btn btn-primary float-right">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                {{-- FOR CUSTOMER --}}
                                                <input type="text" name="users_id" id="users_id"
                                                    value="{{ auth()->user()->id }}" hidden>

                                                {{-- <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="submit" name="action" value="save"
                                                        class="btn btn-primary text-capitalize w-100">
                                                        <img src="/icons/svg-files/save.svg" alt="save"
                                                            class="icon-white col-xl-12 col-md-4 p-0" width="24"
                                                            height="24">
                                                        <div class="text-xs text-gray-100 text-uppercase opacity-80">
                                                            save
                                                        </div>
                                                    </button>
                                                </div> --}}
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="submit" name="action" value="print"
                                                        class="btn btn-primary text-capitalize w-100">
                                                        <img src="/icons/svg-files/printer.svg" alt="printer"
                                                            class="icon-white col-xl-12 col-md-4 p-0" width="24"
                                                            height="24">
                                                        <div class="text-xs text-gray-100 text-uppercase opacity-80">
                                                            print
                                                        </div>
                                                    </button>
                                                </div>
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="reset" class="btn btn-warning text-capitalize w-100">
                                                        <img src="/icons/svg-files/eraser.svg" alt="reset"
                                                            class="icon-white col-xl-12 col-md-4 p-0" width="24"
                                                            height="24">
                                                        <div class="text-xs text-gray-100 text-uppercase opacity-80">
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
                                                        <div class="text-xs text-gray-100 text-uppercase opacity-80">
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
            </x-main>
        </section>
    </main>

    <x-flash />


</x-right-content-layout>
