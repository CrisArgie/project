<x-index-layout>

    <!-- Custom styles for this template-->
    {{-- <link href="/css/sb-admin-2.min.css" rel="stylesheet"> --}}

    <div class="min-vh-100 min-vw-100" style="background-color: var(--color1);">
        <!-- Outer Row -->
        <div class="row mx-0 justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="d-flex justify-content-center">
                    <div class="card o-hidden border-0 shadow-lg my-5" style="width: 40%;">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 my-2">Forgot Your Password?</h1>
                                    <p class="mb-5">Enter your email address below and check your mail you
                                        should receive a link to reset your password!</p>

                                </div>
                                <form action="/auth/login" method="POST" enctype="multipart/form-data"
                                    class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        @error('email')
                                            <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                                <hr class="my-5">
                                <div class="text-center">
                                    <a class="small" href="/register">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="/login">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-flash></x-flash>
    <!-- Bootstrap core JavaScript-->
    {{-- <script src="/vendor/jquery/jquery.min.js"></script> --}}
    {{-- <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Core plugin JavaScript-->
    {{-- <script src="/vendor/jquery-easing/jquery.easing.min.js"></script> --}}

    <!-- Custom scripts for all pages-->
    {{-- <script src="/js/sb-admin-2.min.js"></script> --}}
</x-index-layout>
