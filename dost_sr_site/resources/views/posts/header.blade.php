<nav class="position-fixed d-inline-block" style="z-index: 9999">
    <nav class="navbar vw-100 navbar-expand navbar-light topbar static-top"
        style="background-color: var(--color2); box-shadow: 0 1px 10px 0 rgb(0 0 0 / 40%);">
        <!-- Sidebar Toggle (Topbar) -->
        {{-- <img class="menu-logo-item" src="../img/DOST_log.png"> --}}
        <a class="sidebar-brand d-flex align-items-center justify-content-center text-decoration-none" href="/dashboard">
            <div class="sidebar-brand-icon mx-3">
                <img class="" src="/img/DOST_log.png" style="width: 24px; height: 24px;">
            </div>
            <div class="text-white" style=""> DOST CARAGA </div>
        </a>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow" x-data="{ open: false }">
                {{-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                <button class="nav-link bg-color-transparent border-none" type="button" x-on:click="open = ! open"">
                    <span class="  mr-2 d-none d-lg-inline text-white">Welcome,
                    {{ auth()->user()->first_name }}</span>
                    <span id="lastName" hidden>{{ auth()->user()->last_name }}</span>

                    {{-- <span class="mr-2 d-none d-lg-inline text-white small">Welcome, FIRST_NAME</span> --}}

                    <span id="profileLastName" class="img-profile rounded-circle initial-profile"></span>

                    {{-- <img class="img-profile rounded-circle"
                        src="../img/undraw_profile.svg"> --}}
                </button>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in display-block" x-cloak
                    x-show="open">

                    <a class="dropdown-item" href="/profile">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>

                    {{-- <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a> --}}
                    {{-- <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a> --}}

                    <form method="POST" action="/logout" class="">
                        @csrf

                        <button type="submit" class="dropdown-item button-style-2">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Log out
                        </button>
                    </form>
                </div>
            </li>
        </ul>

    </nav>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <script>
        var lastNameElement = document.getElementById('lastName').innerHTML
        var initialElement = lastNameElement.charAt(0)
        document.getElementById('profileLastName').innerHTML = initialElement
    </script>

</nav>
