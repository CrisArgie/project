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

</x-main>
