<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - View Request</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    
    <!-- My styles for this template -->
    <link href="style.css" rel="stylesheet">
    <script src="script.js" defer></script>

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
                <a href="user_home.php" class="sidebar-link ">
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
                      <a href="user_view_request.php" class="sidebar-link active">
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
            <div class="col-xl-12 p-3">
              
              <div class="main-container mb-4">
                <div class="row flex-row justify-content-between">
                  <h1 class="m-0 p-0"> My Request </h1>
                  <div class="d-flex align-items-center justify-content-end col-xl-4 p-0 g-2">
                    <button class="ctn-btn d-flex align-items-center g-1 pl-2 pr-2 pt-1 pb-1 h-100"> 
                      <div class="text-1"> Generate Report </div>
                      <img src="icons/png-files/printer.png" class="p-0">
                    </button>
                    <a href="user_request.php" class="link-a-tag d-flex align-items-center pl-2 pr-2 pt-1 pb-1 my-shadow h-100"> 
                        <div class="text-1"> Add Request </div>
                    </a>
                  </div>
                </div>
              </div>
               
              <div class="main-container mb-4">
                <div class="row justify-content-between">
                  <h2 class="m-0 p-0">Request Overview:</h2>
                  <ul class="col-xl-6 col-lg-12 d-flex flex-row g-3 m-0 p-0 w-auto mr-4">
                    <li class="d-flex flex-row align-items-center g-2 widget-ctn p-2 pr-4 justify-content-end mr-2">
                      <section class="w-75 text-2 f-bold"> Total of Repair Request: </section> <p class="m-0 text-3 f-bold"> 0 </p> 
                    </li>
                    <li class="d-flex flex-row align-items-center g-2 widget-ctn p-2 pr-4 justify-content-end mr-2"> 
                      <section class="w-75 text-2 f-bold"> Total of ICT Job Request: </section> <p class="m-0 text-3 f-bold"> 5 </p> 
                    </li>
                    <li class="d-flex flex-row align-items-center g-2 widget-ctn p-2 pr-4 justify-content-end mr-2"> 
                      <section class="w-75 text-2 f-bold"> Total of Pending Request: </section> <p class="m-0 text-3 f-bold"> 2 </p> 
                    </li>
                  </ul>
                </div>
              </div>
                
              <hr class="ctn-linebreak">

              <div class="main-container">
                <div class="row justify-content-center">
                  <table id="example" class="display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th hidden>id</th>
                            <th>No.</th>
                            <th>Action</th>
                            <th style="width: 90px">
                              Status</th>
                            <th>Requested</th>
                            <th>Needed</th>
                            <th>Brand/Model</th>
                            <th>Type of Request</th>
                            <th>Property No.</th>
                        </tr>
                    </thead>
                    <tbody class="w-100">
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="user_repair_request_viewer.php" class="tbl-a">98377</a> </td>
                            <td> <button class="ctn-btn bg-success w-100"> <div class="text-1"> Done </div> </button> </td>
                            <td>Completed</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                            <td>DELL</td>
                            <td>Repair request</td>
                            <td>uBDQ1W9J8g</td>
                        </tr>
                        <tr>
                            <td hidden>8</td>
                            <td> <a href="user_ict_job_request_viewer.php" class="tbl-a">66817</a> </td>
                            <td> <button class="ctn-btn bg-success w-100"> <div class="text-1"> Done </div> </button> </td>
                            <td>Completed</td>
                            <td>2011/07/25</td>
                            <td>2011/04/25</td>
                            <td>DELL</td>
                            <td>ICT job request</td>
                            <td>QqF6Omn682</td>
                        </tr>
                        <tr>
                            <td hidden>1</td>
                            <td> <a href="user_pre_repair.php" class="tbl-a">18403</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2009/01/12</td>
                            <td>2011/04/25</td>
                            <td>LENOVO</td>
                            <td>Pre-repair</td>
                            <td>jerhPN50rK</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="user_post_repair.php" class="tbl-a">94178</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/03/29</td>
                            <td>2011/04/25</td>
                            <td>ACER</td>
                            <td>Post repair</td>
                            <td>TUIAuBI7Ur</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">81856</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>In-progress</td>
                            <td>2008/11/28</td>
                            <td>2011/04/25</td>
                            <td>MAC</td>
                            <td>ICT job request</td>
                            <td>wPdY2QszBh</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">66804</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>ACER</td>
                            <td>ICT job request</td>
                            <td>5PzYIgU3Dy</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">48125</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>HUAWEI</td>
                            <td>Repair request</td>
                            <td>LPwAVxlP94</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">02773</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>ACER</td>
                            <td>ICT job request</td>
                            <td>XSjPmWx4Ib</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">65584</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>ASUS</td>
                            <td>ICT job request</td>
                            <td>irh5unlrHD</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">65584</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td>2011/04/25</td>
                            <td>Lenovo</td>
                            <td>Repair request</td>
                            <td>dZ0jRr6x6g</td>
                        </tr>
                        <tr>
                            <td hidden>9</td>
                            <td> <a href="" class="tbl-a">79997</a> </td>
                            <td> <button class="ctn-btn w-100"> <div class="text-1"> Cancel </div> </button> </td>
                            <td>Pending</td>
                            <td>2012/12/02</td>
                            <td></td>
                            <td>DELL</td>
                            <td>Repair request</td>
                            <td>D0G9264ajc</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </main>
    </div>

    <script type="text/javascript" src="scripts/datatable-js/user-datatable-2.js"></script>

</body>
</html>