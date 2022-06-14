<x-right-content-layout>

    @php
        date_default_timezone_set('Asia/Manila');
    @endphp

    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @if (auth()->user()->user_type == 'admin')
                @include('posts.left-sidebar') {{-- Admin LEFT SIDEBAR --}}
            @else
                @include('customer.page-style.left-sidebar') {{-- Customer LEFT SIDEBAR --}}
            @endif

            {{-- @dd() --}}

            <x-main>
                @if ($requests == 'repair')
                    <form action="/request/delete" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <div class="row mx-0">
                            <section class="col-xl-11">
                                <x-card>
                                    <div class="row mx-0 justify-content-between" style="padding: 0px 12px;">
                                        <x-form.input name="request_no" label="No." readonly tabindex="-1"
                                            value="{{ $user->request_no }}" />
                                        <x-form.input name="date_requested" label="Date" readonly tabindex="-1"
                                            value="{{ $user->date_requested }}" />
                                    </div>

                                    <div class="row mx-0 bg-heading-color-1 d-flex justify-content-center py-1 my-2">
                                        <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                            Request for Repair
                                        </div>
                                    </div>

                                    <div class="row mx-0">
                                        <div class="col-xl-6">
                                            <x-form.input name="description_of_property_type"
                                                label="Desciption of Property Type" class="d-flex flex-column mb-2"
                                                value="{{ $user->description_of_property_type }}" />
                                            <x-form.input name="serial_no" label="Serial/Engine no."
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->equipment->serial_no }}" />
                                            <x-form.input name="acquisition_date" label="acquisition date"
                                                class="d-flex flex-column w-100 mb-2"
                                                value="{{ $user->acquisition_date }}" />
                                            <x-form.input name="location" label="Location" class="d-flex flex-column"
                                                value="{{ $user->location }}" />
                                        </div>

                                        <div class="col-xl-6">
                                            <x-form.input name="brand_model" label="Brand Model"
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->equipment->brand_model }}" />
                                            <x-form.input name="property_no" label="Property No."
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->equipment->property_no }}" />
                                            <x-form.input name="acquisition_cost" label="Acquisition Cost"
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->acquisition_cost }}" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex flex-column">
                                        <x-form.textarea name="problem_encountered" label="Problem Encountered"
                                            class-label="d-flex flex-column mb-2"
                                            value="{{ $user->problem_encountered }}" />
                                        <x-form.textarea name="corrective_action_performed"
                                            label="Corrective Action Performed" class-label="d-flex flex-column mb-2"
                                            value="{{ $user->corrective_action_performed }}" />
                                    </div>

                                    <div class="d-flex justify-content-end g-2">
                                        @if ($user->status == 'in-progress')
                                            <a href="/request/repair/pre-repair/{{ $user->request_no }}"
                                                class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                                <span class="text text-xs text-capitalize d-flex align-items-center">
                                                    Pre-repair Inspection
                                                </span>
                                            </a>
                                        @else
                                            <x-form.button type="submit" name="action" value="repair-delete"
                                                class="btn-warning">
                                                delete
                                            </x-form.button>
                                        @endif

                                    </div>
                                </x-card>
                            </section>
                            <section class="col-xl-1 noPrint">
                                <div class="row mx-0 h-100">
                                    <div class="col-xl-12 col-md-4 px-0 p-1">
                                        <div class="d-flex justify-content-center">
                                            {{-- @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                                                    <a href="/requests" class="btn btn-danger">
                                                        <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                            alt="Return to Previous page" class="icon-white">
                                                    </a>
                                                @else --}}
                                            <a href="/view/requests" class="btn btn-danger">
                                                <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page" class="icon-white">
                                            </a>
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                @elseif ($requests == 'pre-repair')
                    <form action="/request/delete" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <div class="row mx-0">
                            <section class="col-xl-11">
                                <x-card>
                                    <div class="row mx-0 justify-content-between" style="padding: 0px 12px;">
                                        <x-form.input name="request_no" label="No." readonly tabindex="-1"
                                            value="{{ $user->request_no }}" />
                                        <x-form.input name="date_requested" label="Date" readonly tabindex="-1"
                                            value="{{ $user->date_requested }}" />
                                    </div>

                                    <div class="row mx-0 bg-heading-color-1 d-flex justify-content-center py-1 my-2">
                                        <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                            PRE-REPAIR INSPECTION REPORT
                                        </div>
                                    </div>

                                    <div class="row mx-0">
                                        <div class="col-xl-6">
                                            <x-form.input name="description_of_property_type"
                                                label="Desciption of Property Type" class="d-flex flex-column mb-2"
                                                value="{{ $user->description_of_property_type }}" />
                                            <x-form.input name="serial_no" label="Serial/Engine no."
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->equipment->serial_no }}" />
                                            <x-form.input name="acquisition_date" label="acquisition date"
                                                class="d-flex flex-column w-100 mb-2"
                                                value="{{ $user->acquisition_date }}" />
                                            <x-form.input name="date_of_latest_repair" label="Date of latest repair"
                                                class="d-flex flex-column w-100 mb-2"
                                                value="{{ $user->prerepairinspections->first()->date_of_latest_repair }}" />
                                        </div>

                                        <div class="col-xl-6">
                                            <x-form.input name="brand_model" label="Brand Model"
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->equipment->brand_model }}" />
                                            <x-form.input name="property_no" label="Property No."
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->equipment->property_no }}" />
                                            <x-form.input name="acquisition_cost" label="Acquisition Cost"
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->acquisition_cost }}" />
                                            <x-form.input name="mature_of_latest_repair" label="Mature of latest repair"
                                                class="d-flex flex-column w-100 mb-2"
                                                value="{{ $user->prerepairinspections->first()->mature_of_latest_repair }}" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-0 text-gray-500 font-weight-bolder">
                                        Attach copy of Latest Job Order
                                    </div>
                                    <div class="d-flex flex-column">
                                        <x-form.textarea name="detail_of_defects" label="DEFECTS/COMPLAINTS"
                                            class-label="d-flex flex-column mb-2"
                                            value="{{ $user->prerepairinspections->first()->detail_of_defects }}" />
                                        <x-form.textarea name="pre_repair_assessment_done"
                                            label="PRE-REPAIR ASSESSMENT NATURE/SCOPE OF WORK TO BE DONE"
                                            class-label="d-flex flex-column mb-2"
                                            value="{{ $user->prerepairinspections->first()->pre_repair_assessment_done }}" />
                                    </div>

                                    <div class="d-flex justify-content-end g-2">
                                        <a href="/request/repair/repair/{{ $user->request_no }}"
                                            class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text text-xs text-capitalize d-flex align-items-center">
                                                Request for Repair
                                            </span>
                                        </a>
                                        @if ($user->prerepairinspections->first()->status == 'in-progress')
                                            <a href="/request/repair/post-repair/{{ $user->request_no }}"
                                                class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                                <span class="text text-xs text-capitalize d-flex align-items-center">
                                                    Post Repair Inspection
                                                </span>
                                            </a>
                                        @else
                                            <button type="button" class="btn btn-warning text-capitalize"
                                                data-modal-target="#preID">
                                                delete
                                            </button>
                                        @endif


                                        {{-- <x-form.button type="button" name="action" value="pre-delete"
                                            class="btn-warning">
                                            delete
                                        </x-form.button> --}}
                                    </div>
                                </x-card>
                            </section>
                            <section class="col-xl-1 noPrint">
                                <div class="row mx-0 h-100">
                                    <div class="col-xl-12 col-md-4 px-0 p-1">
                                        <div class="d-flex justify-content-center">
                                            {{-- @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                                                <a href="/requests" class="btn btn-danger">
                                                    <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                        alt="Return to Previous page" class="icon-white">
                                                </a>
                                            @else --}}
                                            <a href="/view/requests" class="btn btn-danger">
                                                <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page" class="icon-white">
                                            </a>
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <x-modal-body id="preID" title="Are you sure to delete this request?">
                            If you delete the request you can't recover it.
                            <x-form.button type="submit" name="action" value="prerepair-delete" class="btn-warning"
                                class-label="d-flex justify-content-end mt-3">
                                delete
                            </x-form.button>
                        </x-modal-body>
                        <div id="overlay"></div>
                    </form>
                @elseif ($requests == 'post-repair')
                    <form action="/request/delete" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <div class="row mx-0">
                            <section class="col-xl-11">
                                <x-card>
                                    <div class="row mx-0 justify-content-between" style="padding: 0px 12px;">
                                        <x-form.input name="request_no" label="No." readonly tabindex="-1"
                                            value="{{ $user->request_no }}" />
                                        <x-form.input name="date_requested" label="Date" readonly tabindex="-1"
                                            value="{{ $user->date_requested }}" />
                                    </div>

                                    <div class="row mx-0 bg-heading-color-1 d-flex justify-content-center py-1 my-2">
                                        <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                            POST REPAIR INSPECTION REPORT
                                        </div>
                                    </div>

                                    <div class="row mx-0">
                                        <div class="col-xl-6">
                                            <x-form.input name="repair_shop	" label="Repair Shop/Supplier"
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->repair_shop }}" />
                                            <x-form.input name="job_order_no" label="Job Order/P.O. No."
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->job_order_no }}" />
                                            <x-form.input name="invoice_no" label="Invoice No."
                                                class="d-flex flex-column w-100 mb-2"
                                                value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->invoice_no }}" />
                                            <x-form.input name="amt_no" label="Amt/J.O./P.O. No."
                                                class="d-flex flex-column w-100 mb-2"
                                                value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->amt_no }}" />
                                        </div>

                                        <div class="col-xl-6">
                                            <x-form.input name="repair_shop_date" label="Date"
                                                class="d-flex flex-column mb-2 w-100"
                                                value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->repair_shop_date }}" />

                                            <x-form.input name="job_order_date" label="Date"
                                                class="d-flex flex-column mb-2 w-100"
                                                value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->job_order_date }}" />

                                            <x-form.input name="payable_account" label="Payable Account"
                                                class="d-flex flex-column mb-2"
                                                value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->payable_account }}" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-0 text-gray-500 font-weight-bolder">
                                        Findings/Recommendations
                                    </div>
                                    <div class="d-flex flex-column">
                                        <x-form.textarea name="recommendation" label="" style="height: 190px;"
                                            class-label="d-flex flex-column mb-2"
                                            value="{{ $user->prerepairinspections->first()->postrepairinspections->first()->recommendation }}" />
                                    </div>

                                    <div class="d-flex justify-content-end g-2">
                                        {{-- <a href=""
                                            class="btn btn-info text-xs d-flex align-items-center text-uppercase">
                                            Pre-repair Inspection
                                        </a> --}}
                                        <a href="/request/repair/pre-repair/{{ $user->request_no }}"
                                            class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text text-xs text-capitalize d-flex align-items-center">
                                                Pre-repair Inspection
                                            </span>
                                        </a>
                                        @if ($user->prerepairinspections->first()->postrepairinspections->first()->status == 'pending')
                                            <button type="button" class="btn btn-warning text-capitalize"
                                                data-modal-target="#postID">
                                                delete
                                            </button>
                                        @endif
                                    </div>
                                </x-card>
                            </section>
                            <section class="col-xl-1 noPrint">
                                <div class="row mx-0 h-100">
                                    <div class="col-xl-12 col-md-4 px-0 p-1">
                                        <div class="d-flex justify-content-center">
                                            {{-- @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
                                            <a href="/requests" class="btn btn-danger">
                                                <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page" class="icon-white">
                                            </a>
                                        @else --}}
                                            <a href="/view/requests" class="btn btn-danger">
                                                <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page" class="icon-white">
                                            </a>
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <x-modal-body id="postID" title="Are you sure to delete this request?">
                            If you delete the request you can't recover it.
                            <x-form.button type="submit" name="action" value="postrepair-delete" class="btn-warning"
                                class-label="d-flex justify-content-end mt-3">
                                delete
                            </x-form.button>
                        </x-modal-body>
                        <div id="overlay"></div>
                    </form>
                @endif
            </x-main>
        </section>
    </main>

    <x-flash />

    <script type="text/javascript" src="/script.js" defer onload="modalFunc()"></script>
</x-right-content-layout>
