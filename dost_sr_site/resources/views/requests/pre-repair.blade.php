<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <form action="/requests/pre-inspection/{{ $prerepairId }}/{{ $idforPost->id }}" method="POST" enctype="multipart/form-data">
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
                                                    <input value="{{ $repairInfo->request_no }}" type="text"
                                                        class="input-design-1" readonly tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="mb-0 text-capitalize text-gray-900">
                                                        Date: </label>
                                                    <input value="{{ $repairInfo->date_requested }}" type="text"
                                                        class="input-design-1" readonly tabindex="-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2 mb-3">
                                        <div class="col-xl-12 bg-heading-color-1 d-flex justify-content-center py-1">
                                            <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                                PRE-REPAIR INSPECTION REPORT
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0">
                                        <div class="col-xl-12 px-0">
                                            <div class="d-flex g-1" style="z-index: 1; transform: translateY(5px);">
                                                <div class="border rounded py-2 pl-2 pr-4 border-dark">
                                                    <div class="text-uppercase text-gray-900 font-weight-bolder">
                                                        PRE-REPAIR REPORT
                                                    </div>
                                                </div>
                                                <div class="border rounded bg-gray-200 py-2 pl-2 pr-4">
                                                    <div class="text-uppercase text-gray-600 font-weight-bolder">
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
                                                        <label
                                                            class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Description
                                                            of Property
                                                            Type:</label>
                                                        <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1" type="text"
                                                            value="{{ $repairInfo->description_of_property_type }}"
                                                            readonly tabindex="-1">
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label
                                                            class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Serial/Engine
                                                            No.:</label>
                                                        <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1" type="text"
                                                            value="{{ $repairInfo->equipment->serial_no }}" readonly
                                                            tabindex="-1">
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label
                                                            class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Acquisition
                                                            Date:</label>
                                                        <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1" type="text"
                                                            value="{{ $repairInfo->acquisition_date }}" readonly
                                                            tabindex="-1">
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label for="date_of_latest_repair"
                                                            class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Date
                                                            of Latest Repair:</label>

                                                        @if ($idforPost->date_of_latest_repair != null)
                                                            <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1"
                                                                type="date"
                                                                value="{{ $idforPost->date_of_latest_repair }}"
                                                                name="date_of_latest_repair" id="date_of_latest_repair"
                                                                required>
                                                        @else
                                                            <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1"
                                                                type="date" value="{{ old('date_of_latest_repair') }}"
                                                                name="date_of_latest_repair" id="date_of_latest_repair"
                                                                required>
                                                        @endif
                                                        @error('date_of_latest_repair')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                </ul>
                                                <ul class="col-xl-6 px-2 m-0">
                                                    <li class="row my-1 mx-0">
                                                        <label class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Brand
                                                            Model:</label>
                                                        <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1" type="text"
                                                            value="{{ $repairInfo->equipment->brand_model }}" readonly
                                                            tabindex="-1">
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label
                                                            class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Property
                                                            No.:</label>
                                                        <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1" type="text"
                                                            value="{{ $repairInfo->equipment->property_no }}" readonly
                                                            tabindex="-1">
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label
                                                            class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Acquisition
                                                            Cost:</label>
                                                        <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1" type="text"
                                                            value="{{ $repairInfo->acquisition_cost }}" readonly
                                                            tabindex="-1">
                                                    </li>
                                                    <li class="row my-1 mx-0">
                                                        <label for="mature_of_latest_repair"
                                                            class="col-xl-5 p-0 m-auto text-gray-900 text-ssm">Mature of
                                                            Latest Repair:</label>

                                                        @if ($idforPost->mature_of_latest_repair != null)
                                                            <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1"
                                                                type="date"
                                                                value="{{ $idforPost->mature_of_latest_repair }}"
                                                                name="mature_of_latest_repair"
                                                                id="mature_of_latest_repair" required>
                                                        @else
                                                            <input class="col-xl-7 p-0 mt-1 mb-1 input-design-1"
                                                                type="date"
                                                                value="{{ old('mature_of_latest_repair') }}"
                                                                name="mature_of_latest_repair"
                                                                id="mature_of_latest_repair" required>
                                                        @endif
                                                        @error('mature_of_latest_repair')
                                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                        @enderror
                                                    </li>
                                                </ul>
                                            </section>
                                            <hr>
                                            <section class="row mx-0">
                                                <div class="col-xl-12">
                                                    <div class="text-capitalize text-gray-900 font-weight-bold">
                                                        Attach copy of Latest Job Order
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="row mx-0">
                                                        <div class="col-xl-6 px-0">
                                                            <label for="detail_of_defects" hidden></label>

                                                            @if ($idforPost->detail_of_defects != null)
                                                                <textarea class="input-design-1 text-ssm" name="detail_of_defects" id="detail_of_defects"
                                                                    style="width: 100%; height: 200px;" required
                                                                    placeholder="DEFECTS/COMPLAINTS">{{ $idforPost->detail_of_defects }}</textarea>
                                                            @else
                                                                <textarea class="input-design-1 text-ssm" name="detail_of_defects" id="detail_of_defects"
                                                                    style="width: 100%; height: 200px;" required
                                                                    placeholder="DEFECTS/COMPLAINTS"></textarea>
                                                            @endif
                                                            @error('detail_of_defects')
                                                                <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="col-xl-6 px-0">
                                                            <label for="pre_repair_assessment_done" hidden></label>

                                                            @if ($idforPost->pre_repair_assessment_done != null)
                                                                <textarea class="input-design-1 text-ssm" name="pre_repair_assessment_done" id="pre_repair_assessment_done"
                                                                    style="width: 100%; height: 200px;" required
                                                                    placeholder="PRE-REPAIR ASSESSMENT NATURE/SCOPE OF WORK TO BE DONE">{{ $idforPost->pre_repair_assessment_done }}</textarea>
                                                            @else
                                                                <textarea class="input-design-1 text-ssm" name="pre_repair_assessment_done" id="pre_repair_assessment_done"
                                                                    style="width: 100%; height: 200px;" required
                                                                    placeholder="PRE-REPAIR ASSESSMENT NATURE/SCOPE OF WORK TO BE DONE"></textarea>
                                                            @endif
                                                            @error('pre_repair_assessment_done')
                                                                <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
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
                                                <button type="submit" name="action" value="print" class="btn btn-primary text-capitalize w-100">
                                                    <div class="row mx-0 justify-content-center align-content-center">
                                                        <img src="/icons/svg-files/printer.svg" width="24" height="24"
                                                            alt="Printer.svg" class="icon-white col-xl-12 col-md-4 p-0">
                                                        <div class="col-xl-12 col-md-8 px-1">print</div>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="col-xl-12 col-md-4 p-1">
                                                <button type="submit" name="action" value="need-post-inspection"
                                                    class="btn btn-primary text-capitalize w-100 text-xs">
                                                    Need post inspection
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
