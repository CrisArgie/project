<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('customer.page-style.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main class:>
                <div class="row mx-0 my-3">
                    <div class="card w-100">
                        <div class="card-body bg-heading-color-1">
                            <div class="">
                                <div class="mb-4 bg-gray-500 py-3 px-4 w-50" style="margin-left: -1.25rem;">
                                    <div class="text-white text-capitalize font-weight-bolder h5 mb-0">
                                        User Service Request Overview
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-xl-9 pl-0">
                                    <div class="card rounded-0 shadow">
                                        <div class="card-body" style="height: 240px; overflow-y:auto;">
                                            @if (!$repair->isEmpty() || !$ict->isEmpty())
                                                <div class="table-responsive">
                                                    <div class="row mx-0">
                                                        <div class="col-sm-12">
                                                            <table class="table table-bordered dataTable"
                                                                id="customerTable" width="100%" cellspacing="0"
                                                                role="grid" aria-describedby="dataTable_info"
                                                                style="width: 100%;">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th style="width: 190.413px;">No.</th>
                                                                        <th style="width: 190.413px;">Brand/Model</th>
                                                                        <th style="width: 190.413px;">Status</th>
                                                                        <th style="width: 309.112px;">Requested</th>
                                                                        <th style="width: 137.025px;">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                {{-- @foreach ( as )
                                                                @endforeach --}}
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">Cara Stevens</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>New York</td>
                                                                        <td>New York</td>
                                                                        <td>New York</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>Edinburgh</td>
                                                                    </tr>
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
                                <div class="col-xl-3 pr-0">
                                    <div class="card rounded-0 shadow">
                                        <div class="card-body" style="height: 240px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0">

                </div>
            </x-main>
        </section>
    </main>

    <x-flash />
</x-right-content-layout>
