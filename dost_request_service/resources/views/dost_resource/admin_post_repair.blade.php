<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - Post Repair Request</title>

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
                        <a href="admin_dashboard.php" class="sidebar-link ">
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
                        <a href="admin_users.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/users.png">
                        <div class="hidden-sidebar">Users</div>
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="admin_request.php" class="sidebar-link active">
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
            <div class="content-menu">
            <div class="content-table">
                <div class="ctn-container"> 
                  <div class="main-container mt-4">
                    <div class="row justify-content-between p-0">
                      <div class="col-xl-4 col-lg-12 mb-1">
                        <div class="d-flex flex-row g-3">
                          <label for="post_repair_no"> No.: </label>
                          <input type="text" readonly tabindex="-1" name="post_repair_no" id="post_repair_no" class="w-100">	
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-12 mb-1">
                        <div class="d-flex flex-row g-2 justify-content-end">
                          <label for="post_repair_date"> Date: </label>
                          <input type="text" readonly tabindex="-1" name="post_repair_date" value="<?php echo date('m-d-Y');?>" id="post_repair_date" class="w-100">	
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
                        <div class="folder-header d-flex flex-row">
                          <div class="folder-page mr-1">
                            <div class="text-2 pt-3 pl-2 pr-2">
                              <a class="disabling-input text-gray-700"> PRE-REPAIR REPORT </a>
                            </div>
                          </div>
                          <div class="folder-page show">
                            <div class="text-2 pt-3 pl-2 pr-2">
                              <a href="admin_post_repair.php" class="text-gray-900"> POST REPAIR   REPORT </a>
                            </div>
                          </div>
                        </div>
                        <div class="folder-content">
                          <div class="row">
                            <ul class="col-xl-6 p-2 m-0">
                              <li class="row mt-2 mb-2">
                                <label for="repair_shop" class="col-xl-4 p-0 m-auto">Repair Shop/Supplier:</label>
                                <input class="col-xl-8 mt-2 mb-2" type="text" name="repair_shop" id="repair_shop">
                              </li>
                              <li class="row mt-2 mb-2">
                                <label for="jp_order_no" class="col-xl-4 p-0 m-auto">Job Order/P.O No.:</label>
                                <input class="col-xl-8 mt-2 mb-2" type="text" name="jp_order_no" id="jp_order_no">
                              </li>
                              <li class="row mt-2 mb-2">
                                <label for="invoice_no" class="col-xl-4 p-0 m-auto">Invoice No.:</label>
                                <input class="col-xl-8 mt-2 mb-2" type="text" name="invoice_no" id="invoice_no">
                              </li>
                              <li class="row mt-2 mb-2">
                                <label for="amtjp_order_no" class="col-xl-4 p-0 m-auto">Amt/J.O./P.O. No.:</label>
                                <input class="col-xl-8 mt-2 mb-2" type="text" name="amtjp_order_no" id="amtjp_order_no">
                              </li>
                            </ul>
                            <ul class="col-xl-6 p-2 m-0">
                              <li class="row mt-2 mb-2">
                                <label for="repair_shop_date" class="col-xl-4 p-0 m-auto">Date:</label>
                                <input class="col-xl-8 mt-2 mb-2" type="date" name="repair_shop_date" id="repair_shop_date">
                              </li>
                              <li class="row mt-2 mb-2">
                                <label for="jp_order_date" class="col-xl-4 p-0 m-auto">Date:</label>
                                <input class="col-xl-8 mt-2 mb-2" type="date" name="jp_order_date" id="jp_order_date">
                              </li>
                              <li class="row mt-2 mb-2">
                                <label for="payable_acc" class="col-xl-4 p-0 m-auto">Payable Account:</label>
                                <input class="col-xl-8 mt-2 mb-2" type="text" name="payable_acc" id="payable_acc">
                              </li>
                            </ul>
                          </div>
                          <hr class="ctn-linebreak">
                          <div class="row mb-2 mt-1">
                            <div class="col-xl-12 mt-3">
                              <div class="bg-gray-100 pl-2 pr-2 pt-3 pb-1">
                                <label for="findings_recomm" hidden></label>
                                <textarea class="textarea-o border-box-none w-100 p-2" placeholder="FINDINGS/RECOMMENDATIONS" name="findings_recomm" id="findings_recomm"></textarea>
                                <!-- <div class="mb-2">
                                  <button class="btn-brdr border-box-none bg-gray-100"> <img class="txt-editor-icon" src="icons/png-files/bold.png"> </button> 
                                  <button class="btn-brdr border-box-none bg-gray-100"> <img class="txt-editor-icon" src="icons/png-files/italic.png"> </button>
                                  <button class="btn-brdr border-box-none bg-gray-100"> <img class="txt-editor-icon" src="icons/png-files/underline.png"> </button>
                                  <button class="btn-brdr border-box-none bg-gray-100"> <img class="txt-editor-icon" src="icons/png-files/list.png"> </button>
                                  <button class="btn-brdr border-box-none bg-gray-100"> <img class="txt-editor-icon" src="icons/png-files/eraser.png"> </button>
                                </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- end ctn-container -->
              </div>
              <div class="content-right d-flex flex-column align-items-center justify-content-between p-0 pt-2 pb-3">
                  <div class="content-btn-btm">
                      <a onclick="window.history.back()" class="return-icon">
                          <img src="icons/png-files/chevron-left.png">
                      </a>
                  </div>
                  <div class="content-btn-btm">
                      <button button class="p-2 ctn-btn w-100"> <img src="icons/png-files/save.png"> </button>
                      
                      <button class="p-2 ctn-btn w-100"> <div class="text-1"> Print </div> </button>
                      <a href="" class="d-flex justify-content-center p-2 ctn-btn bg-success w-100"> <div class="text-1"> Done </div> </a> 
                  </div>
              </div>
            </div>
        </main>
    </div>



</body>
</html>