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
                                        Inprogress:
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img class="w-25 h-25" src="../icons/svg-files/pencil-alt.svg">
                                        <p class="h4 mb-0 font-weight-bold text-gray-800"> 4 </p>
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
                                        <p class="h4 mb-0 font-weight-bold text-gray-800"> 4 </p>
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
                        <div class="card-body" style="height: 65vh;">
                            <div class="row mx-0 h-100 align-items-center">
                                <div class="col-xl-2 h-100 px-0">
                                    <div class="row mx-0 flex-column align-items-center justify-content-between h-100">
                                        <div class="h6 text-uppercase">
                                            Total number of request by reports per year
                                        </div>
                                        <img width="64" height="64" src="../icons/svg-files/bar-chart.svg">
                                    </div>
                                </div>
                                <div class="col-xl-10 h-100 px-0">
                                    
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

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Requests Menu:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <ul class="row justify-content-evenly g-5 list-unstyled mr-0">
                        <li class="d-flex flex-column g-4">
                            <div>Completed:</div>
                            <div>In-progress:</div>
                            <div>New:</div>
                        </li>
                        <li class="d-flex flex-column g-4">
                            <div>Assigned:</div>
                            <div>Pending:</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-6">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Total number of user by division per month</h6>

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Users Menu:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <ul class="row justify-content-start g-5 list-unstyled mx-0">
                        <li class="d-flex flex-column ml-4 g-4">
                            <div>Completed:</div>
                            <div>Pending:</div>
                            <div>Request:</div>
                        </li>
                        <li>

                        </li>
                    </ul>
                    {{-- <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myAreaChart" style="display: block; height: 320px; width: 782px;" width="977" height="400" class="chartjs-render-monitor"></canvas>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-main>