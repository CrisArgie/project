<x-main>
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <h1 class="h3 mb-0 text-dark font-weight-bolder">Request Monitoring</h1>
    </div>
    <div class="row mb-4">
        <div class="col-xl-2 col-md-12 mb-2">
            <div class="row mx-0 align-items-center">
                <div class="col-xl-12 col-md-4 col-sm-12 my-2">
                    <a href="/request-for-repair" class="rounded btn btn-primary w-100">
                        + Repair Request
                    </a>
                </div>
                <div class="col-xl-12 col-md-4 col-sm-12 my-2">
                    <a href="/request-ict-user" class="rounded btn btn-primary w-100">
                        + ICT job Request
                    </a>
                </div>
                <div class="col-xl-12 col-md-4 col-sm-12 my-2">
                    <a href="" class="rounded btn btn-primary w-100">
                        Generate Report
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 mb-2 px-1">
            <div class="row h-100">
                <div class="col-xl-12  mb-2">
                    <div class="card border-left-success shadow h-100">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-gray-800 text-uppercase">
                                Total number of Brand per year
                            </h6>
                        </div>
                        <div class="card-body" style="height: 45vh;">
                            <div class="row mx-0">
                                <div class="col-xl-12 px-0">
                                    Pie-chart
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 mb-2 px-1">
            <div class="row h-100">
                <div class="col-xl-12  mb-2">
                    <div class="card border-left-success shadow h-100">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-gray-800 text-uppercase">
                                Recent request per month, last 6 months
                            </h6>
                        </div>
                        <div class="card-body" style="height: 45vh;">
                            <div class="row mx-0">
                                <div class="col-xl-12 px-0">
                                    Bar-chart
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-0">
        <div class="card w-100 mb-4 pb-3 border-bottom-info">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                    Admin and Technician Request Service
                </h6>
            </div>

            @php
                $repair_requests = $repair_request->where('status', 'pending');
            @endphp

            <div class="card-body">
                <div class="row mx-0">
                    <div class="col-xl-3 my-2">
                        @if (!$repair_requests->where('status', 'pending')->isEmpty())
                            <a href="/requests/repair-request/{{ $repair_requests->where('status', 'pending')->first()->request_no }}"
                                class="rounded btn btn-primary w-100 text-uppercase">
                                Repair Request
                            </a>
                        @else
                            <a href=""
                                class="rounded btn btn-primary w-100 text-uppercase">
                                No pending report
                            </a>
                        @endif


                    </div>
                    <div class="col-xl-3 my-2">
                        @if (!$repair_ict->where('status', 'pending')->isEmpty())
                            <a href="/requests/repair-ict-request/{{ $repair_ict->where('status', 'pending')->first()->request_no }}"
                                class="rounded btn btn-primary w-100 text-uppercase">
                                ICT job Request
                            </a>
                        @else
                            <a href=""
                                class="rounded btn btn-primary w-100 text-uppercase">
                                No pending report
                            </a>
                        @endif
                    </div>
                    <div class="col-xl-3 my-2">
                        @if (!$pre_repair->where('status', 'pending')->isEmpty())
                            <a href="/requests/pre-inspection/{{ $pre_repair->where('status', 'pending')->first()->repair_requests_id }}"
                                class="rounded btn btn-primary w-100 text-uppercase">
                                Pre-repair Request
                            </a>
                        @else
                            <a href="" class="rounded btn btn-primary w-100 text-uppercase">
                                No pending report
                            </a>
                        @endif
                    </div>
                    <div class="col-xl-3 my-2">
                        @if (!$post_repair->where('status', 'pending')->isEmpty())
                            <a href="/requests/post-inspection/{{ $post_repair->where('status', 'pending')->first()->pre_repair_inspections_id }}"
                                class="rounded btn btn-primary w-100 text-uppercase">
                                Post repair Request
                            </a>
                        @else
                            <a href="/requests/" class="rounded btn btn-primary w-100 text-uppercase">
                                No pending report
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-xl-12">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                        Repair Request Data Table
                    </h6>
                    {{-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Requests Menu:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
                </div>

                <div class="card-body" style="min-height: 80vh;">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>Brand Model</th>
                                    <th>Status</th>
                                    <th>Property No.</th>
                                    <th>Serial No.</th>
                                    <th>Date Requested</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($repair_request as $each_request)
                                    <tr>
                                        <td> <input type="checkbox" value="{{ $each_request->id }}"> </td>
                                        <td> {{ $each_request->id }} </td>
                                        <td> {{ $each_request->equipment->brand_model }} </td>
                                        <td> {{ $each_request->status }} </td>
                                        <td> {{ $each_request->equipment->property_no }} </td>
                                        <td> {{ $each_request->equipment->serial_no }} </td>
                                        <td> {{ $each_request->date_requested }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-xl-12">
            <div class="card shadow mb-4">



                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                        ICT Job Request Data Table
                    </h6>
                    {{-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Requests Menu:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
                </div>

                <div class="card-body" style="min-height: 80vh;">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>Repair Shop</th>
                                    <th>Status</th>
                                    <th>Property No.</th>
                                    <th>Brand Model</th>
                                    <th>Type of Request</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($repair_request as $each_request)
                                    <tr>
                                        <td> <input type="checkbox" value="{{ $each_request->id }}"> </td>
                                        <td> {{ $each_request->id }} </td>
                                        <td> {{ $each_request->equipment->brand_model }} </td>
                                        <td> {{ $each_request->status }} </td>
                                        <td> {{ $each_request->equipment->property_no }} </td>
                                        <td> {{ $each_request->equipment->serial_no }} </td>
                                        <td> {{ $each_request->date_requested }} </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-xl-12">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                        Pre-repair Inspection Data Table
                    </h6>
                    {{-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Requests Menu:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
                </div>

                <div class="card-body" style="min-height: 80vh;">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>Brand Model</th>
                                    <th>Status</th>
                                    <th>Date Requested</th>
                                    <th>Date of Latest Repair</th>
                                    <th>Mature of Latest Repair</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($repair_request as $each_request)
                                    <tr>
                                        <td> <input type="checkbox" value="{{ $each_request->id }}"> </td>
                                        <td> {{ $each_request->id }} </td>
                                        <td> {{ $each_request->equipment->brand_model }} </td>
                                        <td> {{ $each_request->status }} </td>
                                        <td> {{ $each_request->equipment->property_no }} </td>
                                        <td> {{ $each_request->equipment->serial_no }} </td>
                                        <td> {{ $each_request->date_requested }} </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                        Post-repair inspection data Table
                    </h6>
                    {{-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Requests Menu:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
                </div>

                <div class="card-body" style="min-height: 80vh;">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>Repair Shop</th>
                                    <th>Status</th>
                                    <th>Job Order</th>
                                    <th>Invoice No.</th>
                                    <th>Amt/J.O./P.O. No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($repair_request as $each_request)
                                    <tr>
                                        <td> <input type="checkbox" value="{{ $each_request->id }}"> </td>
                                        <td> {{ $each_request->id }} </td>
                                        <td> {{ $each_request->equipment->brand_model }} </td>
                                        <td> {{ $each_request->status }} </td>
                                        <td> {{ $each_request->equipment->property_no }} </td>
                                        <td> {{ $each_request->equipment->serial_no }} </td>
                                        <td> {{ $each_request->date_requested }} </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-main>
