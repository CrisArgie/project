<x-index-layout>
    <div class="min-vh-100 min-vw-100" style="background-color: var(--color1);">
        
        <div class="container justify-content-center m-auto">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 bg-gray-200 d-flex justify-content-center align-items-center">
                                    <a href="/">
                                        <img src="../img/DOST_log.png" alt="" style="height: 370px; width: 370px">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <h1 class="h4 text-gray-900">Welcome to DOST CARAGA Service Request Site!</h1>
                                        </div>
                                        <form   class="user"
                                                method="POST" 
                                                action="/sessions"
                                                enctype="multipart/form-data"
                                        >
                                            @csrf
                                            <div class="form-group">
                                                <input  type="email" 
                                                        id="email"
                                                        name="email"
                                                        value="{{ old('email') }}"
                                                        class="form-control"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Enter Email Address..."
                                                >
                                                @error('email')
                                                    <p class="mb-0 text-danger text-xs">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex align-items-center g-1">
                                                    <input  type="password" 
                                                            id="password"
                                                            name="password" 
                                                            class="form-control"
                                                            placeholder="Password"
                                                    >
                                                    <input  type="checkbox" 
                                                            id="pwdChkbox"
                                                    >
                                                </div>
                                            </div>
                                            <button type="submit" class="mt-5 btn btn-primary btn-user btn-block">
                                                Sign in
                                            </button>
                                            {{-- <hr>
                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                            </a> --}}
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="#">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <span class="small"> Don't have an account? </span> <a class="small" href="/register"> Sign up here! </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        chkboxPasswordElement = document.getElementById('pwdChkbox');
        textPasswordElement = document.getElementById('password');
    
        chkboxPasswordElement.onclick = function() {
            if(chkboxPasswordElement.checked){
                textPasswordElement.setAttribute('type', 'text')
            } else {
                textPasswordElement.setAttribute('type', 'password')
            }
        }
    </script>
</x-index-layout>