<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - Dashboard</title>

    
    <!-- My styles for this template -->
    <link href="../style.css" rel="stylesheet">
    <script src="../script.js" defer></script>

    <!-- High Charts style -->
    <link rel="stylesheet" type="text/css" href="../css/chart.css">
    <!-- High Charts scripts -->
    <script src="../charts/highcharts.js"></script>
    <script src="../charts/modules/exporting.js"></script>
    <script src="../charts/modules/export-data.js"></script>
    <script src="../charts/modules/accessibility.js"></script>

</head>
<body>
<!-- Header Page  -->
    <header class="header">
<!-- Left menu buttons -->
        <div class="left-menu">
            <img class="menu-logo-item" src="../img/DOST_log.png">
        </div>
<!-- Right menu buttons -->
        <div class="right-menu" >
          
          <div class="dropdown" data-dropdown-menu>
            <button class="menu-profile-btn">
              <img class="menu-logo-item" src="../img/undraw_profile.svg" data-dropdown-button>
            </button>
            <div class="dropdown-menu" >
              <a class="link" href=""><img class="link-icon" src="../icons/png-files/cogs.png" alt="Settings.png"> 
                Settings
              </a> 
              <a class="link" href="">
                <img class="link-icon" src="../icons/png-files/exit.png" alt="Logout.png"> 
                Logout
              </a>
            </div>

          </div>
        </div>
    </header>

<!-- Page Content Container -->
    <div class="container">
        <aside class="sidebar" data-slider>
<!-- Sidebar top menu-->
            <div class="admin-top-sidebar">
                <div class="sidebar-list">
                    <button class="menu-icon-btn" data-menu-icon-btn>
                        <img class="menu-logo-item" src="../icons/png-files/chevron-left.png">
                    </button>
                </div>
            <hr class="sidebar-linebreak">
                <div class="sidebar-list">
                    <div class="sidebar-list-item">
                        <a href="tech_dashboard.php" class="sidebar-link active">
                            <img class="sidebar-icon" src="../icons/png-files/archive.png">
                            <div class="hidden-sidebar">Dashboard</div>
                        </a>
                    </div>
                </div>
            </div>            
            <hr class="sidebar-linebreak">
<!-- Sidebar middle menu -->
            <div class="middle-sidebar">
                <ul class="sidebar-list">
                    <li class="sidebar-list-item">
                        <a href="tech_users.php" class="sidebar-link">
                        <img class="sidebar-icon" src="../icons/png-files/users.png">
                        <div class="hidden-sidebar">Users</div>
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="tech_request.php" class="sidebar-link">
                        <img class="sidebar-icon" src="../icons/png-files/add-files.png">
                        <div class="hidden-sidebar">Requests</div>
                        </a>
                    </li>
                </ul>
            </div>
<!-- Sidebar bottom menu -->
            <div class="bottom-sidebar">
            <hr class="sidebar-linebreak">
              <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="../about.php" class="sidebar-link-top">
                    <img class="sidebar-icon" src="../icons/png-files/information.png">
                    <div class="hidden-sidebar">About</div>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#" class="sidebar-link-top">
                    <img class="sidebar-icon" src="../icons/png-files/cog.png">
                    <div class="hidden-sidebar">Settings</div>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#" class="sidebar-link-top">
                    <img class="sidebar-icon" src="../icons/png-files/exit.png">
                    <div class="hidden-sidebar">Logout</div>
                    </a>
                </li>
              </ul>
            <hr class="sidebar-linebreak">
              <ul class="sidebar-list">
                <li class="sidebar-list-item">
                  <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="../icons/png-files/envelope.png">
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="../icons/png-files/world.png">
                  </a>
                </li>
                <li class="sidebar-list-item">
                  <a href="#" class="sidebar-link">
                    <img class="sidebar-icon" src="../icons/png-files/facebook-oval.png">
                  </a>
                </li>
              </ul>
            </div>
        </aside>
        <main class="content">
            <div class="content-menu flex-column">
                <div class="main-container ">
                    <div class="row">
                        <div class="col-xl-12 mb-1"> <h2 class="pr-2 pl-2"> Primary Monitoring </h2> </div>
                        <div class="col-xl-2 p-0 d-flex flex-column"> 
                            <div class="admin-left-border-b my-shadow bg-gray-100 m-2 h-100"> 
                                <h3 class="m-0 pl-2 pt-1 pr-2 pb-0"> In-progress: </h3> 
                                <div class="d-flex align-items-center justify-content-between m-2">
                                    <img class="admin-icon-1" src="../icons/png-files/pencil-alt.png">
                                    <p class="text-3 m-0 mr-2"> 4 </p>
                                </div>
                            </div>
                            <div class="admin-left-border-o my-shadow bg-gray-100 m-2 h-100">  
                                <h3 class="m-0 pl-2 pt-1 pr-2 pb-0"> Pending Request: </h3>
                                <div class="d-flex align-items-center justify-content-between m-2">
                                    <img class="admin-icon-1" src="../icons/png-files/bubble.png">
                                    <p class="text-3 m-0 mr-2"> 0 </p>    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 p-0 m-0"> 
                            <div class="admin-left-border-b overflow-auto-x d-flex m-2 my-shadow bg-gray-100">
                                <div class="d-flex flex-column align-items-center justify-content-between">
                                    <h4 class="pl-2 pt-3 pr-2 m-0 pb-0"> Total number of request by reports per year </h4>
                                    <img class="admin-icon-1 mb-5" src="../icons/png-files/bar-chart.png">
                                </div>
                                <div class="w-100"> 
                                    <figure class="highcharts-figure">
                                        <div id="bar-chart-request-per-reports" class="overflow-auto-x"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-container mt-4 ">
                    <div class="row my-shadow bg-gray-100 pb-3 pt-3">
                        <div class="col-xl-12 mb-3 mt-2"> <h2 class="pr-2 pl-2"> User and Request Monitoring </h2> </div>
                        <div class="col-xl-6 mb-2">
                            <div class="h-100 p-2 my-shadow admin-bg-1 border-radius-1">
                                <h4 class="mt-2 mb-5"> Total number of request by status per month </h4>
                                <ul class="row p-0 mr-4 ml-4 pl-3 pr-3"> 
                                    <li class="col-xl-6 mb-3 d-flex align-items-center"> 
                                        <img class="admin-icon-2" src="../icons/png-files/checkmark-circle.png">
                                        <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                            Completed: 
                                            <p class="m-0 "> 5 </p> 
                                        </label>
                                    </li>
                                    <li class="col-xl-6 mb-3 d-flex align-items-center">
                                        <img class="admin-icon-2" src="../icons/png-files/checkmark-circle.png">
                                        <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                            Assigned: 
                                            <p class="m-0 "> 5 </p> 
                                        </label>
                                    </li>
                                    <li class="col-xl-6 mb-3 d-flex align-items-center">
                                        <img class="admin-icon-2" src="../icons/png-files/archive.png">
                                        <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                            In-progress: 
                                            <p class="m-0 "> 5 </p> 
                                        </label>
                                    </li>
                                    <li class="col-xl-6 mb-3 d-flex align-items-center">
                                        <img class="admin-icon-2" src="../icons/png-files/archive.png">
                                        <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                            Pending: 
                                            <p class="m-0 "> 5 </p> 
                                        </label>
                                    </li>
                                    <li class="col-xl-6 mb-3 d-flex align-items-center">
                                        <img class="admin-icon-2" src="../icons/png-files/question-circle.png">
                                        <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                            New: 
                                            <p class="m-0 "> 5 </p>
                                        </label>
                                    </li>
                                </ul>
                            </div> </div>
                        <div class="col-xl-6 mb-2">
                            <div class=" row overflow-auto-y admin-bottom-h-1 p-2 my-shadow admin-bg-1 border-radius-1 ">
                                <h4 class="col-xl-12 mt-2 "> Total number of user by division per month </h4>
                                <div class="col-xl-4 mt-4 pt-1">
                                    <ul class="p-0 pl-3">
                                        <li class="mb-3 d-flex align-items-center"> 
                                            <img class="admin-icon-2" src="../icons/png-files/checkmark-circle.png">
                                            <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                                Completed: 
                                                <p class="m-0"> 0 </p>
                                            </label>
                                        </li>
                                        <li class="mb-3 d-flex align-items-center"> 
                                            <img class="admin-icon-2" src="../icons/png-files/archive.png">
                                            <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                                Pending: 
                                                <p class="m-0"> 2 </p>
                                            </label> 
                                        </li>
                                        <li class="mb-3 d-flex align-items-center"> 
                                            <img class="admin-icon-2" src="../icons/png-files/question-circle.png">
                                            <label class="text-2 f-bold pl-2 d-flex justify-content-between w-100"> 
                                                Request:
                                                <p class="m-0 ml-4"> 9 </p>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-8">
                                    <div class="overflow-auto-x d-flex">
                                        <figure class="highcharts-figure-pie m-0 ">
                                            <div id="pie-chart-legend" class="admin-pie-1 overflow-auto-x"></div>
                                        </figure>
                                    </div>
                                </div>
                            </div> </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

<script type="text/javascript" src="../scripts/chart-js/charts.js"></script>
    
</body>
</html>