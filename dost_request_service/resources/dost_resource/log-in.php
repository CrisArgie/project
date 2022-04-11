<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DOST Repair and ICT job Request Service</title>

    <!-- My styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- <script src="script.js" defer></script> -->
</head>
<body style="background-color: var(--color1);">
    <main class="min-vh-100 justify-content-center">
        <section style="position: relative; width: 50%; height: 100vh; float: left;">
            <div class="h-100 d-flex justify-content-end">
                <div class="d-flex align-items-center">
                    <div class="swipe-toLeft">
                        <img src="img/DOST_log.png" alt="" style="height: 370px; width: 370px; z-index:-1;">
                    </div>
                </div>
            </div>
        </section>
        <section class="" style="position: relative; width: 50%; float: right; height: 100vh; z-index: 11">
            <div class="h-100 d-flex justify-content-start">
                <div class="d-flex align-items-center">
                    <form class="w-60 h-50" action="results.html" method="GET" enctype="multipart/form-data">
                        <ul class="row p-2 pt-4 pb-4 m-0 g-2 h-100 bg-gray-200 border-radius-1 my-shadow">
                            <li class="col-xl-12 d-flex align-items-center justify-content-center">
                                <div class="w-auto m-auto">
                                    <h3 class="m-0">DOST CARAGA Service Request Site</h3>
                                </div>
                            </li>
                            <li class="col-xl-12 d-flex align-items-end"> 
                                <div class="row g-1">
                                    <div class="col-xl-12">
                                        <div class="d-flex justify-content-center">
                                            <h5 class="f-w-normal m-0"> 
                                                Don't have an account? <a href="registration.php" class="text-none text-4"> Sign up here </a> 
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="d-flex justify-content-center">
                                            <button class="ctn-btn pl-2 pr-2 pt-1 pb-1"> 
                                                <div class="text-1">
                                                    Continue with Google
                                                </div> 
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 d-flex justify-content-center">
                                <div class="d-flex align-items-center">
                                    <span class="vertical-line-mark"> or </span>
                                </div>
                            </li>
                            <li class="col-xl-12 d-flex justify-content-center">
                                <div class="row w-100">
                                    <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center g-1">
                                        <label for="signinEmail" hidden>Email: </label>
                                        <input type="text" name="signinEmail" id="signinEmail" class="w-80 p-2" placeholder="Email" required>
                                        <label for="signinPwd" hidden>Password: </label>
                                        <div class="d-flex align-items-center w-80">
                                            <input type="password" name="signinPwd" id="signinPwd" class="w-100 p-2" placeholder="Password" required>
                                            <input type="checkbox" id="pwdChkbox">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 d-flex justify-content-center align-items-center">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <button class="ctn-btn p-2">
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
const inputPwd = document.getElementById('signinPwd')
const inputChkbox = document.getElementById('pwdChkbox')

inputChkbox.onclick = function (){
    if(inputChkbox.checked){
        inputPwd.setAttribute('type', 'text')
    } else {
        inputPwd.setAttribute('type', 'password')
    }
}
</script>

</body>
</html>