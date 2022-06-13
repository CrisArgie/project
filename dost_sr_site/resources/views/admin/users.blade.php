<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}

        {{-- CONTENT - BODY --}}
        <section class="content-position">
            @include('posts.left-sidebar') {{-- LEFT SIDEBAR --}}

            @include('posts.users') {{-- RIGHT CONTENT WRAPPER --}}
        </section>


        <form action="/users/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal" id="addDiv" style="overflow: visible;">
                <div class="modal-header">
                    <div class="title">
                        Add Division Information
                    </div>
                    <button type="button" data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body p-4">
                    <div class="d-flex flex-column mb-2">
                        <label for="division_number">
                            Division Number:
                        </label>
                        <input type="text" name="division_number" id="division_number" required
                            value="{{ old('division_number') }}">
                    </div>
                    <div class="d-flex flex-column mb-2">
                        <label for="division_name">
                            Division Name:
                        </label>
                        <input type="text" name="division_name" id="division_name" class="input-design-1" required value="{{ old('division_name') }}">
                    </div>
                    <div class="d-flex  flex-column mb-2">
                        <label for="division_address">
                            Division Address:
                        </label>
                        <input type="text" name="division_address" id="division_address" class="input-design-1" required value="{{ old('division_address') }}">
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" name="action" value="division_submit"
                            class="btn btn-primary">Submit</button>
                    </div>
                    @foreach ($errors->all() as $error)
                        <div class="d-flex flex-column">
                            <p class="text-danger text-xs">{{ $error }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>

        <form action="/users/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal" id="addUser" style="overflow: visible;">
                <div class="modal-header">
                    <div class="title">
                        Add User Information
                    </div>
                    <button type="button" data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body p-4">
                    <div class="d-flex flex-column mb-2">
                        <label for="user_type" class="m-0">
                            User Type:
                        </label>
                        <select name="user_type" id="user_type" class="input-design-1" required>
                            <option value="">Select a user role</option>
                            <option value="customer">Customer</option>
                            <option value="technician">Technician</option>
                        </select>
                        {{-- <input type="text" name="" id=""> --}}
                    </div>
                    <div class="d-flex flex-column mb-2">
                        <label for="first_name" class="m-0">
                            First Name
                        </label>
                        <input type="text" name="first_name" id="first_name" class="input-design-1"
                            value="{{ old('first_name') }}" required>
                    </div>
                    <div class="d-flex  flex-column mb-2">
                        <label for="last_name" class="m-0">
                            Last Name
                        </label>
                        <input type="text" name="last_name" id="last_name" class="input-design-1"
                            value="{{ old('last_name') }}" required>
                    </div>
                    <div class="d-flex flex-column mb-2">
                        <label for="email" class="m-0">
                            Email:
                        </label>
                        <input type="text" name="email" id="email" class="input-design-1" value="{{ old('email') }}"
                            required>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label for="password" class="m-0">
                            Password:
                        </label>
                        <input type="password" name="password" id="password" class="input-design-1" required
                            autocomplete="new-password">
                    </div>
                    <div x-data="{ open: false, message: '' }" class="d-flex flex-column mb-2">
                        <div class="d-flex g-2 align-items-center">
                            <label for="divisions_id" class="mb-0">
                                Divisions: <span x-text="message"></span>
                            </label>

                            <button type="button" x-on:click="open = ! open" class="btn btn-info">
                                <span> Click here to choose </span>
                            </button>
                        </div>

                        <select name="divisions_id" id="divisions_id" size="8" x-model="message"
                            class="position-absolute input-design-1" x-show="open"
                            style="width: 500px !important; transform: translate(77px, -245px);" required>
                            @foreach ($div as $division)
                                <option value="{{ $division->id }}" class="py-1">
                                    {{ $division->id . '. ' . $division->division_number . ' - ' . $division->division_name }}
                                </option>
                            @endforeach
                        </select>

                        {{-- <input type="text" name="" id=""> --}}
                    </div>
                    @foreach ($errors->all() as $error)
                        <div class="d-flex flex-column">
                            <p class="text-danger text-xs">{{ $error }}</p>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="action" value="user_submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>

        <div id="overlay"></div>
    </main>

    <x-flash />

    <script type="text/javascript" src="/script.js" defer onload="modalFunc()"></script>
    {{-- <script type="text/javascript" src="/script.js" defer onload="accordionFunc(1, 1)"></script> --}}
</x-right-content-layout>
