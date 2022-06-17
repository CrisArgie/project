<x-index-layout>

    <div class="min-vh-100 min-vw-100" style="background-color: var(--color1);">
        <div class="row mx-0 justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="d-flex justify-content-center">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <h3 class="d-flex justify-content-center my-3 text-gray-900">
                                    Verification Code?
                                </h3>

                                <p>
                                    You are one step away for changing your password! Enter the code you received in
                                    input box.
                                </p>

                                <div class="">
                                    Is this you?
                                    @if ($user->first_name != null && $user->email != null)
                                        <span class="text-gray-800">
                                            {{ $user->first_name . ' ' . $user->last_name }}
                                        </span>
                                        <div class="">
                                            <p class="text-gray-800">
                                                {{ $user->email }}
                                            </p>
                                        </div>
                                    @endif
                                </div>

                                <hr class="my-4">

                                <div class="row justify-content-center mx-0">
                                    <div class="col-xl-6 col-md-12">
                                        <form action="/auth/code" method="POST" enctype="multipart/form-data"
                                            class="user">
                                            @csrf

                                            <input type="text" name="token" id="token"
                                                class="form-control form-control-user" placeholder="Verification Code"
                                                required>
                                            @error('token')
                                                <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                            @enderror

                                            <button type="submit" class="btn btn-primary btn-user btn-block my-3">
                                                Submit
                                            </button>






                                            <input type="text" name="id" id="id" value="{{ $user->id }}" hidden>
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
