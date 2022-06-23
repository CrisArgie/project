<x-right-content-layout>
    <main class="d-flex flex-column">
        @include('posts.header') {{-- HEADER --}}


        @if (auth()->user()->divisions_id == null)
            <div id="overlay" style="opacity: 1; z-index: 1"></div>
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
                                <div class="overflow-auto input-design-1" style="height: 360px;">
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


        @if (auth()->user()->divisions_id == null)
            <section class="content-position pointer-events-none">
            @else
                <section class="content-position">
        @endif

        {{-- CONTENT - BODY --}}
        @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'technician')
            @include('posts.left-sidebar') {{-- Admin LEFT SIDEBAR --}}
        @else
            @include('customer.page-style.left-sidebar') {{-- Customer LEFT SIDEBAR --}}
        @endif

        <x-main>
            <div class="row mx-0 my-3 mx-2">
                <div class="h2 mb-0 text-gray-600">
                    Profile page
                </div>
            </div>
            <hr class="my-4">
            <div class="row mx-0">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row mx-0">
                            <div class="col-xl-4">
                                <div class="d-flex">
                                    <div class="text-gray-600 font-weight-bold text-capitalize">
                                        User Information
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-4" x-data="{ one: '{{ $user->first_name }}', two: '{{ $user->last_name }}' }">
                                <form action="/profile/update" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf


                                    <div class="d-flex flex-column mb-2">
                                        <label for="first_name" class="mb-0 text-gray-800">First Name:</label>
                                        <div class="d-flex">
                                            <input type="text" name="first_name" id="first_name"
                                                class="input-design-1 w-50" x-model="one">

                                            <button type="button" class="btn btn-danger btn-icon-split"
                                                x-on:click="one = '{{ $user->first_name }}'">
                                                <span class="icon">
                                                    <img src="/icons/svg-files/spinner-arrow.svg" alt="Redo"
                                                        width="20" height="20" class="icon-white">
                                                </span>
                                            </button>

                                            @error('first_name')
                                                <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-2">
                                        <label for="last_name" class="mb-0 text-gray-800">Last Name:</label>
                                        <div class="d-flex">
                                            <input type="text" name="last_name" id="last_name"
                                                class="input-design-1 w-50" x-model="two">

                                            <button type="button" class="btn btn-danger btn-icon-split"
                                                x-on:click="two = '{{ $user->last_name }}'">
                                                <span class="icon">
                                                    <img src="/icons/svg-files/spinner-arrow.svg" alt="Redo"
                                                        width="20" height="20" class="icon-white">
                                                </span>
                                            </button>

                                            @error('last_name')
                                                <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="d-flex flex-column mb-2">
                                                <label for="email" class="mb-0 text-gray-800">Email:</label>
                                                <div class="d-flex">
                                                    <input type="email" name="email" id="email" class="input-design-1 w-50"
                                                        x-model="three">

                                                    <button type="button" class="btn btn-danger btn-icon-split"
                                                        x-on:click="three = '{{ $user->email }}'">
                                                        <span class="icon">
                                                            <img src="/icons/svg-files/spinner-arrow.svg" alt="Redo"
                                                                width="20" height="20" class="icon-white">
                                                        </span>
                                                    </button>

                                                    @error('email')
                                                        <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div> --}}

                                    <div class="d-flex justify-content-end px-4 my-3">
                                        <button type="submit" name="action" value="update" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- EMAIL --}}
            <div class="row mx-0">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row mx-0">
                            <div class="col-xl-4">
                                <div class="d-flex">
                                    <div class="text-gray-600 font-weight-bold text-capitalize">
                                        Email Information
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-4" x-data="{ three: '{{ $user->email }}' }">
                                <form action="/profile/update" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf

                                    <div class="d-flex flex-column mb-2">
                                        <label for="email" class="mb-0 text-gray-800">Email:</label>
                                        <div class="d-flex">
                                            <input type="email" name="email" id="email"
                                                class="input-design-1 w-50" x-model="three">

                                            <button type="button" class="btn btn-danger btn-icon-split"
                                                x-on:click="three = '{{ $user->email }}'">
                                                <span class="icon">
                                                    <img src="/icons/svg-files/spinner-arrow.svg" alt="Redo"
                                                        width="20" height="20" class="icon-white">
                                                </span>
                                            </button>

                                            @error('email')
                                                <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end px-4 my-3">
                                        <button type="submit" name="action" value="email_update"
                                            class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- change PASSWORD --}}
            <div class="row mx-0">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row mx-0">
                            <div class="col-xl-4">
                                <div class="d-flex">
                                    <div class="text-gray-600 font-weight-bold text-capitalize">
                                        Password Information
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-4">
                                <form action="/profile/update" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf

                                    <div class="d-flex flex-column mb-2">
                                        <label for="curr_password" class="mb-0 text-gray-800 text-capitalize">
                                            Current Password:
                                        </label>
                                        <div class="d-flex g-2 align-items-center">
                                            <input type="password" name="curr_password" id="curr_password"
                                                class="input-design-1 w-50">

                                            {{-- <input type="checkbox"> --}}
                                        </div>
                                        @error('curr_password')
                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="d-flex flex-column mb-2">
                                        <label for="password" class="mb-0 text-gray-800 text-capitalize">
                                            New Password:
                                        </label>
                                        <div class="d-flex g-2 align-items-center">
                                            <input type="password" name="password" id="password"
                                                class="input-design-1 w-50">

                                            {{-- <input type="checkbox"> --}}
                                        </div>
                                        @error('password')
                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="d-flex flex-column mb-2">
                                        <label for="password_confirmation" class="mb-0 text-gray-800 text-capitalize">
                                            Confirm Password:
                                        </label>
                                        <div class="d-flex g-2 align-items-center">
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" class="input-design-1 w-50">

                                            {{-- <input type="checkbox"> --}}
                                        </div>
                                        @error('password_confirmation')
                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="d-flex justify-content-end px-4 my-3">
                                        <button type="submit" name="action" value="password_update"
                                            class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- change Division --}}
            <div class="row mx-0">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row mx-0">
                            <div class="col-xl-4">
                                <div class="d-flex">
                                    <div class="text-gray-600 font-weight-bold text-capitalize">
                                        Division Information
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-4">
                                <form action="/profile/update" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf

                                    <div class="d-flex flex-column mb-2">
                                        <label for="divisions_id" class="mb-0 text-gray-800 text-capitalize">
                                            Current Division:
                                        </label>

                                        @if ($user->divisions != null)
                                            <div class="d-flex g-2 align-items-center mb-1">
                                                <input type="text" readonly tabindex="-1" class="input-design-1"
                                                    style="width: 550px"
                                                    value="{{ $user->divisions->division_number . ' - ' . $user->divisions->division_name }}">
                                            </div>
                                        @endif

                                        <div>
                                            <div class="d-flex justify-content-between pl-3 pr-5"
                                                style="width: 550px">
                                                <div class="text-xs">No.</div>

                                                <div class="text-xs">Name</div>

                                                <div class="text-xs">Address</div>
                                            </div>

                                            <select name="divisions_id" id="divisions_id"
                                                class="input-design-1 overflow-auto" size="8"
                                                style="width: 550px" required>
                                                @foreach ($divisions as $division)
                                                    <option value="{{ $division->id }}" class="my-2">
                                                        {{ $division->division_number . ' - ' . $division->division_name . ' (' . $division->division_address . ')' }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('divisions_id')
                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="d-flex justify-content-end px-4 my-3">
                                        <button type="submit" name="action" value="division_update"
                                            class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            @if (auth()->user()->user_type == 'customer' || auth()->user()->user_type == 'technician')
                <div class="row mx-0">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row mx-0">
                                <div class="col-xl-4">
                                    <div class="d-flex">
                                        <div class="text-gray-600 font-weight-bold text-capitalize">
                                            Account Settings
                                        </div>
                                    </div>
                                </div>
                                {{-- DELETE CLEAR HISTORY of REQUEST --}}
                                <div class="col mt-4">
                                    <form action="/profile/delete" method="POST" enctype="multipart/form-data">
                                        @method('DELETE')
                                        @csrf

                                        {{-- <div class="d-flex flex-column mb-2">
                                            </div> --}}

                                        <div class="d-flex flex-column" x-data="{ open: false }">
                                            <div class="d-flex justify-content-start my-3">
                                                <button type="button" class="btn btn-danger"
                                                    x-on:click="open = ! open">
                                                    Delete Account
                                                </button>
                                            </div>

                                            <div class="py-2" x-cloak style="width: 300px; " x-show="open">
                                                <label for="confimation_password">
                                                    Enter Password to Confirm Deletion
                                                </label>
                                                <input type="password" name="confimation_password"
                                                    id="confimation_password" class="input-design-1 w-100">
                                                @error('confimation_password')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror

                                                <div class="d-flex justify-content-end my-3">
                                                    <button type="submit" name="action" value="account_delete"
                                                        class="btn btn-primary">
                                                        Confirm
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- @if (auth()->user()->user_type == 'admin')
                <div class="row mx-0">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="row mx-0">
                                <div class="col-xl-4">
                                    <div class="d-flex">
                                        <div class="text-gray-600 font-weight-bold text-capitalize">
                                            Index Design Settings
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    @dd($index)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endif --}}

        </x-main>
        </section>
    </main>
    <x-flash />
</x-right-content-layout>
