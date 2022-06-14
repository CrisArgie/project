<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                {{-- @dd(request()) --}}
                @switch($requests)
                    @case('ict')
                        <div class="">
                            <div class="row mx-0">
                                <div class="col-xl-11">
                                    <div class="bg-white">
                                        <div class="my-4 bg-heading-color-1 p-2">
                                            <div class="h5 text-white font-weight-bold m-0">
                                                ICT JOB REQUEST FORM
                                            </div>
                                        </div>

                                        <div class="">

                                            <div class="row mx-0">
                                                <div class="col-xl-4 mb-3">
                                                    <div class="border shadow my-2">
                                                        <div class="bg-heading-color-1 p-2">
                                                            <div class="h5 text-white font-weight-bold m-0">
                                                                Client Information
                                                            </div>
                                                        </div>

                                                        <div class="p-2">
                                                            <div class="my-2">
                                                                Name:
                                                                <input class="border w-100" readonly tabindex="-1"
                                                                    value="{{ $info->users->last_name . ', ' . $info->users->first_name }}">
                                                            </div>
                                                            <div class="my-2">
                                                                Division:
                                                                <input class="border w-100" readonly tabindex="-1"
                                                                    value="{{ $info->users->divisions->division_number . ' - ' . $info->users->divisions->division_name }}">
                                                            </div>
                                                            <div class="my-2">
                                                                Request No.:
                                                                <input class="border w-100" value="{{ $info->request_no }}"
                                                                    readonly tabindex="-1">
                                                            </div>
                                                            <div class="my-2">
                                                                Date Requested:
                                                                <input class="border w-100" readonly tabindex="-1"
                                                                    value="{{ $info->date_requested }}">
                                                            </div>
                                                            <div class="my-2">
                                                                Property No.:
                                                                <input class="border w-100" readonly tabindex="-1"
                                                                    value="{{ $info->equipment->property_no }}">
                                                            </div>
                                                            <div class="my-2">
                                                                Type of Request
                                                                <input class="border w-100" readonly tabindex="-1"
                                                                    value="{{ $info->type_of_requests->request_title }}">
                                                                @if ($info->type_of_requests->request_title == 'Other')
                                                                    <textarea cols="30" rows="10" readonly tabindex="-1">{{ $info->type_request_description }}</textarea>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 mb-3">
                                                    <div class="border shadow my-2">
                                                        <div class="bg-heading-color-1 p-2">
                                                            <div class="h5 text-white font-weight-bold m-0">
                                                                AREA OF REQUEST
                                                            </div>
                                                        </div>

                                                        <div class="p-2 row mx-0">
                                                            @foreach ($info->arearequests as $item)
                                                                @if ($info->status == 'pending')
                                                                    @if ($item->area_of_requests_id > 11)
                                                                        <div class="col-xl-3">
                                                                            <input type="checkbox" readonly tabindex="-1">
                                                                            {{ $item->area_of_requests->request_title . ':' }}
                                                                            {{ $item->has_description }}
                                                                        </div>
                                                                    @else
                                                                        <div class="col-xl-3">
                                                                            <input type="checkbox" readonly tabindex="-1">
                                                                            {{ $item->area_of_requests->request_title }}
                                                                        </div>
                                                                    @endif
                                                                @else
                                                                    @if ($item->area_of_requests_id > 11)
                                                                        <div class="col-xl-3">
                                                                            <input type="checkbox" checked readonly
                                                                                tabindex="-1">
                                                                            {{ $item->area_of_requests->request_title . ':' }}
                                                                            {{ $item->has_description }}
                                                                        </div>
                                                                    @else
                                                                        <div class="col-xl-3">
                                                                            <input type="checkbox" checked readonly
                                                                                tabindex="-1">
                                                                            {{ $item->area_of_requests->request_title }}
                                                                        </div>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 mb-3">
                                                    <div class="card">
                                                        <div class="card-header bg-heading-color-1">
                                                            <div class="h5 text-capitalize font-weight-bold text-white m-0">
                                                                Documents
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            @if ($info->ict_requests->first()->documents != null)
                                                                <a href="{{ asset('storage/' . $info->ict_requests->first()->documents->path_name) }}"
                                                                    target="_blank"
                                                                    class="d-flex flex-column m-0 text-primary hover-1">
                                                                    Click here to download the file.
                                                                </a>
                                                                {{-- <iframe
                                                                src="{{ asset('storage/' . $info->ict_requests->first()->documents->path_name) }}"
                                                                style="width: 100%; height: 400px; border: none;"></iframe> --}}
                                                            @else
                                                                No document files.
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 mb-3">
                                                    <div class="card">
                                                        <div class="card-header bg-heading-color-1">
                                                            <div class="h5 text-capitalize font-weight-bold text-white m-0">
                                                                Images
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            @if ($info->ict_requests->isEmpty())
                                                                No images attach.
                                                            @else
                                                                @foreach ($info->ict_requests as $item)
                                                                    <a href="{{ asset('storage/' . $item->images->path_name) }}"
                                                                        target="_blank" class="hover-1"
                                                                        style="color: transparent; text-decoration: none;">
                                                                        <img src="{{ asset('storage/' . $item->images->path_name) }}"
                                                                            style="max-width: 500px; min-width: 64px; min-height: 125px; max-height: 256px;"
                                                                            alt="image.png">
                                                                    </a>
                                                                @endforeach
                                                            @endif

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1 noPrint">
                                    <div class="d-flex justify-content-center align-items-end">
                                        <a class="btn btn-danger" href="{{ url()->previous() }}">
                                            <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                alt="Return to Previous page" class="icon-white">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @break

                    @case('repair')
                        <div class="row mx-0">
                            <section class="col-xl-11">
                                <div class="row mx-0">
                                    <div class="col-xl-4 mb-4">
                                        <div class="card">
                                            <div class="card-header bg-heading-color-1">
                                                <div class="h6 mb-0 text-white font-weight-bold text-uppercase">
                                                    REQUEST FOR REPAIR
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="my-2">
                                                    Name:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->users->last_name . ', ' . $info->users->first_name }}">
                                                </div>
                                                <div class="my-2">
                                                    Request No.:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->request_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Date Requested:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->date_requested }}">
                                                </div>
                                                <div class="my-2">
                                                    Description of Property Type:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->description_of_property_type }}">
                                                </div>
                                                <div class="my-2">
                                                    Location:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->location }}">
                                                </div>
                                                <div class="my-2">
                                                    Acquisition Date:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->acquisition_date }}">
                                                </div>
                                                <div class="my-2">
                                                    Acquisition Cost:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->acquisition_cost }}">
                                                </div>
                                                <div class="my-2">
                                                    Serial/Engine No.:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->equipment->serial_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Property No.:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->equipment->property_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Brand Model:
                                                    <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                        value="{{ $info->equipment->brand_model }}">
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    Problem Encountered:
                                                    <textarea class="text-gray-900 input-design-1" readonly tabindex="-1" style="height: 100px;">{{ $info->problem_encountered }}</textarea>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    Corrective Action Performed:
                                                    <textarea class="text-gray-900 input-design-1" readonly tabindex="-1" style="height: 100px;">{{ $info->corrective_action_performed }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($info->status == 'pending')
                                    @else
                                        <div class="col-xl-4 mb-4">
                                            <div class="card">
                                                <div class="card-header bg-heading-color-1">
                                                    <div class="h6 mb-0 text-white font-weight-bold text-uppercase">
                                                        PRE-REPAIR INSPECTION REPORT
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="my-2">
                                                        Date of Latest Repair:
                                                        <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                            value="{{ $info->prerepairinspections->date_of_latest_repair }}">
                                                    </div>
                                                    <div class="my-2">
                                                        Mature of Latest Repair:
                                                        <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                            value="{{ $info->prerepairinspections->mature_of_latest_repair }}">

                                                    </div>
                                                    <div class="d-flex flex-column my-2">
                                                        Defects/Complaints:
                                                        <textarea class="text-gray-900 input-design-1" readonly tabindex="-1" style="height: 315px;">{{ $info->prerepairinspections->detail_of_defects }}</textarea>
                                                    </div>
                                                    <div class="d-flex flex-column my-2">
                                                        Pre-repair Assessment Nature/Scope of work to be done:
                                                        <textarea class="text-gray-900 input-design-1" readonly tabindex="-1" style="height: 315px;">{{ $info->prerepairinspections->pre_repair_assessment_done }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($info->prerepairinspections->postrepairinspections == null)
                                        @else
                                            <div class="col-xl-4 mb-4">
                                                <div class="card">
                                                    <div class="card-header bg-heading-color-1">
                                                        <div class="h6 mb-0 text-white font-weight-bold text-uppercase">
                                                            POST REPAIR INSPECTION REPORT
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="my-2">
                                                            Repair Shop/Supplier:
                                                            <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                                value="{{ $info->prerepairinspections->postrepairinspections->repair_shop }}">
                                                        </div>
                                                        <div class="my-2">
                                                            Date:
                                                            <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                                value="{{ $info->prerepairinspections->postrepairinspections->repair_shop_date }}">
                                                        </div>
                                                        <div class="my-2">
                                                            Job Order/P.O No.:
                                                            <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                                value="{{ $info->prerepairinspections->postrepairinspections->job_order_no }}">

                                                        </div>
                                                        <div class="my-2">
                                                            Date:
                                                            <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                                value="{{ $info->prerepairinspections->postrepairinspections->job_order_date }}">
                                                        </div>
                                                        <div class="my-2">
                                                            Invoice No.:
                                                            <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                                value="{{ $info->prerepairinspections->postrepairinspections->invoice_no }}">
                                                        </div>
                                                        <div class="my-2">
                                                            Amt/J.O./P.O. No.:
                                                            <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                                value="{{ $info->prerepairinspections->postrepairinspections->amt_no }}">
                                                        </div>
                                                        <div class="my-2">
                                                            Payable Account:
                                                            <input class="border w-100 text-gray-900" readonly tabindex="-1"
                                                                value="{{ $info->prerepairinspections->postrepairinspections->payable_account }}">
                                                        </div>

                                                        <div class="d-flex flex-column my-2">
                                                            Findings/Recommendations:
                                                            <textarea class="text-gray-900 input-design-1" readonly tabindex="-1" style="height: 385px;">{{ $info->prerepairinspections->postrepairinspections->recommendation }}</textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </section>
                            <section class="col-xl-1 py-3 noPrint">
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-danger" href="{{ url()->previous() }}">
                                        <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                            alt="Return to Previous page" class="icon-white">
                                    </a>
                                </div>
                            </section>
                        </div>
                    @break

                    @default
                        No Found Information.
                        <a href="{{ url()->previous() }}">
                            Previous
                        </a>
                @endswitch
            </x-main>
        </section>
    </main>

    <x-flash />
</x-right-content-layout>
