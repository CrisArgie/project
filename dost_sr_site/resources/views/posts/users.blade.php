<x-main>
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <h1 class="h3 mb-0 text-dark font-weight-bolder">Users Monitoring</h1>
    </div>
    <div class="row mb-4">
        <div class="col-xl-2 col-md-12 mb-2">
            <div class="row mx-0 g-3">
                <div class="col-xl-12 col-md-4 col-sm-12">
                    <button class="rounded btn btn-primary w-100">
                        Generate Report
                    </button>
                </div>
                <div class="col-xl-12 col-md-4 col-sm-12">
                    <button class="rounded btn btn-primary w-100" type="button" data-modal-target="#addUser">
                        Add User
                    </button>
                </div>
                <div class="col-xl-12 col-md-4 col-sm-12">
                    <button class="rounded btn btn-primary w-100" type="button" data-modal-target="#addDiv">
                        Add Division
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-10 col-md-12 mb-2">
            <div class="row h-100">
                <div class="col-xl-12  mb-2">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body" style="height: 65vh;">
                            <div class="row mx-0 h-100 align-items-center">
                                <div class="col-xl-2 h-100 px-0">
                                    <div class="d-flex flex-column align-items-center h-100">
                                        <div class="row mx-0 h6 text-uppercase">
                                            Total of user per division
                                        </div>
                                        <div class="d-flex flex-column overflow-auto h-100" style="width: 165px;">
                                            @if (!$divisions->isEmpty())

                                            @endif
                                            @foreach ($divisions as $division)
                                                <span>Divisions {{ $div->where('id', $division->division)->first()->division_number . ': ' . $division->count }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-10 h-100 px-0">
                                    <figure class="h-100 overflow-auto highcharts-figure pt-4 m-0">
                                        <div id="admin-bar-per-users" class="admin-bar-1"></div>
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
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-600 text-uppercase">
                        User Data Table
                    </h6>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>User Type</th>
                                    <th>Division</th>
                                    <th>Email</th>
                                    <th>Division Address Assigned</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="" id="" value="{{ $user->id }}">
                                        </td>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            {{ $user->last_name . ', ' . $user->first_name }}
                                        </td>
                                        <td>
                                            {{ $user->user_type }}
                                        </td>
                                        <td>
                                            {{ $user->divisions->division_number }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->divisions->division_address }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let x = 0;
        var uData = [];

        @foreach ($eachroles as $roles)
            uData[x] = ["{{ $roles->first()->user_type }}", {{ $roles->count() }}];
            x++
        @endforeach


        window.chart = new Highcharts.chart({
            chart: {
                renderTo: 'admin-bar-per-users',
                type: 'column'
            },
            title: {
                text: 'Total number of User on each roles'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (Users)'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Population in {{ date('Y') }}: <b>{point.y:f} user(s)</b>'
            },
            series: [{
                name: 'Users',
                data: uData,
                dataLabels: {
                    enabled: true,
                    rotation: 360,
                    color: '#FFFFFF',
                    align: 'center',
                    format: '{point.y:f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    </script>
</x-main>
