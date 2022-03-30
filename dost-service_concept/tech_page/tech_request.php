<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - Request</title>

    <!-- My styles for this template -->
    <link href="../style.css" rel="stylesheet">
    <script src="../script.js" defer></script>

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- High Charts style -->
    <link rel="stylesheet" type="text/css" href="../css/chart.css">
    <!-- High Charts scripts -->
    <script src="../charts/highcharts.js"></script>
    <script src="../charts/modules/exporting.js"></script>
    <script src="../charts/modules/export-data.js"></script>
    <script src="../charts/modules/accessibility.js"></script>
    <script src="../charts/modules/data.js"></script>
    <script src="../charts/modules/drilldown.js"></script>


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
        <aside class="sidebar open" data-slider>
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
                        <a href="tech_dashboard.php" class="sidebar-link ">
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
                        <a href="tech_request.php" class="sidebar-link active">
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
                    <a href="tech_about.php" class="sidebar-link-top">
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
                <div class="col-xl-12 mb-3 mt-3"> <h2> Request Monitoring </h2> </div>
                <div class="col-xl-2 col-md-12 align-items-center mt-2 mb-3 g-1 p-0">
                  <div class="row">
                    <div class="p-0 col-xl-12 col-md-6 col-sm-4 d-flex justify-content-center">
                      <a href="tech_add_repair_request.php" class="wf-1 ctn-btn d-flex justify-content-center mb-2"> 
                        <div class="text-1"> + Repair Request </div>
                      </a>
                    </div>
                    <div class="p-0 col-xl-12 col-md-6 col-sm-4 d-flex justify-content-center">
                      <a href="tech_add_ict_job.php" class="wf-1 ctn-btn d-flex justify-content-center mb-2"> 
                        <div class="text-1"> + ICT job Request </div>
                      </a>
                    </div>
                    <div class="p-0 col-xl-12 col-md-6 col-sm-4 d-flex justify-content-center">
                      <button class="wf-1 ctn-btn mb-2"> 
                        <div class="text-1"> Generate Report </div> 
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-10 p-0 mb-3">
                  <div class="row pt-2 pl-2 pb-2 pr-0">
                    <div class="col-xl-4 p-0  ">
                      <div class=" ml-1 mb-2 p-2 my-shadow overflow-auto">
                        <h5 class="m-0 p-0"> Total number of Brand per year </h5>
                        <figure class="highcharts-figure-pie mt-0 mb-0 m-0">
                            <div id="pie-chart" class="admin-pie-2"></div>
                        </figure>
                      </div>
                    </div>
                    <div class="col-xl-8 p-0">
                      <div class=" ml-1 mb-2 p-2 my-shadow overflow-auto">
                        <h5 class="m-0 p-0"> Recent request per month, last 6 months </h5>
                        <figure class="highcharts-figure-bar">
                            <div id="bar-chart-2" class="admin-pie-2"></div>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-container">
              <ul class="row bg-gray-200 border-radius-1 p-2 m-0 pt-3 pb-3">
                <li class="col-xl-3 col-md-6 p-0">
                  <div class="d-flex justify-content-center mt-2 mb-2">
                    <a href="tech_accept_repair_request.php" class="pt-2 pb-2 pl-0 pr-0 wf-2 ctn-btn d-flex justify-content-center "> 
                        <div class="text-1"> Repair Request </div>
                      </a>
                  </div>
                </li>
                <li class="col-xl-3 col-md-6 p-0">
                  <div class="d-flex justify-content-center mt-2 mb-2"> 
                    <a href="tech_ict_job_request.php" class="pt-2 pb-2 pl-0 pr-0 wf-2 ctn-btn d-flex justify-content-center "> 
                        <div class="text-1"> ICT job Request </div>
                      </a>
                  </div>
                </li>
                <li class="col-xl-3 col-md-6 p-0">
                  <div class="d-flex justify-content-center mt-2 mb-2">
                    <a href="tech_pre_repair.php" class="pt-2 pb-2 pl-0 pr-0 wf-2 ctn-btn d-flex justify-content-center "> 
                        <div class="text-1"> Pre-repair Request </div>
                      </a>
                  </div>
                </li>
                <li class="col-xl-3 col-md-6 p-0">
                  <div class="d-flex justify-content-center mt-2 mb-2">
                    <a href="tech_post_repair.php" class="pt-2 pb-2 pl-0 pr-0 wf-2 ctn-btn d-flex justify-content-center "> 
                        <div class="text-1"> Post Repair Request </div>
                      </a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="main-container">
              <div class="row justify-content-center mt-4 mb-4 border-radius-1">
                <div class="col-xl-12 overflow-auto my-shadow pt-3 pb-3 pr-2 pl-2">
                  <div class="row justify-content-between p-0 mb-4">
                    <div class="col-xl-6 p-0 m-0 col-md-12"> 
                      <h4 class="m-0 p-2 "> Repair Request data table </h4>  
                    </div>
                    <div class="col-xl-4 col-md-12 p-0 m-0 d-flex justify-content-end">
                      <div class="col-md-6 col-xl-4">
                        <button class="p-2 w-100 ctn-btn"> <div class="text-1"> Delete </div> </button>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <a class="p-2 ctn-btn d-flex justify-content-center"> <div class="text-1"> Edit </div>  </a>
                      </div>
                    </div>
                  </div>
                  <table id="example" class="display">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No.</th>
                            <th>Brand Model</th>
                            <th>Status</th>
                            <th>Property No.</th>
                            <th>Serial No.</th>
                            <th>Date Requested</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 1 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 2 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 3 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 4 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 5 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 6 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 7 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 8 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 9 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 10 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 11 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 12 </td>
                            <td> Dell </td>
                            <td> Pending </td>
                            <td> 5423234 </td>
                            <td> 7830982DSW24 </td>
                            <td> 3-29-2022 </td>
                        </tr>
                    </tbody>
                  </table>  
                </div>
              </div>
            </div>
            <div class="main-container">
              <div class="row justify-content-center mt-4 mb-4 border-radius-1">
                
                <div class="col-xl-12 overflow-auto my-shadow pt-3 pb-3 pr-2 pl-2">
                  <div class="row justify-content-between p-0 mb-4">
                    <div class="col-xl-6 p-0 m-0 col-md-12"> 
                      <h4 class="m-0 p-2 "> ICT job request data table </h4>  
                    </div>
                    <div class="col-xl-4 col-md-12 p-0 m-0 d-flex justify-content-end">
                      <div class="col-md-6 col-xl-4">
                        <button class="p-2 w-100 ctn-btn"> <div class="text-1"> Delete </div> </button>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <a class="p-2 ctn-btn d-flex justify-content-center"> <div class="text-1"> Edit </div>  </a>
                      </div>
                    </div>
                  </div>
                  <table id="example" class="display">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No.</th>
                            <th>Repair Shop</th>
                            <th>Status</th>
                            <th>Property No.</th>
                            <th>Brand Model</th>
                            <th>Type of Request</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 1 </td>
                            <td> Datalink Shop </td>
                            <td> In-progress </td>
                            <td> 7925492 </td>
                            <td> Lenovo Intel 3 </td>
                            <td> Upgrade </td>
                        </tr>
                    </tbody>
                  </table>  
                </div>
              </div>
            </div>
            <div class="main-container">
              <div class="row justify-content-center mt-4 mb-4 border-radius-1">
                
                <div class="col-xl-12 overflow-auto my-shadow pt-3 pb-3 pr-2 pl-2">
                  <div class="row justify-content-between p-0 mb-4">
                    <div class="col-xl-6 p-0 m-0 col-md-12"> 
                      <h4 class="m-0 p-2 "> Pre-Repair Request data table </h4>  
                    </div>
                    <div class="col-xl-4 col-md-12 p-0 m-0 d-flex justify-content-end">
                      <div class="col-md-6 col-xl-4">
                        <button class="p-2 w-100 ctn-btn"> <div class="text-1"> Delete </div> </button>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <a class="p-2 ctn-btn d-flex justify-content-center"> <div class="text-1"> Edit </div>  </a>
                      </div>
                    </div>
                  </div>
                  <table id="example" class="display">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No.</th>
                            <th>Brand Model</th>
                            <th>Status</th>
                            <th>Date Requested</th>
                            <th>Date of Latest Repair</th>
                            <th>Mature of Latest Repair</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 1 </td>
                            <td> Acer Intel 3 </td>
                            <td> Pending </td>
                            <td> 3-29-2022 </td>
                            <td> 3-31-2022 </td>
                            <td>  </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 2 </td>
                            <td> Dell Intel 5 </td>
                            <td> Pending </td>
                            <td> 3-30-2022 </td>
                            <td>  </td>
                            <td>  </td>
                        </tr>
                    </tbody>
                  </table>  
                </div>
              </div>
            </div>
            <div class="main-container">
              <div class="row justify-content-center mt-4 mb-4 border-radius-1">
                
                <div class="col-xl-12 overflow-auto my-shadow pt-3 pb-3 pr-2 pl-2">
                  <div class="row justify-content-between p-0 mb-4">
                    <div class="col-xl-6 p-0 m-0 col-md-12"> 
                      <h4 class="m-0 p-2 "> Post Repair Request data table </h4>  
                    </div>
                    <div class="col-xl-4 col-md-12 p-0 m-0 d-flex justify-content-end">
                      <div class="col-md-6 col-xl-4">
                        <button class="p-2 w-100 ctn-btn"> <div class="text-1"> Delete </div> </button>
                      </div>
                      <div class="col-md-6 col-xl-4">
                        <a class="p-2 ctn-btn d-flex justify-content-center"> <div class="text-1"> Edit </div>  </a>
                      </div>
                    </div>
                  </div>
                  <table id="example" class="display">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No.</th>
                            <th>Repair Shop</th>
                            <th>Status</th>
                            <th>Job Order</th>
                            <th>Invoice No.</th>
                            <th>Amt/J.O./P.O. No.:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 1 </td>
                            <td> DataThreads Shop </td>
                            <td> In-progress </td>
                            <td> 352NK5323V2 </td>
                            <td> 22413623 </td>
                            <td> 3OJBIAC924225JN2 </td>
                        </tr>
                    </tbody>
                  </table>  
                </div>
              </div>
            </div>
          </div>
        </main>
    </div>



<script type="text/javascript" src="../scripts/chart-js/charts-2.js"></script>
<script type="text/javascript" src="../scripts/datatable-js/admin-datatable-1.js"></script>

</body>
</html>