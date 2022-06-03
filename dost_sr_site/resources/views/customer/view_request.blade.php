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

                        <a href="/customer/request" class="btn btn-info">
                            Add Request
                        </a>
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
                                        <span class="col-auto text-lg">
                                            {{ $user->repairrequest->whereIn('status', ['pending', 'in-progress'])->count() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <span class="col-xl-5 col-md-12 mr-2 text-gray-800">Total of ICT Job
                                            Request:</span>
                                        <span class="col-auto text-lg">
                                            {{ $user->ictforms->whereIn('status', ['pending', 'in-progress'])->count() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <span class="col-xl-5 col-md-12 mr-2 text-gray-800">Total of Pending
                                            Request:</span>
                                        <span class="col-auto text-lg">
                                            {{ $user->ictforms->where('status', 'pending')->count() + $user->repairrequest->where('status', 'pending')->count() }}
                                        </span>
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
                                                Request No.
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
                                        @if (!$user->repairrequest->isEmpty())
                                            @foreach ($user->repairrequest as $request)
                                                <tr class="text-dark">
                                                    <td>
                                                        @if ($request->status == 'pending')
                                                            <a class=""
                                                                href="/request/repair/repair/{{ $request->request_no }}">
                                                                {{ $request->request_no }}
                                                            </a>
                                                        @elseif ($request->status == 'in-progress')
                                                            @if ($request->prerepairinspections->first()->status == 'pending')
                                                                <a class=""
                                                                    href="/request/repair/pre-repair/{{ $request->request_no }}">
                                                                    {{ $request->request_no }}
                                                                </a>
                                                            @elseif ($request->prerepairinspections->first()->status == 'in-progress')
                                                                <a class=""
                                                                    href="/request/repair/post-repair/{{ $request->request_no }}">
                                                                    {{ $request->request_no }}
                                                                </a>
                                                            @endif
                                                        @elseif ($request->status == 'done')
                                                            <a class="pointer-events-none">
                                                                {{ $request->request_no }}
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td class="d-flex justify-content-center text-white">
                                                        @if ($request->status == 'done')
                                                            <a href="/request/repair/done/{{ $request->request_no }}"
                                                                class="btn btn-success text-uppercase">
                                                                done
                                                            </a>
                                                        @elseif ($request->status == 'pending')
                                                            <div class="pointer-events-none btn btn-secondary text-uppercase">
                                                                View
                                                            </div>
                                                        @else
                                                            <a href="/request/repair/cancel/{{ $request->request_no }}"
                                                                class="btn btn-warning text-uppercase">
                                                                Cancel
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td class="text-uppercase">
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
                                                Request No.
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
                                                Type of Requests
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Total of Area of Request
                                            </th>
                                            <th tabindex="0" class="text-capitalize">
                                                Property No.
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!$user->ictforms->isEmpty())
                                            @foreach ($user->ictforms as $request)
                                                <tr class="text-dark">
                                                    <td>
                                                        <a href="/request/ict/view/{{ $request->request_no }}">
                                                            {{ $request->request_no }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        @if ($request->status == 'done')
                                                            <a href="/request/ict/done/{{ $request->request_no }}"
                                                                class="btn btn-success text-uppercase">
                                                                Done
                                                            </a>
                                                        @elseif ($request->status == 'pending')
                                                            <div class="btn btn-secondary text-uppercase pointer-events-none">
                                                                View
                                                            </div>
                                                        @else
                                                            <a href="/request/ict/cancel/{{ $request->request_no }}"
                                                                class="btn btn-danger text-uppercase">
                                                                Cancel
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td class="text-uppercase">
                                                        {{ $request->status }}
                                                    </td>
                                                    <td>
                                                        {{ $request->date_requested }}
                                                    </td>
                                                    <td>
                                                        {{ $request->type_of_requests->request_title }}
                                                    </td>
                                                    <td>
                                                        {{ $areaconjunction->where('ict_forms_id', $request->id)->count() }}
                                                    </td>
                                                    <td>
                                                        {{-- @dd() --}}
                                                        {{ $request->equipment->property_no }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                        @endif
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
