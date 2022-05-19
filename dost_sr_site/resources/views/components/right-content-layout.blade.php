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
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- My styles for this template -->
    <link href="/style.css" rel="stylesheet">
    {{-- <script src="script.js" defer></script> --}}

    {{-- Alpine js --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- High Charts style -->
    {{-- <link rel="stylesheet" type="text/css" href="css/chart.css"> --}}

    <!-- Datatable -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- High Charts scripts -->
    <script src="/charts/highcharts.js"></script>
    <script src="/charts/modules/exporting.js"></script>
    <script src="/charts/modules/export-data.js"></script>
    <script src="/charts/modules/accessibility.js"></script>

</head>

<body>

    {{ $slot }}

    <x-loading></x-loading>

    {{-- SCRIPTS --}}
    <script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
    <script>
        const menuIconButton = document.querySelector("[data-menu-icon-btn]")
        const sidebar = document.querySelector("[data-slider]")


        menuIconButton.addEventListener("click", () => {
            sidebar.classList.toggle("open")
        })

        document.addEventListener("click", e => {
            const isDropdownButton = e.target.matches("[data-dropdown-button]")
            if (!isDropdownButton && e.target.closest("[data-dropdown-menu]") != null) return

            let currentDropdown
            if (isDropdownButton) {
                currentDropdown = e.target.closest("[data-dropdown-menu]")
                currentDropdown.classList.toggle("active")
            }

            document.querySelectorAll("[data-dropdown-menu].active").forEach(dropdown => {
                if (dropdown === currentDropdown) return
                dropdown.classList.remove("active")
            })
        })
    </script>

    {{-- <script type="text/javascript" src="scripts/chart-js/charts.js"></script> --}}
</body>

</html>
