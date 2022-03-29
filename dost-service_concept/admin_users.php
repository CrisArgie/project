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

    <!-- High Charts style -->
    <link rel="stylesheet" type="text/css" href="css/chart.css">
    <!-- High Charts scripts -->
    <script src="charts/highcharts.js"></script>
    <script src="charts/modules/exporting.js"></script>
    <script src="charts/modules/export-data.js"></script>
    <script src="charts/modules/accessibility.js"></script>

</head>
<body>
<!-- Header Page  -->
    <header class="header">
<!-- Left menu buttons -->
        <div class="left-menu">
            <img class="menu-logo-item" src="img/DOST_log.png">
        </div>
<!-- Right menu buttons -->
        <div class="right-menu" >
          
          <div class="dropdown" data-dropdown-menu>
            <button class="menu-profile-btn">
              <img class="menu-logo-item" src="img/undraw_profile.svg" data-dropdown-button>
            </button>
            <div class="dropdown-menu" >
              <a class="link" href=""><img class="link-icon" src="icons/png-files/cogs.png" alt="Settings.png"> 
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
            <div class="admin-top-sidebar">
                <div class="sidebar-list">
                    <button class="menu-icon-btn" data-menu-icon-btn>
                        <img class="menu-logo-item" src="icons/png-files/chevron-left.png">
                    </button>
                </div>
            <hr class="sidebar-linebreak">
                <div class="sidebar-list">
                    <div class="sidebar-list-item">
                        <a href="admin_dashboard.php" class="sidebar-link">
                            <img class="sidebar-icon" src="icons/png-files/archive.png">
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
                        <a href="admin_users.php" class="sidebar-link active">
                        <img class="sidebar-icon" src="icons/png-files/users.png">
                        <div class="hidden-sidebar">Users</div>
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="admin_request.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/add-files.png">
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
                    <a href="admin-about.php" class="sidebar-link-top">
                    <img class="sidebar-icon" src="icons/png-files/information.png">
                    <div class="hidden-sidebar">About</div>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#" class="sidebar-link-top">
                    <img class="sidebar-icon" src="icons/png-files/cog.png">
                    <div class="hidden-sidebar">Settings</div>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#" class="sidebar-link-top">
                    <img class="sidebar-icon" src="icons/png-files/exit.png">
                    <div class="hidden-sidebar">Logout</div>
                    </a>
                </li>
              </ul>
            <hr class="sidebar-linebreak">
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
          <div class="content-menu flex-column">
            <div class="main-container">
              <div class="row">
                <div class="col-xl-12 mb-3 mt-3"> <h2> Users Monitoring </h2> </div>
                <div class="col-xl-2 col-md-12 align-items-center mt-2 mb-3 g-1 p-0">
                  <div class="row">
                    <div class="p-0 col-xl-12 col-md-4 col-sm-4 d-flex justify-content-center">
                      <button class="wf-1 ctn-btn mb-2"> 
                        <div class="text-1"> Generate Report </div>
                      </button>
                    </div>
                    <div class="p-0 col-xl-12 col-md-4 col-sm-4 d-flex justify-content-center">
                      <a href="#technician" class="wf-1 ctn-btn d-flex justify-content-center mb-2"> 
                        <div class="text-1"> Add Technician </div> 
                      </a>
                    </div>
                    <div class="p-0 col-xl-12 col-md-4 col-sm-4 d-flex justify-content-center">
                      <a href="#user" class="wf-1 ctn-btn d-flex justify-content-center mb-2"> 
                        <div class="text-1"> Add User </div> 
                      </a>  
                    </div>
                  </div>
                </div>
                <div class="col-xl-10 p-0 mb-3">
                  <div class="row border-radius-1 my-shadow p-2">
                    <div class="col-xl-3 col-md-12 p-0  flex-column">
                      <h4 class="p-0 mt-2 mb-3"> Total of user per division </h4>
                      <ul class="row p-0 overflow-auto-y">
                        <li class="d-flex g-1 col-xl-6 col-md-6 f-bold p-0 mb-1">
                          <label> 
                            Division 1:
                          </label>
                          <p class="mb-0"> 1 </p>
                        </li>
                        <li class="d-flex g-1 col-xl-6 col-md-6 f-bold p-0 mb-1">
                          <label> 
                            Division 2: 
                          </label>
                          <p class="mb-0"> 186 </p>
                        </li>
                        <li class="d-flex g-1 col-xl-6 col-md-6 f-bold p-0 mb-1">
                          <label> 
                            Division 3: 
                          </label>
                          <p class="mb-0"> 163 </p>
                        </li>
                        <li class="d-flex g-1 col-xl-6 col-md-6 f-bold p-0 mb-1">
                          <label> 
                            Division 4: 
                          </label>
                          <p class="mb-0"> 15 </p>
                        </li>
                        <li class="d-flex g-1 col-xl-6 col-md-6 f-bold p-0 mb-1">
                          <label> 
                            Division 5: 
                          </label>
                          <p class="mb-0"> 12 </p>
                        </li>
                        <li class="d-flex g-1 col-xl-6 col-md-6 f-bold p-0 mb-1">
                          <label> 
                            Division 6: 
                          </label>
                          <p class="mb-0"> 0 </p>
                        </li>
                      </ul>
                    </div>
                    <figure class="col-xl-9 col-md-12 overflow-auto p-0 highcharts-figure-bar ml-0 mr-0">
                      <div id="admin-bar-per-users" class="admin-bar-1"></div>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-container">
              <div class="row justify-content-center mt-4 mb-4 border-radius-1">
                
                <div class="col-xl-12 overflow-auto my-shadow pt-3 pb-3 pr-2 pl-2">
                  <div class="row justify-content-between p-0 mb-4">
                    <div class="col-xl-6 p-0 m-0 col-md-12"> 
                      <h4 class="m-0 p-2 "> User data table </h4>  
                    </div>
                    <div class="col-xl-4 col-md-12 p-0 m-0 d-flex justify-content-end">
                      <div class="col-md-4 col-xl-3">
                        <button class="p-2 w-100 ctn-btn"> <div class="text-1"> Delete </div> </button>
                      </div>
                      <div class="col-md-4 col-xl-3">
                        <a class="p-2 ctn-btn d-flex justify-content-center"> <div class="text-1"> Edit </div>  </a>
                      </div>
                      <div class="col-md-4 col-xl-6">
                        <a class="p-2 ctn-btn d-flex justify-content-center"> <div class="text-1"> View Details </div> </a>
                      </div>
                    </div>
                  </div>
                  <table id="example" class="display">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No.</th>
                            <th>Name</th>
                            <th>User type</th>
                            <th>Division</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 1 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 5 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 2 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 3 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 3 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 2 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 4 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 1 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 5 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 3 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 6 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 4 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 7 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 6 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 8 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 6 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 9 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 2 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 10 </td>
                            <td> Mary Grace </td>
                            <td> Technician </td>
                            <td> 3 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 11 </td>
                            <td> Mary Grace </td>
                            <td> Employee </td>
                            <td> 4 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"> </td>
                            <td> 12 </td>
                            <td> Mary Grace </td>
                            <td> Employee </td>
                            <td> 5 </td>
                            <td> marygrace@gmail.com </td>
                            <td> Brgy. 1 Cabadbaran City, Agusan Del Norte </td>
                        </tr>
                    </tbody>
                  </table>  
                </div>
                
              </div>
            </div>
          </div>
        </main>
    </div>



<script type="text/javascript" src="scripts/chart-js/charts-1.js"></script>
<script type="text/javascript" src="scripts/datatable-js/admin-datatable-2.js"></script>

</body>
</html>