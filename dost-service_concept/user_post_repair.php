<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - Post repair inspection report</title>

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
                      <a href="user_request.php" class="sidebar-link active">
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
<!-- Leftside menus -->
            <a onclick="window.history.back()" class="return-icon">
              <img src="icons/png-files/chevron-left.png">
            </a>
<!-- Middleside menus -->
            <div class="content-table">
              <div class="ctn-container">
                <div class="main-container mt-4">
                  <div class="row justify-content-between p-0">
              			<div class="col-xl-4 col-lg-12">
                      <div class="d-flex flex-row g-3">
              				  <label> No.: </label>
              				  <input type="text" id="user_post_no" readonly tabindex="-1" class="w-100">	
                      </div>
              			</div>
              			<div class="col-xl-4 col-lg-12">
                      <div class="d-flex flex-row g-2 justify-content-end">
              				  <label> Date: </label>
              				  <input type="text" id="user_post_date" readonly tabindex="-1" class="w-100">	
                      </div>
              			</div>
                  </div>
            		</div>
            		<div class="row ctn-header mt-2">
            			<h2>POST REPAIR INSPECTION REPORT</h2>
            		</div>
                <div class="main-container">
                  <div class="row mn-10 mt-1">
                    <div class="folder-container">
                      <div class="folder-header">
                        <div class="folder-page show">
                          <div class="text-2 pt-3 pl-2 pr-2">
                            POST REPAIR REPORT
                          </div>
                        </div>
                      </div>
                      <div class="folder-content">
                        <div class="row">
                          <ul class="col-xl-6 p-2 m-0">
                            <li class="row mt-2 mb-2">
                              <label class="col-xl-4 p-0 m-auto">Repair Shop/Supplier:</label>
                              <input class="col-xl-8 mt-2 mb-2" type="text" readonly tabindex="-1" id="repair_shop">
                            </li>
                            <li class="row mt-2 mb-2">
                              <label class="col-xl-4 p-0 m-auto">Job Order/P.O. No.:</label>
                              <input class="col-xl-8 mt-2 mb-2" type="text" readonly tabindex="-1" id="job_order">
                            </li>
                            <li class="row mt-2 mb-2">
                              <label class="col-xl-4 p-0 m-auto">Invoice No.:</label>
                              <input class="col-xl-8 mt-2 mb-2" type="text" readonly tabindex="-1" id="invoice_no">
                            </li>
                            <li class="row mt-2 mb-2">
                              <label class="col-xl-4 p-0 m-auto">Amt/J.O./P.O. No.:</label>
                              <input class="col-xl-8 mt-2 mb-2" type="text" readonly tabindex="-1" id="amtjp_no">
                            </li>
                          </ul>
                          <ul class="col-xl-6 p-2 m-0">
                            <li class="row mt-2 mb-2">
                              <label class="col-xl-4 p-0 m-auto">Date:</label>
                              <input class="col-xl-8 mt-2 mb-2" type="text" readonly tabindex="-1" id="repair_shop_date">
                            </li>
                            <li class="row mt-2 mb-2">
                              <label class="col-xl-4 p-0 m-auto">Date:</label>
                              <input class="col-xl-8 mt-2 mb-2" type="text" readonly tabindex="-1" id="job_order_date">
                            </li>
                            <li class="row mt-2 mb-2">
                              <label class="col-xl-4 p-0 m-auto">Payable Account:</label>
                              <input class="col-xl-8 mt-2 mb-2" type="text" readonly tabindex="-1" id="payable_account">
                            </li>
                          </ul>
                        </div>
                        <hr class="ctn-linebreak">
                        <div class="main-container">
                          <div class="row">
                            <div class="col-xl-12 mt-3">
                              <textarea class="textarea-l w-100 p-2" readonly tabindex="-1" id="findings_recomm" placeholder="FINDINGS/RECOMMENDATIONS"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="main-container mt-4 mb-2">
                          <div class="row justify-content-end ml-4 mr-4 g-2">
                            <!-- <button class="ctn-btn d-flex p-1"> 
                              <div class="text-1 pl-1 m-auto">
                                Save
                              </div> <img src="icons/png-files/save.png" class="ml-1 mr-1 p-0"> </button>  -->
                            <button class="ctn-btn d-flex p-1"> 
                              <div class="text-1 pl-1 m-auto">
                                Generate Report
                              </div> <img src="icons/png-files/printer.png" class="ml-1 mr-1 p-0"> </button> 
                            <button class="ctn-btn d-flex p-1"> 
                              <div class="text-1 pl-1 m-auto">
                                Download
                              </div> <img src="icons/png-files/download.png" class="ml-1 mr-1 p-0"> </button> 
                          </div>
                        </div>
                      </div>
                    </div>
            	    </div>
                </div>
              </div> <!-- END of contentContainer -->
            </div>
          </div>
        </main>
    </div>



    
</body>
</html>