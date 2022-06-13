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
                                Total number of Brand per year (Repair Request)
                            </h6>
                        </div>
                        <div class="card-body" style="">
                            @if ($equipment->isEmpty())
                                <h6 class="m-0 font-weight-bold text-gray-500 text-uppercase">
                                    No Request Data
                                </h6>
                            @else
                                <figure class="highcharts-figure">
                                    <div id="pie-chart" class=""></div>
                                </figure>
                            @endif
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
                        <div class="card-body" style="">
                            @if ($RmonthBardata->isEmpty() || $ImonthBardata->isEmpty())
                                <h6 class="m-0 font-weight-bold text-gray-500 text-uppercase">
                                    No Request Data
                                </h6>
                            @else
                                <figure class="highcharts-figure">
                                    <div id="bar-chart-2" class=""></div>
                                </figure>
                            @endif
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
                            <a class="rounded btn btn-primary w-100 text-uppercase pointer-events-none">
                                No pending report
                            </a>
                        @endif


                    </div>
                    <div class="col-xl-3 my-2">
                        @if (!$repair_ict->where('status', 'in-progress')->isEmpty())
                            <a href="/requests/repair-ict-request/{{ $repair_ict->where('status', 'in-progress')->first()->request_no }}"
                                class="rounded btn btn-primary w-100 text-uppercase">
                                ICT job Request
                            </a>
                        @elseif (!$repair_ict->where('status', 'pending')->isEmpty())
                            <a href="/requests/repair-ict-request/{{ $repair_ict->where('status', 'pending')->first()->request_no }}"
                                class="rounded btn btn-primary w-100 text-uppercase">
                                ICT job Request
                            </a>
                        @else
                            <a class="rounded btn btn-primary w-100 text-uppercase pointer-events-none">
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
                            <a class="rounded btn btn-primary w-100 text-uppercase pointer-events-none">
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
                            <a class="rounded btn btn-primary w-100 text-uppercase pointer-events-none">
                                No pending report
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="/requests/delete" method="POST" enctype="multipart/form-data">
        @method('DELETE')
        @csrf

        <div class="row mb-2">
            <div class="col-xl-12">
                <div class="card shadow mb-4">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                            Repair Request Data Table
                        </h6>

                        <div class="">
                            <button type="button" id="repair" onclick="redirectEdit('repair')" class="btn btn-info">
                                Edit
                            </button>

                            <button type="submit" name="action" value="repair-delete" class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </div>

                    <div class="card-body" style="min-height: 80vh;">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Request No.</th>
                                        {{-- <th hidden>ID</th> --}}
                                        <th>Brand Model</th>
                                        <th>Status</th>
                                        <th>Property No.</th>
                                        <th>Serial No.</th>
                                        <th>Date Requested</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($repair_request as $each_request)
                                        @if ($each_request->status == 'deleted')
                                        @else
                                            <tr>
                                                @if ($each_request->status == 'pending')
                                                    <td> <input type="radio" name="repair"
                                                            value="{{ $each_request->request_no }}">
                                                    </td>
                                                @else
                                                    <td> <input type="radio" name="repair" hidden readonly
                                                            tabindex="-1">
                                                    </td>
                                                @endif
                                                {{-- <td>{{ $no++ }}</td> --}}
                                                <td>
                                                    <input type="text" name="request_no" id="request_no"
                                                        value="{{ $each_request->request_no }}" readonly tabindex="-1"
                                                        hidden>
                                                    <a href="/requests/info/repair/{{ $each_request->request_no }}">
                                                        {{ $each_request->request_no }}
                                                    </a>
                                                </td>
                                                <td> {{ $each_request->equipment->brand_model }} </td>
                                                <td class="text-uppercase"> {{ $each_request->status }} </td>
                                                <td> {{ $each_request->equipment->property_no }} </td>
                                                <td> {{ $each_request->equipment->serial_no }} </td>
                                                <td> {{ $each_request->date_requested }} </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <form action="/requests/delete" method="POST" enctype="multipart/form-data">
        @method('DELETE')
        @csrf
        <div class="row mb-2">
            <div class="col-xl-12">
                <div class="card shadow mb-4">



                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                            ICT Job Request Data Table
                        </h6>

                        <div class="">
                            <button type="button" id="ict" onclick="redirectEdit('ict')" class="btn btn-info">
                                Edit
                            </button>

                            <button type="submit" name="action" value="ict-delete" class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </div>

                    <div class="card-body" style="min-height: 80vh;">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Request No.</th>
                                        <th>User Name</th>
                                        <th>Status</th>
                                        <th>Date Requested</th>
                                        <th>Total area of request</th>
                                        <th>Type of Request</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($repair_ict as $each_request)
                                        @if ($each_request->status == 'done')
                                        @else
                                            <tr>
                                                <td> <input type="radio" name="ict"
                                                        value="{{ $each_request->request_no }}">
                                                </td>
                                                <td>
                                                    <input type="text" name="request_no" id="request_no"
                                                        value="{{ $each_request->request_no }}" readonly
                                                        tabindex="-1" hidden>
                                                    <a href="/requests/info/ict/{{ $each_request->request_no }}">
                                                        {{ $each_request->request_no }}
                                                    </a>
                                                </td>
                                                <td> {{ $each_request->users->first_name . ' ' . $each_request->users->last_name }}
                                                </td>
                                                <td class="text-uppercase"> {{ $each_request->status }} </td>
                                                <td> {{ $each_request->date_requested }} </td>
                                                <td> {{ $each_request->arearequests->count() }} </td>
                                                <td> {{ $each_request->type_of_requests->request_title }} </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </form>
    <form action="/requests/delete" method="POST" enctype="multipart/form-data">
        @method('DELETE')
        @csrf
        <div class="row mb-2">
            <div class="col-xl-12">
                <div class="card shadow mb-4">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                            Pre-repair Inspection Data Table
                        </h6>

                        <div class="">
                            <button type="button" id="pre" onclick="redirectEdit('pre')" class="btn btn-info">
                                Edit
                            </button>

                            <button type="submit" name="action" value="prerepair-delete" class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </div>

                    <div class="card-body" style="min-height: 80vh;">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Request No.</th>
                                        {{-- <th hidden>ID</th> --}}
                                        <th>Brand Model</th>
                                        <th>Status</th>
                                        <th>Date Requested</th>
                                        <th>Date of Latest Repair</th>
                                        <th>Mature of Latest Repair</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php
                                    $no = 1
                                @endphp --}}
                                    @foreach ($pre_repair as $each_request)
                                        @if ($each_request->status == 'deleted')
                                        @else
                                            <tr>
                                                @if ($each_request->status == 'pending')
                                                    <td> <input type="radio" name="pre"
                                                            value="{{ $each_request->repair_requests_id }}">
                                                    </td>
                                                @else
                                                    <td> <input type="radio" name="pre" readonly tabindex="-1" hidden>
                                                    </td>
                                                @endif

                                                {{-- <td hidden>{{ $no++ }}</td> --}}
                                                <td>
                                                    <input type="text" name="request_no" id="request_no"
                                                        value="{{ $each_request->repair_requests->request_no }}"
                                                        readonly tabindex="-1" hidden>

                                                    <a
                                                        href="/requests/info/repair/{{ $each_request->repair_requests->request_no }}">
                                                        {{ $each_request->repair_requests->request_no }}
                                                    </a>
                                                </td>
                                                <td> {{ $each_request->repair_requests->equipment->brand_model }}
                                                </td>
                                                <td class="text-uppercase"> {{ $each_request->status }} </td>
                                                <td> {{ $each_request->created_at }} </td>
                                                <td> {{ $each_request->date_of_latest_repair }} </td>
                                                <td> {{ $each_request->mature_of_latest_repair }} </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <form action="/requests/delete" method="POST" enctype="multipart/form-data">
        @method('DELETE')
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow mb-4">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-gray-700 text-uppercase">
                            Post-repair inspection data Table
                        </h6>

                        <div class="">
                            <button type="button" id="post" onclick="redirectEdit('post')" class="btn btn-info">
                                Edit
                            </button>

                            <button type="submit" name="action" value="postrepair-delete" class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </div>

                    <div class="card-body" style="min-height: 80vh;">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Request No.</th>
                                        <th>Repair Shop</th>
                                        <th>Status</th>
                                        <th>Job Order</th>
                                        <th>Invoice No.</th>
                                        <th>Amt/J.O./P.O. No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post_repair as $each_request)
                                        @if ($each_request->status == 'deleted')
                                        @else
                                            <tr>
                                                @if ($each_request->status == 'pending')
                                                    <td> <input type="radio" name="post"
                                                            value="{{ $each_request->pre_repair_inspections_id }}">
                                                    </td>
                                                @else
                                                    <td> <input type="radio" name="post" readonly tabindex="-1" hidden>
                                                    </td>
                                                @endif

                                                <td>
                                                    <input type="text" name="request_no" id="request_no"
                                                        value="{{ $each_request->pre_repair_inspections->repair_requests->request_no }}"
                                                        readonly tabindex="-1" hidden>
                                                    <a
                                                        href="/requests/info/repair/{{ $each_request->pre_repair_inspections->repair_requests->request_no }}">
                                                        {{ $each_request->pre_repair_inspections->repair_requests->request_no }}
                                                    </a>
                                                </td>
                                                <td> {{ $each_request->repair_shop }} </td>
                                                <td class="text-uppercase"> {{ $each_request->status }} </td>
                                                <td> {{ $each_request->job_order_no }} </td>
                                                <td> {{ $each_request->invoice_no }} </td>
                                                <td> {{ $each_request->amt_no }} </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function redirectEdit(name) {
            var btn = document.getElementById(name)
            btn.addEventListener('click', function() {
                if (document.querySelector('[name=' + name + ']:checked')) {
                    var req_no = document.querySelector('[name=' + name + ']:checked').value

                    if (name == 'repair') {
                        window.location.href = '/requests/repair-request/' + req_no;
                    }
                    if (name == 'ict') {
                        window.location.href = '/requests/repair-ict-request/' + req_no;
                    }
                    if (name == 'pre') {
                        window.location.href = '/requests/pre-inspection/' + req_no;
                    }
                    if (name == 'post') {
                        window.location.href = '/requests/post-inspection/' + req_no;
                    }
                } else {
                    alert('Select one request.')
                }
            })
        }

        var barData = [];
        let x = 0;

        @if ($equipment != null)
            @foreach ($equipment as $eachEquip)
                barData[x] = {
                    name: "{{ $eachEquip->first()->brand_model }}",
                    y: {{ $eachEquip->count() }},
                    drilldown: x + 1,
                };
                x++
            @endforeach
        @endif

        // console.log(barData);

        // pie chart
        Highcharts.chart('pie-chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: "Total number of brand per year"
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: barData
            }]
        });


        var rbarData = [];
        x = 0;




        @if (!$RmonthBardata->isEmpty() || !$ImonthBardata->isEmpty())
            @if (!$RmonthBardata->isEmpty())
                @foreach ($RmonthBardata as $RmonthBardata)
                    rbarData[x] = {
                        name: "{{ $RmonthBardata->monthly }}",
                        y: {{ $RmonthBardata->count }},
                        drilldown: x + 1
                    };
                    x++;
                @endforeach
            @endif
            @if (!$ImonthBardata->isEmpty())
                for (y = 0; y < x; y++) {
                    @foreach ($ImonthBardata as $Imonthdata)
                        if (rbarData[y].name == "{{ $Imonthdata->monthly }}") {
                            rbarData[y].y = rbarData[y].y + {{ $Imonthdata->count }}
                        }
                    @endforeach
                }
            @endif
        @endif

        var scData = [];

        for (j = 0; j < 6; j++) {
            scData[j] = rbarData[j];
        }

        // console.log(scData);

        // bar chart
        Highcharts.chart('bar-chart-2', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total request'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:f}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> of total<br/>'
            },

            series: [{
                name: "Request(s)",
                colorByPoint: true,
                data: scData,
            }],
        });
    </script>
</x-main>
