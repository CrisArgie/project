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
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                {{ $info->users->last_name . ', ' . $info->users->first_name }}
                                            </div>
                                            <div class="">
                                                {{ $info->users->divisions->division_number . ' - ' . $info->users->divisions->division_name }}
                                            </div>
                                            <div class="">
                                                {{ $info->equipment->property_no }}
                                            </div>
                                            <div class=""></div>
                                            <div class=""></div>
                                            <div class=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1">
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
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->users->last_name . ', ' . $info->users->first_name }}">
                                                </div>
                                                <div class="my-2">
                                                    Request No.:
                                                    <input class="border w-100 text-gray-900" value="{{ $info->request_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Date Requested:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->date_requested }}">
                                                </div>
                                                <div class="my-2">
                                                    Description of Property Type:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->description_of_property_type }}">
                                                </div>
                                                <div class="my-2">
                                                    Location:
                                                    <input class="border w-100 text-gray-900" value="{{ $info->location }}">
                                                </div>
                                                <div class="my-2">
                                                    Acquisition Date:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->acquisition_date }}">
                                                </div>
                                                <div class="my-2">
                                                    Acquisition Cost:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->acquisition_cost }}">
                                                </div>
                                                <div class="my-2">
                                                    Serial/Engine No.:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->equipment->serial_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Property No.:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->equipment->property_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Brand Model:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->equipment->brand_model }}">
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    Problem Encountered:
                                                    <textarea class="text-gray-900 input-design-1" style="height: 100px;">{{ $info->problem_encountered }}</textarea>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    Corrective Action Performed:
                                                    <textarea class="text-gray-900 input-design-1" style="height: 100px;">{{ $info->corrective_action_performed }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->date_of_latest_repair }}">
                                                </div>
                                                <div class="my-2">
                                                    Mature of Latest Repair:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->mature_of_latest_repair }}">

                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    Defects/Complaints:
                                                    <textarea class="text-gray-900 input-design-1" style="height: 315px;">{{ $info->prerepairinspections->detail_of_defects }}</textarea>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    Pre-repair Assessment Nature/Scope of work to be done:
                                                    <textarea class="text-gray-900 input-design-1" style="height: 315px;">{{ $info->prerepairinspections->pre_repair_assessment_done }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->postrepairinspections->repair_shop }}">
                                                </div>
                                                <div class="my-2">
                                                    Date:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->postrepairinspections->repair_shop_date }}">
                                                </div>
                                                <div class="my-2">
                                                    Job Order/P.O No.:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->postrepairinspections->job_order_no }}">

                                                </div>
                                                <div class="my-2">
                                                    Date:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->postrepairinspections->job_order_date }}">
                                                </div>
                                                <div class="my-2">
                                                    Invoice No.:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->postrepairinspections->invoice_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Amt/J.O./P.O. No.:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->postrepairinspections->amt_no }}">
                                                </div>
                                                <div class="my-2">
                                                    Payable Account:
                                                    <input class="border w-100 text-gray-900"
                                                        value="{{ $info->prerepairinspections->postrepairinspections->payable_account }}">
                                                </div>

                                                <div class="d-flex flex-column my-2">
                                                    Findings/Recommendations:
                                                    <textarea class="text-gray-900 input-design-1" style="height: 385px;">{{ $info->prerepairinspections->postrepairinspections->recommendation }}</textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="col-xl-1 py-3">
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
