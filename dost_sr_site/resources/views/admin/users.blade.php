<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            @include('posts.users') {{-- RIGHT CONTENT WRAPPER --}}
        </section>


        <div class="modal" id="addUser" style="overflow: visible;">
            <div class="modal-header">
                <div class="title">
                    Add User Information
                </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body p-4">
                <form action="" enctype="multipart/form-data">
                    <div class="d-flex flex-column mb-2">
                        <label for="">
                            User Type:
                        </label>
                        <select name="" id="" class="input-design-1">
                            <option value="customer">Technician</option>
                            <option value="technician">Customer</option>
                        </select>
                        {{-- <input type="text" name="" id=""> --}}
                    </div>
                    <div class="d-flex flex-column mb-2">
                        <label for="">
                            First Name
                        </label>
                        <input type="text" name="" id="" class="input-design-1">
                    </div>
                    <div class="d-flex  flex-column mb-2">
                        <label for="">
                            Last Name
                        </label>
                        <input type="text" name="" id="" class="input-design-1">
                    </div>
                    <div class="d-flex flex-column mb-2">
                        <label for="">
                            Email:
                        </label>
                        <input type="text" name="" id="" class="input-design-1">
                    </div>
                    <div class="d-flex flex-column mb-2">
                        <label for="">
                            Password:
                        </label>
                        <input type="text" name="" id="" class="input-design-1">
                    </div>
                    <div x-data="{ open: false }" class="d-flex flex-column mb-2">
                        <div class="d-flex g-2 align-items-center">
                            <label for="" class="mb-0">
                                Divisions:
                            </label>

                            <button type="button" x-on:click="open = ! open" class="btn btn-info">
                                <span> Click here to choose </span>
                            </button>
                        </div>

                        <select name="" id="" size="5" class="position-absolute input-design-1" x-show="open" style="width: 377px !important; transform: translate(77px, -156px);">
                            @foreach ($divisions as $division)
                                <option value="{{ $division->id }}" class="py-1">
                                    {{ $division->division_number . ' - ' . $division->division_name }}
                                </option>
                            @endforeach
                        </select>

                        {{-- <input type="text" name="" id=""> --}}
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="overlay"></div>
    </main>

    <x-flash />

    <script type="text/javascript" src="/script.js" defer onload="modalFunc()"></script>
    {{-- <script type="text/javascript" src="/script.js" defer onload="accordionFunc(1, 1)"></script> --}}
</x-right-content-layout>
