<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('customer.page-style.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <div class="row mx-0 my-3">
                    <div class="card w-100">
                        <div class="card-body bg-heading-color-1">
                            <div class="row mx-0">
                                <div class="mb-4 bg-gray-500 py-3 pr-5 px-4" style="margin-left: -1.25rem;">
                                    <div class="text-white text-capitalize font-weight-bolder h5 mb-0">
                                        User Service Request Overview
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-xl-9 mb-2">
                                    <div class="card rounded-0 shadow">
                                        <div class="card-body" style="height: 240px; overflow-y:auto;">
                                            @if (!$user->repairrequest->isEmpty() || !$user->ictforms->isEmpty())
                                                <div class="table-responsive">
                                                    <div class="row mx-0">
                                                        <div class="col-sm-12">
                                                            <table class="table table-bordered dataTable"
                                                                id="customerTable" width="100%" cellspacing="0"
                                                                role="grid" aria-describedby="dataTable_info"
                                                                style="width: 100%;">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th style="width: 190.413px;">
                                                                            No.
                                                                        </th>
                                                                        <th style="width: 190.413px;">
                                                                            Property No.
                                                                        </th>
                                                                        <th style="width: 190.413px;">
                                                                            Status
                                                                        </th>
                                                                        <th style="width: 309.112px;">
                                                                            Requested
                                                                        </th>
                                                                        <th style="width: 137.025px;">
                                                                            Action
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @if (!$user->repairrequest->whereIn('status', ['pending', 'in-progress'])->isEmpty() || !$user->ictforms->whereIn('status', ['pending', 'in-progress'])->isEmpty())
                                                                        @foreach ($user->repairrequest as $repair)
                                                                            <tr>
                                                                                <td>
                                                                                    {{ $repair->request_no }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $repair->equipment->property_no }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $repair->status }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $repair->date_requested }}
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ $repair->id }}"
                                                                                        class="btn btn-primary text-xs text-uppercase">View</a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        @foreach ($user->ictforms as $repair)
                                                                            <tr>
                                                                                <td>
                                                                                    {{ $repair->request_no }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $repair->ict_requests->first()->equipment->property_no }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $repair->status }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $repair->date_requested }}
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ $repair->id }}"
                                                                                        class="btn btn-primary text-xs text-uppercase">View</a>
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
                                            @else
                                                <div class="d-flex justify-content-center align-items-center h-100">
                                                    <div class="text-gray-500 h6 mb-0 text-capitalize">
                                                        No Pending Service Request
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 mb-2">
                                    <div class="row mx-0 justify-content-between g-4 w-100 h-100">

                                        <div class="card border-left-primary shadow w-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-sm font-weight-bold text-gray-700 text-uppercase mb-1">
                                                            Total of Repair Request (pending, in-progress):
                                                        </div>
                                                        <div
                                                            class="h5 mb-0 font-weight-bold text-gray-600 d-flex justify-content-end">
                                                            {{ $user->repairrequest->whereIn('status', ['pending', 'in-progress'])->count() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-left-secondary shadow w-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-sm font-weight-bold text-gray-700 text-uppercase mb-1">
                                                            Total of ICT Job Request (pending, in-progress):</div>
                                                        <div
                                                            class="h5 mb-0 font-weight-bold text-gray-600 d-flex justify-content-end">
                                                            {{ $user->ictforms->whereIn('status', ['pending', 'in-progress'])->count() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="card mb-4 py-3 rounded-0 w-100 bg-gray-200">
                        <div class="card-body">
                            <div class="row mx-0">
                                <div class="mb-4 bg-gray-500 py-3 pr-5 px-4" style="margin-left: -1.25rem;">
                                    <div class="text-white text-capitalize font-weight-bolder h5 mb-0">
                                        User Interface
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0 mb-2 d-flex justify-content-center g-2">
                                <a href="/request-for-repair" class="col-xl-2 border-0 btn btn-primary">
                                    Add Repair Request

                                    <div class="my-1">
                                        <img src="/icons/svg-files/files.svg" alt="add-repair-request" width="42"
                                            height="42" class="icon-white opacity-80">
                                    </div>
                                </a>
                                <a href="" class="col-xl-2 border-0 btn btn-primary">
                                    Profile

                                    <div class="my-1">
                                        <img src="/icons/svg-files/user.svg" alt="view-request" width="42" height="42"
                                            class="icon-white opacity-80">
                                    </div>
                                </a>
                            </div>
                            <div class="row mx-0 mb-2 d-flex justify-content-center g-2">
                                <a href="/request-for-ict-job/{{ auth()->user()->id }}"
                                    class="col-xl-2 border-0 btn btn-primary">
                                    Add ICT Job Request

                                    <div class="my-1">
                                        <img src="/icons/svg-files/files.svg" alt="add-ict-job-request" width="42"
                                            height="42" class="icon-white opacity-80">
                                    </div>
                                </a>
                                <a href="/abouts" class="col-xl-2 border-0 btn btn-primary">
                                    About

                                    <div class="my-1">
                                        <img src="/icons/svg-files/information.svg" alt="about" width="42" height="42"
                                            class="icon-white opacity-80">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-main>
        </section>
    </main>

    @if (auth()->user()->divisions_id == null)
        <div id="overlay" style="opacity: 1;"></div>
        <div class="modal active" id="divisionModal">

            <form action="/home/{{ auth()->user()->id }}/update" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                <div class="card">
                    <div class="card-header">
                        <div class="text-uppercase text-gray-600 font-weight-bold">
                            Set the Division you are assigned:
                        </div>
                    </div>
                    <div class="card-body">
                        <label class="h4 mt-3 text-capitalize font-weight-bold text-gray-900">
                            Divisions:
                        </label>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="overflow-auto input-design-1" style="height: 200px;">
                                <label for="divisions_id" hidden></label>
                                @foreach ($divisions as $division)
                                    <label class="btn btn-info w-100">
                                        <div class="h6 d-flex justify-content-start font-italic">
                                            {{ $division->division_number }}
                                        </div>
                                        <div class="my-2 font-weight-bold">
                                            {{ $division->division_name }}
                                        </div>
                                        <div class="text-xs d-flex justify-content-end">
                                            {{ $division->division_address }}
                                        </div>
                                        <input type="radio" name="divisions_id" id="divisions_id"
                                            value="{{ $division->id }}" class="d-flex">
                                    </label>
                                @endforeach

                            </div>
                        </div>
                        <div class="d-flex justify-content-end g-2">
                            <button type="reset" class="text-xs text-uppercase btn btn-primary">reset</button>
                            {{-- <button type="submit" name="action" value=""></button> --}}
                            <button type="submit" name="action" value="submit"
                                class="text-xs text-uppercase btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif

    <x-flash />
</x-right-content-layout>
