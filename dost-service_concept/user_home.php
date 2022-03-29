<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - Home</title>

    
    <!-- My styles for this template -->
    <link href="style.css" rel="stylesheet">
    <script src="script.js" defer></script>

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


</head>
<body>
<!-- Header Page  -->
    <header class="header">
<!-- Left menu buttons -->
        <div class="left-menu">
            <img class="menu-logo-item" src="img/DOST_log.png">
            <button class="menu-icon-btn" data-menu-icon-btn>
                <img class="menu-logo-item" src="icons/png-files/menu.png">
            </button>
        </div>
<!-- Right menu buttons -->
        <div class="right-menu" >
          
          <div class="dropdown" data-dropdown-menu>
            <button class="menu-profile-btn">
              <img class="menu-logo-item" src="img/undraw_profile.svg" data-dropdown-button>
            </button>
            <div class="dropdown-menu" >
              <a class="link" href="user_settings.php"><img class="link-icon" src="icons/png-files/cogs.png" alt="Settings.png"> 
                Settings
              </a> 
              <a class="link" href="">
                <img class="link-icon" src="icons/png-files/exit.png" alt="Logout.png"> 
                Logout
              </a>
            </div>

          </div>
        </div>
    </header>

<!-- Page Content Container -->
    <div class="container">
        <aside class="sidebar open" data-slider>
<!-- Sidebar top menu-->
            <div class="top-sidebar">
            <div class="sidebar-list">
                <div class="sidebar-list-item">
                <a href="user_home.php" class="sidebar-link active">
                    <img class="sidebar-icon" src="icons/png-files/home.png">
                    <div class="hidden-sidebar">Home</div>
                </a>
                </div>
            </div>
            </div>

            
            <hr class="sidebar-linebreak">
<!-- Sidebar middle menu -->
            <div class="middle-sidebar">
                <ul class="sidebar-list">

                    <li class="sidebar-list-item">
                      <a href="user_request.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/add-files.png">
                        <div class="hidden-sidebar">Request</div>
                      </a>
                    </li>
                    <li class="sidebar-list-item">
                      <a href="user_view_request.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/agenda.png">
                        <div class="hidden-sidebar">View Request</div>
                      </a>
                    </li>
                    <li class="sidebar-list-item">
                      <a href="about.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/information.png">
                        <div class="hidden-sidebar">About</div>
                      </a>
                    </li>
                    <li class="sidebar-list-item">
                      <a href="user_settings.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/cog.png">
                        <div class="hidden-sidebar">Settings</div>
                      </a>
                    </li>
                    <li class="sidebar-list-item">
                      <a href="#" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/exit.png">
                        <div class="hidden-sidebar">Logout</div>
                      </a>
                    </li>
                  </ul>
            </div>
<!-- Sidebar bottom menu -->
            <div class="bottom-sidebar">
              <ul class="sidebar-list">
                <li class="sidebar-list-item">
                  <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="icons/png-files/envelope.png">
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="icons/png-files/world.png">
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="icons/png-files/facebook-oval.png">
                  </a>
                </li>
              </ul>
            </div>
        </aside>
        <main class="content">
          <div class="content-menu">
            <div class="col-xl-12 p-0">
              <div class="main-container">
                <div class="row my-shadow my-bg-3 pt-3 pb-4 m-4">
                  <div class="col-xl-12 p-0">
                    <h2 class="col-xl-5 col-md-12 text-1 m-0 p-0 my-bg-1 pr-4 pl-4 pb-3 pt-3"> User Service Request Overview </h2>
                  </div>
                  <div class="col-xl-8 fx-200 p-0 mt-2">
                    <div class="bg-white my-shadow m-2 p-3 h-100 overflow-scroll-y">
                      <table id="example" class="display">
                        <thead>
                          <tr>
                            <th hidden>id</th>
                            <th>No.</th>
                            <th>Brand/Model</th>
                            <th>Status</th>
                            <th>Requested</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td hidden>1</td>
                            <td>09669</td>
                            <td>Dell</td>
                            <td>In-progress</td>
                            <td>1/13/2022</td>
                            <td> <button class="ctn-btn bg-primary w-100"> <div class="text-1"> View </div> </button> </td>
                          </tr>
                          <tr>
                            <td hidden>1</td>
                            <td>65488</td>
                            <td>Lenovo</td>
                            <td>In-progress</td>
                            <td>12/4/2022</td>
                            <td> <button class="ctn-btn bg-primary w-100"> <div class="text-1"> View </div> </button> </td>
                          </tr>
                          <tr>
                            <td hidden>1</td>
                            <td>65488</td>
                            <td>Lenovo</td>
                            <td>In-progress</td>
                            <td>12/4/2022</td>
                            <td> <button class="ctn-btn bg-primary w-100"> <div class="text-1"> View </div> </button> </td>
                          </tr>
                          <tr>
                            <td hidden>1</td>
                            <td>65488</td>
                            <td>Lenovo</td>
                            <td>In-progress</td>
                            <td>12/4/2022</td>
                            <td> <button class="ctn-btn bg-primary w-100"> <div class="text-1"> View </div> </button> </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-xl-4 fx-200 p-0 mt-2">
                    <ul class="d-flex flex-column bg-white my-shadow m-2 p-3 h-100">
                      <li class="d-flex align-items-center h-50">
                        <section class="w-75 text-2 f-bold"> Total of Repair Request: </section>
                        <p class="m-0 text-3 f-bold"> 5 </p>
                      </li>
                      <li class="d-flex align-items-center h-50">
                        <section class="w-75 text-2 f-bold"> Total of ICT Job Request: </section>
                        <p class="m-0 text-3 f-bold"> 9 </p>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>

              <div class="main-container">
                <div class="row my-shadow my-bg-2 pt-3 pb-4 m-4">
                  <div class="col-xl-4 col-md-12 mb-3 pr-0 pl-0">
                    <h2 class="text-1 m-0 p-0 my-bg-1 pr-4 pl-4 pb-3 pt-3"> User Interface </h2>
                  </div>
                  <div class="col-xl-12 d-flex justify-content-center align-items-center ">
                    <ul class="d-grid grid-position-1 m-0 p-0">
                      <li class="grid-1"> 
                        <a href="user_repair_request.php" class="btn-link"> 
                          Add Repair Request 
                          <img class="content-icon" src="icons/png-files/files.png"> </a> </li>
                      <li class="grid-2"> 
                        <a href="user_ict_job_request.php" class="btn-link"> 
                          Add ICT Job Request 
                          <img class="content-icon" src="icons/png-files/service.png" > </a> </li>
                      <li class="grid-3"> 
                        <a href="user_view_request.php" class="btn-link"> 
                          View Request 
                          <img class="content-icon" src="icons/png-files/agenda.png" > </a> </li>
                      <li class="grid-4"> 
                        <a href="about.php" class="btn-link"> 
                          About 
                          <img class="content-icon" src="icons/png-files/information.png"> </a> </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </main>
    </div>

    <script type="text/javascript" src="scripts/datatable-js/user-datatable-1.js"></script>

    
</body>
</html>