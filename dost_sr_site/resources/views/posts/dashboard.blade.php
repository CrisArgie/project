<x-main>
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <h1 class="h3 mb-0 text-dark font-weight-bolder">Primary Monitoring</h1>
    </div>
    <div class="row mb-4">
        <div class="col-xl-3 col-md-12 mb-4">
            <div class="row">
                <div class="col-xl-12 col-md-6 mb-2">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row flex-column no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-black-50 text-uppercase mb-1">
                                        In-progress:
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img class="w-25 h-25" src="../icons/svg-files/pencil-alt.svg">
                                        <p class="h4 mb-0 font-weight-bold text-gray-800">
                                            {{ $repairrequests->where('status', 'in-progress')->count() + $ictrequests->where('status', 'in-progres')->count() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 mb-2">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row flex-column no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-black-50 text-uppercase mb-1">
                                        Pending Request:
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img class="w-25 h-25" src="../icons/svg-files/bubble.svg">
                                        <p class="h4 mb-0 font-weight-bold text-gray-800">
                                            {{ $repairrequests->where('status', 'pending')->count() + $ictrequests->where('status', 'pending')->count() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-md-12 mb-4">
            <div class="row h-100">
                <div class="col-xl-12  mb-2">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body" style="min-height: 65vh;">
                            <div class="row mx-0 h-100">
                                <div class="col-xl-2 px-0">
                                    <div class="row mx-0 align-items-center g-5">
                                        <div class="col-auto px-0">
                                            <div class="h6 mb-0 text-uppercase">
                                                Total number of request by reports per year
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-2 px-0">
                                            <div class="d-flex justify-content-center">
                                                <img width="64" height="64" src="../icons/svg-files/bar-chart.svg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-10 px-0">
                                    <figure class="highcharts-figure pt-4 mb-0">
                                        <div id="container"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-xl-12">
            <div class="d-sm-flex align-items-center justify-content-start mb-4">
                <h1 class="h3 mb-0 text-dark font-weight-bolder">User and Request Monitoring</h1>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total number of request by status per month</h6>

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

                <div class="card-body">
                    <ul class="row mx-0 justify-content-start g-5 list-unstyled px-2">
                        <li class="d-flex flex-column g-4">
                            <div>
                                Completed:
                                <span class="text-gray-800">
                                    {{ $repairperM->where('status', 'done')->count() + $ictperM->where('status', 'done')->count() }}
                                </span>
                            </div>
                            <div>
                                In-progress:
                                <span class="text-gray-800">
                                    {{ $repairperM->where('status', 'in-progress')->count() + $ictperM->where('status', 'in-progress')->count() }}
                                </span>
                            </div>
                            {{-- <div>
                                New:
                                <span></span>
                            </div> --}}
                            {{-- <div>
                                Assigned:
                                <span>
                                    {{ $repairperM->where('status', 'in-progress')->count() + $ictperM->where('status', 'in-progress')->count() }}
                                </span>
                            </div> --}}
                            {{-- @dd($repairperM->where('status', 'pending')->count() + $ictperM->where('status', 'pending')->count()) --}}
                            <div>
                                Pending:
                                <span class="text-gray-800">
                                    {{ $repairperM->where('status', 'pending')->count() + $ictperM->where('status', 'pending')->count() }}
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-6">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total number of user by division</h6>

                    {{-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Users Menu:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}

                </div>

                <div class="card-body">
                    <ul class="row justify-content-center list-unstyled mx-0">
                        {{-- <li class="col-xl-2 d-flex flex-column g-4"> --}}
                        {{-- <div>
                                Completed:
                                <span>
                                    @php
                                        $uniqueId = 0;
                                    @endphp
                                    @foreach ($allUser as $user)
                                        @if (!$user->repairrequest->isEmpty())
                                            @foreach ($user->repairrequest as $items)
                                                @if ($items->status == 'done')
                                                    @php $uniqueId++; @endphp
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @foreach ($allUser as $user)
                                        @if (!$user->ictforms->isEmpty())
                                            @foreach ($user->ictforms as $items)
                                                @if ($items->status == 'done')
                                                    @php $uniqueId++; @endphp
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach

                                    {{ $uniqueId }}
                                </span>
                            </div>
                            <div>
                                Pending:
                                <span>
                                    @php
                                        $uniqueICTId = 0;
                                    @endphp

                                    @foreach ($allUser as $user)

                                        @if ($user->ictforms == null)
                                        @else
                                            @foreach ($user->ictforms as $item)
                                                @if ($item->status == 'pending')
                                                    @php $uniqueICTId++; @endphp
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @foreach ($allUser as $user)
                                        @if ($user->repairrequest == null)
                                        @else
                                            @foreach ($user->repairrequest as $item)
                                                @if ($item->status == 'pending')
                                                    @php $uniqueICTId++; @endphp
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    {{ $uniqueICTId }}
                                </span>
                            </div>
                            <div>
                                Request:
                                <span>
                                    {{ $total_request }}
                                </span>
                            </div> --}}
                        {{-- </li> --}}
                        <li class="col-auto h-100">
                            <figure class="highcharts-figure m-0">
                                <div id="pie-chart-legend" class="chartjs-render-monitor"
                                    style="width: 626px;height: 320px;"></div>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- ictrequests --}}
    {{-- repairrequests --}}
    {{-- @dd($ictrequests) --}}

    <script type="text/javascript">
        var req = [];

        let m = 0;
        @if (!$ictrequests->isEmpty())
            req[m] = {
                name: 'ICT job Request(s)',
                data: [{{ $ictrequests->count() }}]
            };
            m++;
        @endif

        @if (!$repairrequests->isEmpty())
            req[m] = {
                name: 'Repair Request(s)',
                data: [{{ $repairrequests->count() }}]
            };
            m++;
        @endif

        @if (!$pre->isEmpty())
            req[m] = {
                name: 'Pre-repair inspection(s)',
                data: [{{ $pre->count() }}]
            };
            m++;
        @endif

        @if (!$post->isEmpty())
            req[m] = {
                name: 'Post repair inspection(s)',
                data: [{{ $post->count() }}]
            };
            m++;
        @endif

        console.log(req);


        Highcharts.chart({
            chart: {
                renderTo: 'container',
                type: 'bar'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['{{ date('Y') }}'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' request(s)'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            // legend: {
            //     layout: 'vertical',
            //     align: 'right',
            //     verticalAlign: 'top',
            //     x: -40,
            //     y: 80,
            //     floating: true,
            //     borderWidth: 1,
            //     backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            //     shadow: true
            // },
            credits: {
                enabled: false
            },
            series: req
        });

        // PIE
        let x = 0;

        @if ($div->isEmpty())
            var pieData = [{
                name: 'No Data',
                y: 0
            }];
        @else
            var pieData = [];

            @foreach ($div as $item)
                pieData[x] = {
                    name: "Division {{ $name->where('id', $item->division)->first()->division_number }}",
                    y: {{ $item->count }}
                };
                x++
            @endforeach
        @endif

        // console.log();
        // [{
        //     name: 'Chrome',
        //     y: 61.41,
        //     sliced: true,
        //     selected: true
        // }, {
        //     name: 'Internet Explorer',
        //     y: 11.84
        // }, {
        //     name: 'Firefox',
        //     y: 10.85
        // }]



        window.chart = new Highcharts.chart({
            chart: {
                renderTo: 'pie-chart-legend',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: null
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
                name: 'Request',
                colorByPoint: true,
                data: pieData
            }]
        });
        // end admin_dashboard.php
    </script>
</x-main>
