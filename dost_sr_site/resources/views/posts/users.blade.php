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
                    <button class="rounded btn btn-primary w-100">
                        Add User
                    </button>
                </div>
                <div class="col-xl-12 col-md-4 col-sm-12">
                    <button class="rounded btn btn-primary w-100">
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
                                    <div class="row mx-0 flex-column align-items-center justify-content-between h-100">
                                        <div class="h6 text-uppercase">
                                            Total of user per division
                                        </div>
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
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Table
                    </h6>
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
                </div>

            </div>
        </div>
    </div>
</x-main>