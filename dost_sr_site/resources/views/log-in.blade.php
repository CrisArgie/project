<x-index-layout>
    <main class="min-vh-100 justify-content-center" style="background-color: var(--color1);">
        <section style="position: relative; width: 50%; height: 100vh; float: left;">
            <div class="h-100 d-flex justify-content-end">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img src="../img/DOST_log.png" alt="" style="height: 370px; width: 370px; z-index:-1;">
                    </div>
                </div>
            </div>
        </section>
        <section class="" style="position: relative; width: 50%; float: right; height: 100vh; z-index: 11">
            <div class="h-100 d-flex justify-content-start">
                <div class="d-flex align-items-center">
                    <form class="col-xl-8 col-lg-10 col-md-11 pl-0 pr-0 h-50" method="POST" enctype="multipart/form-data">
                        @csrf

                        <ul class="row p-2 pt-4 pb-4 m-0 g-2 h-100 bg-gray-200 border-radius-1 my-shadow">
                            <li class="col-xl-12 d-flex align-items-center justify-content-center">
                                <div class="w-auto m-auto">
                                    <h4 class="text-hard-black m-0">DOST CARAGA Service Request Site</h4>
                                </div>
                            </li>
                            <li class="col-xl-12 d-flex align-items-end"> 
                                {{-- <div class="row g-1">
                                    <div class="col-xl-12"> --}}
                                        <div class="m-auto">
                                            <h6 class="text-hard-black m-0"> 
                                                Don't have an account? <a href="/register" class="text-none text-4"> Sign up here </a> 
                                            </h6>
                                        </div>
                                    {{-- </div> --}}
                                    {{-- <div class="col-xl-12">
                                        <div class="d-flex justify-content-center">
                                            <button class="ctn-btn pl-2 pr-2 pt-1 pb-1"> 
                                                <div class="text-1">
                                                    Continue with Google
                                                </div> 
                                            </button>
                                        </div>
                                    </div> --}}
                                {{-- </div> --}}
                            </li>
                            <li class="col-xl-12 d-flex justify-content-center">
                                <div class="d-flex align-items-center">
                                    <span class="vertical-line-mark"> or </span>
                                </div>
                            </li>
                            <li class="col-xl-12 d-flex justify-content-center">
                                <div class="row w-100">
                                    <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center g-1">
                                        <input  type="text" 
                                                name="signinEmail" 
                                                id="signinEmail" 
                                                class="w-75 p-2 border-radius-1" 
                                                placeholder="Email" 
                                        >
                                        <div class="d-flex align-items-center g-2 w-75">
                                            <input  type="password" 
                                                    name="signinPwd" 
                                                    id="signinPwd" 
                                                    class="w-100 p-2 border-radius-1" placeholder="Password" 
                                            >
                                            <input  type="checkbox" 
                                                    id="pwdChkbox"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 d-flex justify-content-center align-items-center">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <button class="button-style-1 p-2">
                                            <div class="text-1"> Sign in </div>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
    </main>

<script>
    chkboxPasswordElement = document.getElementById('pwdChkbox');
    textPasswordElement = document.getElementById('signinPwd');

    chkboxPasswordElement.onclick = function() {
        if(chkboxPasswordElement.checked){
            textPasswordElement.setAttribute('type', 'text')
        } else {
            textPasswordElement.setAttribute('type', 'password')
        }
    }
</script>
</x-index-layout>