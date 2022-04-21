<x-index-layout>
    <main class="min-vh-100" style="background-color: var(--color1);">
        <div class="min-vh-100 d-flex justify-content-center">
            <div class="w-100 d-flex justify-content-center align-items-center">
                <div class="p-4 bg-gray-100 border-radius-1 my-shadow" style="width: 490px; height: auto;">
                    <div class="row g-2 mb-2">
                        <div class="col-xl-12">
                            <a href="/" class="d-flex justify-content-center">
                                <img src="img/DOST_log.png" alt="" style="height: 24px; width: 24px;">
                            </a>
                        </div>
                        <div class="col-xl-12">
                            <h3 class="text-hard-black mt-3 p-0"> Create your Account </h3>
                        </div>
                    </div>
                    <form class="row" method="POST" enctype="multipart/form-data">
                        @csrf

                        <ul class="row g-3 m-0 p-0">
                            <li class="col-xl-12">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex flex-column w-100">
                                        <label class="text-hard-black"> Name: </label>
                                        <div class="d-flex g-1">
                                            <label for="registrationFname" hidden></label>
                                            <input type="text" name="registrationFname" id="registrationFname" class="border-radius-1 w-100 p-2 text-capitalize" placeholder="First Name">
                                            <label for="registrationLname" hidden></label>
                                            <input type="text" name="registrationLname" id="registrationLname" class="border-radius-1 w-100 p-2 text-capitalize" placeholder="Last Name" >
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex flex-column w-100">
                                        <label class="text-hard-black" for="reqistrationEmail"> Email: </label>
                                        <input type="text" name="reqistrationEmail" id="reqistrationEmail" class="border-radius-1 w-100 p-2" >
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex flex-column g-1 w-100">
                                        <label class="text-hard-black"> Password: </label>
                                        <div class="d-flex align-items-center g-2">
                                            <input type="password" id="registrationPass" class="border-radius-1 w-100 p-2" >
                                            <input type="checkbox" id="chkBoxp1">
                                        </div>
                                        <label class="text-hard-black" for="password"> Re-enter Password: </label>
                                        <div class="d-flex align-items-center g-2">
                                            <input type="password" name="registrationRepass" id="registrationRepass" class="border-radius-1 w-100 p-2" >
                                            <input type="checkbox" id="chkBoxp2">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12">
                                <div class="d-flex justify-content-center mt-2 mb-2">
                                    <span style="font-size: 10px;">By clicking Sign up. You agree to our <a href=""> Terms and Conditions </a> that you have read our policy. </span>
                                </div>
                            </li>
                            <li class="col-xl-12">
                                <div class="d-flex justify-content-center mt-2 mb-2">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button type="submit" class="button-style-1 p-2">
                                                <div class="text-1"> Sign up </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </form>
                </div>
            </div>    
        </div>
    </main>
</x-index-layout>