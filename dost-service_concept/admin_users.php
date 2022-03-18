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
        <aside class="sidebar" data-slider>
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
                    <a href="about.php" class="sidebar-link-top">
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
                      <button class="wf-1 ctn-btn mb-2"> 
                        <div class="text-1"> Add Technician </div> 
                      </button>
                    </div>
                    <div class="p-0 col-xl-12 col-md-4 col-sm-4 d-flex justify-content-center">
                      <button class="wf-1 ctn-btn mb-2"> 
                        <div class="text-1"> Add User </div> 
                      </button>  
                    </div>
                  </div>
                </div>
                <div class="col-xl-10 p-0 mb-3 admin-bottom-h-2">
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
                  <table id="example" class="display w-100">
                    <thead>
                        <tr>
                            <th hidden>id</th>
                            <th>No.</th>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Requested</th>
                            <th>Needed</th>
                            <th>Brand/Model</th>
                            <th>Serial/Engine No.</th>
                            <th>Cost(₱)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">98377</a> </td>
                            <td> <button class="ctn-btn bg-success w-100"> <div class="text-1"> Done </div> </button> </td>
                            <td>Completed</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td>DELL</td>
                            <td>jUusrNo92OX6ew7r</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>8</td>
                            <td> <a href="" class="tbl-a">66817</a> </td>
                            <td> <button class="ctn-btn bg-success w-100"> <div class="text-1"> Done </div> </button> </td>
                            <td>Completed</td>
                            <td>2011/07/25</td>
                            <td>2011/04/25</td>
                            <td>DELL</td>
                            <td>eAyPUTpdDL2wQF3L</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>1</td>
                            <td> <a href="" class="tbl-a">18403</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2009/01/12</td>
                            <td>2011/04/25</td>
                            <td>LENOVO</td>
                            <td>eAyPUTpdDL2wQF3L</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">94178</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/03/29</td>
                            <td>2011/04/25</td>
                            <td>ACER</td>
                            <td>eAyPUTpdDL2wQF3L</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">81856</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pre-request</td>
                            <td>2008/11/28</td>
                            <td>2011/04/25</td>
                            <td>MAC</td>
                            <td>WuhahHDeFSwFjW7X</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">66804</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>ACER</td>
                            <td>qhjkEZL1iFoaLdBc</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">48125</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>HUAWEI</td>
                            <td>cSX6UtpTWtwvGwCs</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">02773</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>ACER</td>
                            <td>cSX6UtpTWtwvGwCs</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">65584</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>ASUS</td>
                            <td>cauqsM5wNdDwDbbq</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">65584</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>Lenovo</td>
                            <td>kVoFi8eb9FpuCCkN</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">79997</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td></td>
                            <td>DELL</td>
                            <td>cSX6UtpTWtwvGwCs</td>
                            <td>$320,800</td>
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
<script type="text/javascript" src="scripts/datatable-js/admin-datatable-1.js"></script>

<!-- DataTables -->

</body>
</html>