<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('customer.page-style.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <div class="row mx-0 justify-content-between align-items-center py-3">
                    <div class="col-xl-4">
                        <div class="text-gray-700 h2 font-weight-bolder mb-0">
                            My Request
                        </div>
                    </div>
                    <div class="col-auto">
                        <button href="#" class="btn btn-primary btn-icon-split">
                            <span class="icon">
                                <img src="/icons/svg-files/printer.svg" alt="Generate_Report" width="20" height="20"
                                    class="icon-white">
                            </span>
                            <span class="text">Generate Report</span>
                        </button>

                        <button class="btn btn-primary">
                            Add Request
                        </button>
                    </div>
                </div>
                <div class="row mx-0 justify-content-between">
                    <div class="col-auto">
                        <span class="h4 mb-0 font-weight-bolder text-gray-800">Request Overview:</span>
                    </div>
                    <div class="col-auto">
                        <div class="row mx-0 g-2">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <span class="col-xl-5 col-md-12 mr-2 text-gray-800">Total of Repair
                                            Request:</span>
                                        <span class="col-auto text-lg">5</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <span class="col-xl-5 col-md-12 mr-2 text-gray-800">Total of ICT Job
                                            Request:</span>
                                        <span class="col-auto text-lg">5</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <span class="col-xl-5 col-md-12 mr-2 text-gray-800">Total of Pending
                                            Request:</span>
                                        <span class="col-auto text-lg">5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mx-0 mb-4">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-capitalize">Repair Request Table</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered dataTable" id="dataTable" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" class="text-capitalize">
                                                No.
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Action
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Status
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Requested
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Acquisition Date
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Brand/Model
                                            </th>
                                            {{-- <th tabindex="0" class="text-capitalize">
                                                Type of Request
                                            </th> --}}
                                            <th tabindex="0" class="text-capitalize">
                                                Property No.
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!$repairrequest->get()->isEmpty())
                                            @foreach ($repairrequest->get() as $request)
                                                <tr>
                                                    <td>
                                                        {{ $request->request_no }}
                                                    </td>
                                                    <td>
                                                        <button type="button"></button>
                                                    </td>
                                                    <td>
                                                        {{ $request->status }}
                                                    </td>
                                                    <td>
                                                        {{ $request->date_requested }}
                                                    </td>
                                                    <td>
                                                        {{ $request->acquisition_date }}
                                                    </td>
                                                    <td>
                                                        {{ $request->equipment->brand_model }}
                                                    </td>
                                                    {{-- <td>
                                                        {{  }}
                                                    </td> --}}
                                                    <td>
                                                        {{ $request->equipment->property_no }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr></tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0 mb-4">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-capitalize">ICT job Request Table</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered dataTable" id="dataTable" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" class="text-capitalize">
                                                No.
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Action
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Status
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Requested
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Needed
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Brand/Model
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Type of Request
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Property No.
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </x-main>
        </section>
    </main>

    <x-flash />
</x-right-content-layout>
