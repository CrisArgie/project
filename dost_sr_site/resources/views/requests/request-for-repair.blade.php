<x-right-content-layout>

    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            <x-main>
                <form action="" method="" enctype="multipart/form-data">
                    <div class="row mx-0">
                        <section class="col-xl-11">
                            <div class="card">
                                <div class="card-body rounded-none shadow">
                                    <div class="row justify-content-between mx-0">
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="" class="mb-0 text-capitalize text-gray-900">
                                                        No.: </label>
                                                    <input name="" id="" type="text" class="input-design-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-auto col-sm-12 mb-2">
                                            <div style="width: 245px">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="" class="mb-0 text-capitalize text-gray-900">
                                                        Date: </label>
                                                    <input name="" id="" type="text" class="input-design-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 my-2 mb-3">
                                        <div class="col-xl-12 bg-heading-color-1 d-flex justify-content-center py-1">
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
                                                <input name="" id="" type="text" class="input-design-1 w-100">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Serial/Engine No.:</label>
                                                <input name="" id="" type="text" class="input-design-1 w-100">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Acquisition Date:</label>
                                                <input name="" id="" type="text" class="input-design-1 w-100">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Location:</label>
                                                <input name="" id="" type="text" class="input-design-1 w-100">
                                            </div>
                                        </section>
                                        <section class="col-xl-6">
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Brand Model:</label>
                                                <input name="" id="" type="text" class="input-design-1 w-100">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Property No.:</label>
                                                <input name="" id="" type="text" class="input-design-1 w-100">
                                            </div>
                                            <div class="mb-2">
                                                <label for="" class="mb-0 text-gray-900 text-capitalize">
                                                    Acquisition Cost:</label>
                                                <input name="" id="" type="text" class="input-design-1 w-100">
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
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mt-2">
                                            <div class="d-flex flex-column ">
                                                <label for="corrective_action_performed"
                                                    class="mb-0 text-gray-900 text-capitalize">
                                                    Corrective Action Performed:</label>
                                                <textarea class="input-design-1" name="corrective_action_performed" id="corrective_action_performed" cols="30"
                                                    rows="7.5" placeholder="Type here..."></textarea>
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
                                        <button type="button" onclick="window.history.back()" class="btn btn-danger">
                                            <img src="/icons/svg-files/chevron-left.svg" width="16" height="16"
                                                alt="Return to Previous page" class="icon-white">
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-md-8 w-100 p-0">
                                    <div class="d-flex flex-column justify-content-end align-content-center h-100">
                                        <div class="row mx-0">
                                            @if (auth()->user()->user_type == 'admin' || 'technician')
                                                <div class="col-xl-12 col-md-4 p-1" x-data="{ open: false}">
                                                    {{-- Submit MODAL --}}
                                                    <button type="button" class="btn btn-primary w-100" x-on:click="open = ! open">
                                                        <img src="/icons/svg-files/telegram.svg" width="26" height="26"
                                                            class="icon-white col-xl-12 col-md-4 p-0" alt="Send.svg">
                                                    </button>
                                                    <div x-show="open" class="modal active" style="width: 380px">
                                                        <div class="card">
                                                            <div class="card-header"
                                                                style="background-color: var(--color2)">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h5
                                                                        class="m-0 font-weight-bold text-white text-uppercase">
                                                                        Request to User</h5>
                                                                    <button type="button"
                                                                        class="btn btn-danger" x-on:click="open = ! open">×</button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row mx-0">
                                                                    <div class="col-xl-12 my-2">
                                                                        <div class="h6 text-gray-900"> User/Owner name:
                                                                        </div>
                                                                        <label for="users_id" hidden></label>
                                                                        <select name="users_id" id="users_id" class="input-design-1">
                                                                            @foreach ($users as $user)
                                                                                <option value="{{ $user->id }}">
                                                                                    {{ $user->email }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-12 mt-3">
                                                                        <button type="submit"
                                                                            class="btn btn-primary float-right">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                {{-- TO BE EDITED FOR CUSTOMER --}}
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
                                            @endif
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
