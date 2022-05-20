<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

{{-- @dd($prId->first()->postrepairinspections->repair_shop) --}}
        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <form action="/requests/post-inspection/{{ $prId->first()->id }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="row mx-0">
                        <section class="col-xl-11">
                            <div class="card">
                                <div class="card-body rounded-none shadow">
                                    <div class="row justify-content-between mx-0">
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900">
                                                        No.: </label>
                                                    <input value="{{ $prId->first()->repair_requests->request_no }}"
                                                        type="text" class="input-design-1" readonly tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900">
                                                        Date: </label>
                                                    <input value="{{ $prId->first()->repair_requests->date_requested }}"
                                                        type="text" class="input-design-1" readonly tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2 mb-3">
                                        <div class="col-xl-12 bg-heading-color-1 d-flex justify-content-center py-1">
                                            <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                                POST REPAIR INSPECTION REPORT
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-xl-12 px-0">
                                            <div class="d-flex g-1" style="z-index: 1; transform: translateY(5px);">
                                                <div class="border rounded bg-gray-200 py-2 pl-2 pr-4">
                                                    <div class="text-uppercase text-gray-600 font-weight-bolder">
                                                        PRE-REPAIR REPORT
                                                    </div>
                                                </div>
                                                <div class="border rounded py-2 pl-2 pr-4 border-dark">
                                                    <div class="text-uppercase text-gray-900 font-weight-bolder">
                                                        POST REPAIR REPORT
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 border border-dark px-2 py-3 bg-white"
                                            style="z-index: 50">
                                            <section class="row mx-0">
                                                <ul class="col-xl-6 px-2 m-0">
                                                    <li class="row my-1 mx-0">
                                                        <label for="repair_shop"
                                                            class="col-xl-4 p-0 m-auto text-gray-900 text-ssm">Repair
                                                            Shop/Supplier:</label>
                                                        @if ($prId->first()->postrepairinspections->repair_shop != null)
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text"
                                                                value="{{ $prId->first()->postrepairinspections->repair_shop }}"
                                                                name="repair_shop" id="repair_shop" required>
                                                        @else
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text" value="{{ old('repair_shop') }}"
                                                                name="repair_shop" id="repair_shop" required>
                                                        @endif
                                                        @error('repair_shop')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label for="job_order_no"
                                                            class="col-xl-4 p-0 m-auto text-gray-900 text-ssm">Job
                                                            Order/P.O.
                                                            No.:</label>

                                                        @if ($prId->first()->postrepairinspections->job_order_no != null)
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text"
                                                                value="{{ $prId->first()->postrepairinspections->job_order_no }}"
                                                                name="job_order_no" id="job_order_no" required>
                                                        @else
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text" value="{{ old('job_order_no') }}"
                                                                name="job_order_no" id="job_order_no" required>
                                                        @endif
                                                        @error('job_order_no')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label for="invoice_no"
                                                            class="col-xl-4 p-0 m-auto text-gray-900 text-ssm">Invoice
                                                            No.:</label>

                                                        @if ($prId->first()->postrepairinspections->invoice_no != null)
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text"
                                                                value="{{ $prId->first()->postrepairinspections->invoice_no }}"
                                                                name="invoice_no" id="invoice_no" required>
                                                        @else
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text" value="{{ old('invoice_no') }}"
                                                                name="invoice_no" id="invoice_no" required>
                                                        @endif
                                                        @error('invoice_no')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label for="amt_no"
                                                            class="col-xl-4 p-0 m-auto text-gray-900 text-ssm">Amt/J.O./P.O.
                                                            No.:</label>

                                                        @if ($prId->first()->postrepairinspections->amt_no != null)
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text"
                                                                value="{{ $prId->first()->postrepairinspections->amt_no }}"
                                                                name="amt_no" id="amt_no" required>
                                                        @else
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text" value="{{ old('amt_no') }}" name="amt_no"
                                                                id="amt_no" required>
                                                        @endif
                                                        @error('amt_no')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                </ul>
                                                <ul class="col-xl-6 px-2 m-0">
                                                    <li class="row my-1 mx-0">
                                                        <label for="repair_shop_date"
                                                            class="col-xl-4 p-0 m-auto text-gray-900 text-ssm">Date:</label>

                                                        @if ($prId->first()->postrepairinspections->repair_shop_date != null)
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="date"
                                                                value="{{ $prId->first()->postrepairinspections->repair_shop_date }}"
                                                                name="repair_shop_date" id="repair_shop_date" required>
                                                        @else
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="date" value="{{ old('repair_shop_date') }}"
                                                                name="repair_shop_date" id="repair_shop_date" required>
                                                        @endif
                                                        @error('repair_shop_date')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label for="job_order_date"
                                                            class="col-xl-4 p-0 m-auto text-gray-900 text-ssm">Date:</label>

                                                        @if ($prId->first()->postrepairinspections->job_order_date != null)
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="date"
                                                                value="{{ $prId->first()->postrepairinspections->job_order_date }}"
                                                                name="job_order_date" id="job_order_date" required>
                                                        @else
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="date" value="{{ old('job_order_date') }}"
                                                                name="job_order_date" id="job_order_date" required>
                                                        @endif
                                                        @error('job_order_date')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label for="payable_account"
                                                            class="col-xl-4 p-0 m-auto text-gray-900 text-ssm">Payable
                                                            Account:</label>

                                                        @if ($prId->first()->postrepairinspections->payable_account != null)
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text"
                                                                value="{{ $prId->first()->postrepairinspections->payable_account }}"
                                                                name="payable_account" id="payable_account" required>
                                                        @else
                                                            <input class="col-xl-8 p-0 mt-1 mb-1 input-design-1"
                                                                type="text" value="{{ old('payable_account') }}"
                                                                name="payable_account" id="payable_account" required>
                                                        @endif
                                                        @error('payable_account')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                </ul>
                                            </section>
                                            <hr>
                                            <section class="row mx-0">
                                                <div class="col-xl-12">
                                                    <label for="recommendation" hidden></label>
                                                    @if ($prId->first()->postrepairinspections->recommendation != null)
                                                        <textarea class="input-design-1 text-ssm" name="recommendation" id="recommendation" style="width: 100%; height: 224px;"
                                                            placeholder="FINDINGS/RECOMMENDATIONS"
                                                            required>{{ $prId->first()->postrepairinspections->recommendation }}</textarea>
                                                    @else
                                                        <textarea class="input-design-1 text-ssm" name="recommendation" id="recommendation" style="width: 100%; height: 224px;"
                                                            placeholder="FINDINGS/RECOMMENDATIONS" required></textarea>
                                                    @endif

                                                    @error('recommendation')
                                                        <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="col-xl-1 pt-4 px-0">
                            <div class="row mx-0 h-100">
                                <div class="col-xl-12 col-md-4 px-0 p-1">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" onclick="window.history.back()" class="btn btn-danger">
                                            <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                alt="Return to Previous page" class="icon-white">
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-md-8 p-0">
                                    <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                        <div class="row mx-0">
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button type="submit" name="action" value="print"
                                                    class="btn btn-primary text-capitalize w-100">
                                                    <div class="row mx-0 justify-content-center align-content-center">
                                                        <img src="/icons/svg-files/printer.svg" width="24" height="24"
                                                            alt="Printer.svg" class="icon-white col-xl-12 col-md-4 p-0">
                                                        <div class="col-xl-12 col-md-8 px-1">print</div>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button type="submit" name="action" value="save"
                                                    class="btn btn-primary text-capitalize w-100">save</button>
                                            </div>
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button type="submit" name="action" value="done"
                                                    class="btn btn-success text-capitalize w-100">done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </x-main>
        </section>
    </main>

    <x-flash />
</x-right-content-layout>
