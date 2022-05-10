<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}


            @php
                $post = $repair_request->where('status', 'pending')->first();
            @endphp

            @if ($post != null)
                <x-main>
                    <form action="/requests/repair-request/{{ $post->id }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        {{-- <label for="id" hidden></label>
                        <input id="id" name="id" value="{{ $post ->id }}" type="text" hidden> --}}

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
                                                        <input value="{{ $post->request_no }}" type="text"
                                                            class="input-design-1" readonly tabindex="-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-auto col-sm-12 mb-2">
                                                <div style="width: 245px">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <label class="mb-0 text-capitalize text-gray-900">
                                                            Date: </label>
                                                        <input value="{{ $post->date_requested }}" type="text"
                                                            class="input-design-1" readonly tabindex="-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mx-0 my-2 mb-3">
                                            <div
                                                class="col-xl-12 bg-heading-color-1 d-flex justify-content-center py-1">
                                                <div class="h3 mb-0 text-white font-weight-bold text-uppercase">
                                                    Request for Repair
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mx-0">
                                            <section class="col-xl-6">
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Desciption of Property Type:</label>
                                                    <input value="{{ $post->description_of_property_type }}"
                                                        type="text" class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Serial/Engine No.:</label>
                                                    <input value="{{ $post->equipment->serial_no }}" type="text"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Acquisition Date:</label>
                                                    <input value="{{ $post->acquisition_date }}" type="text"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Location:</label>
                                                    <input value="{{ $post->location }}" type="text"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                            </section>
                                            <section class="col-xl-6">
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Brand Model:</label>
                                                    <input value="{{ $post->equipment->brand_model }}" type="text"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Property No.:</label>
                                                    <input value="{{ $post->equipment->property_no }}" type="text"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                        Acquisition Cost:</label>
                                                    <input value="{{ $post->acquisition_cost }}" type="text"
                                                        class="input-design-1 w-100" readonly tabindex="-1">
                                                </div>
                                            </section>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mx-0">
                                            <div class="col-xl-6 mt-2">
                                                <div class="d-flex flex-column">
                                                    <label for="problem_encountered"
                                                        class="mb-0 text-gray-900 text-capitalize">
                                                        Problem Encountered:</label>
                                                    <textarea class="input-design-1" name="problem_encountered" id="problem_encountered" cols="30" rows="7.5"
                                                        placeholder="Type here..."></textarea>
                                                    @error('problem_encountered')
                                                        <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-2">
                                                <div class="d-flex flex-column ">
                                                    <label for="corrective_action_performed"
                                                        class="mb-0 text-gray-900 text-capitalize">
                                                        Corrective Action Performed:</label>
                                                    <textarea class="input-design-1" name="corrective_action_performed" id="corrective_action_performed" cols="30"
                                                        rows="7.5" placeholder="Type here..."></textarea>
                                                    @error('corrective_action_performed')
                                                        <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="col-xl-1 pt-4 px-0">
                                <div class="row mx-0 h-100">
                                    <div class="col-xl-12 col-md-4 px-0 p-1">
                                        <div class="d-flex justify-content-center">
                                            <button type="button" onclick="window.history.back()"
                                                class="btn btn-danger">
                                                <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                    alt="Return to Previous page" class="icon-white">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-auto col-md-8 p-0">
                                        <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                            <div class="row mx-0">
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="button" class="btn btn-primary text-capitalize w-100">
                                                        <div
                                                            class="row mx-0 justify-content-center align-content-center">
                                                            <img src="/icons/svg-files/printer.svg" width="24"
                                                                height="24" alt="Printer.svg"
                                                                class="icon-white col-xl-12 col-md-4 p-0">
                                                            <div class="col-xl-12 col-md-8 px-1">print</div>
                                                        </div>
                                                    </button>
                                                </div>
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="button"
                                                        class="btn btn-primary text-capitalize w-100">save</button>
                                                </div>
                                                <div class="col-xl-12 col-md-4 p-1">
                                                    <button type="submit"
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
            @else
                <x-empty-page></x-empty-page>
            @endif

        </section>
    </main>

    <x-flash />
</x-right-content-layout>
