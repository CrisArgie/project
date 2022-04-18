<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DOST Repair and ICT job Request Service</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- My styles for this template -->
    <link href="style.css" rel="stylesheet">
    {{-- <script src="script.js" defer></script> --}}

</head>
<body>
    <nav class="index-header-menu">
        <ul class="p-0 m-0 h-100 d-flex justify-content-around">
            <li class="d-flex align-items-center">
                <h3> <a> HOME </a> </h3>
            </li>
            <li class="d-flex align-items-center">
                <h3> <a> ABOUT </a> </h3>
            </li>
            <li class="d-flex align-items-center">
                <h3> <a> CONTACT </a> </h3>
            </li>
            <li class="d-flex align-items-center ">
                <h3> <a href="/sign-in.php" class="text-none text-gray-100"> SIGN IN </a> </h3>
            </li>
        </ul>
    </nav>

    {{ $slot }}

    <footer class="p-5 bg-gray-400">
        <div class="row m-0">
            <div class="col-xl-12 mb-4">
                <div class="d-flex justify-content-center">
                    <h3 class="text-dark"> Stay in touch with the service that you requested! </h4>

                </div>
            </div>
            <div class="col-xl-12 p-0">
                <div class="d-flex justify-content-center">
                    <input placeholder="Email"> 
                    <button> SUBSCRIBE </button>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>