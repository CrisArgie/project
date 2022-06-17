<x-index-layout>

    <div class="min-vh-100 min-vw-100" style="background-color: var(--color1);">
        <div class="row mx-0 justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="d-flex justify-content-center">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <h3 class="d-flex justify-content-center my-3 text-gray-900">
                                    New Password?
                                </h3>

                                <p>
                                    Create a unique password and take note of it so you will not forgot.
                                </p>

                                <hr class="my-4">

                                <div class="row justify-content-center mx-0">
                                    <div class="col-xl-8 col-md-12">
                                        <form action="/auth/newpassword/update" method="POST" enctype="multipart/form-data" class="user">
                                            @method('PATCH')
                                            @csrf

                                            <div class="d-flex flex-column mb-2">

                                                <div class="d-flex g-2 align-items-center">
                                                    <input type="password" name="curr_password" id="curr_password"
                                                        class="form-control form-control-user"
                                                        placeholder="Current Password:">
                                                </div>
                                                @error('curr_password')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="d-flex flex-column mb-2">

                                                <div class="d-flex g-2 align-items-center">
                                                    <input type="password" name="password" id="password"
                                                        class="form-control form-control-user"
                                                        placeholder="New Password:">
                                                </div>
                                                @error('password')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="d-flex flex-column mb-2">

                                                <div class="d-flex g-2 align-items-center">
                                                    <input type="password" name="password_confirmation"
                                                        id="password_confirmation"
                                                        class="form-control form-control-user"
                                                        placeholder="Confirm Password:">
                                                </div>
                                                @error('password_confirmation')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <input type="text" name="id" id="id" value="{{ $user->id }}" hidden>


                                            <div class="d-flex justify-content-center px-4 my-3">
                                                <button type="submit" name="action" value="update"
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
                </div>

            </div>
        </div>
    </div>

    <x-flash></x-flash>

</x-index-layout>
