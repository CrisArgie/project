<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - ICT Job Request</title>

    


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
                <a href="user_home.php" class="sidebar-link">
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
          <form class="content-menu" action="results.html" method="GET" enctype="multipart/form-data">
<!-- Leftside menus -->
            <a href="user_request.php" class="return-icon">
              <img src="icons/png-files/chevron-left.png">
            </a>
<!-- Middleside menus -->
            <div class="content-table">
              <div class="ctn-container">
                
                <div class="ctn-header mt-2">
                  <h2>ICT JOB REQUEST FORM</h2>
                </div>
                <div class="main-container">
                  <div class="row justify-content-between pr-2 pl-2">
                  <div class="col-xl-9 col-lg-12 p-0"> 
                    <label for="datetime_request"> Date/Time of Request: </label> 
                    <input class="col-xl-6 col-lg-12 disabling-input" tabindex="-1" type="text" readonly
                    name="datetime_request"
                    id="datetime_request"
                    value="<?php date_default_timezone_set("Asia/Manila"); echo date('Y-m-d H:i:s');?>"> 
                  </div>
                  <div class="d-flex justify-content-end col-xl-3 col-lg-12  ml-auto p-0">
                    <label for="req_no"> Request No.: </label> 
                    <input class="col-xl-6 col-lg-12 disabling-input" tabindex="-1" type="text" readonly
                    name="req_no"
                    id="req_no"
                    value="" >
                  </div>
                  </div>
                </div>

                <hr class="ctn-linebreak">

                <div class="main-container">
                  <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-12">
                      <h3> CLIENT INFORMATION </h3>
                      <ul class="p-0 mb-2 row">
                        <li class="mt-2 col-xl-12">
                          <label for="end_user"> End User: </label>
                          <input class="w-100 text-capitalize disabling-input" tabindex="-1" type="text" readonly
                          name="end_user"
                          id="end_user"
                          value=""> <!-- Value collected from database -->
                        </li>
                        <li class="mt-2 col-xl-12">
                          <label for="divsecunit"> Division/Section/Unit: </label>
                          <input class="w-100 disabling-input" tabindex="-1" type="text" readonly
                          name="divsecunit"
                          id="divsecunit"
                          value=""> <!-- Value collected from database -->
                        </li>
                        <li class="mt-2 col-xl-12">
                          <label for="equipt_property_no"> Equipment Property No.: </label>
                          <input class="w-100 text-uppercase" type="text" 
                          name="equipt_property_no"
                          id="equipt_property_no" placeholder="ex. JVJV212324XJ97WN">
                        </li>
                      </ul>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                      <h3> TYPE OF REQUEST </h3>
                      <ul class="p-0 row">
                        <li class="mt-2 col-xl-6">
                          <input type="radio" onclick="chckboxFunc(this)" checked
                          name="type_request"
                          id="type_request"
                          value="Repair">
                          <label for="type_request"> Repair </label>
                        </li>
                        <li class="mt-2 col-xl-6">
                          <input type="radio" onclick="chckboxFunc(this)" 
                          name="type_request"
                          id="type_request"
                          value="Upgrade">
                          <label for="type_request"> Upgrade </label>
                        </li>
                        <li class="mt-2 col-xl-12">
                          <!-- <label for="other" hidden></label> -->
                          <input type="radio" onclick="chckboxFunc(this)"
                          name="type_request"
                          id="type_request"
                          value="Other">
                          <label for="type_request">Other:</label>
                          <input class="w-100 display-none" type="text" 
                          name="other_req_type" 
                          id="other_req_type"> <!-- hidden text -->
                        </li>
                      </ul>
                    </div>

                    <div class="col-xl-6 pr-4 pl-4 g-3">
                      <div class="row p-0 m-0">
                        <div class="col-xl-12 d-flex flex-row g-2 justify-content-end">
                          <label for="real-file" hidden></label>
                          <input type="file" hidden
                          id="real-file"
                          name="real-file">
                            <button class="middle-button d-flex justify-content-center p-1 g-2 my-shadow"
                            type="button"
                            id="custom-button"> 
                            <img class="content-icon" src="icons/png-files/link.png"> <div class="text-1">Attach</div> </button>
                          
                          <label for="multiple-file-img" hidden></label>
                          <input type="file" hidden multiple
                          id="multiple-file-img" 
                          name="multiple-file-img">
                            <button class="middle-button d-flex justify-content-center p-1 g-2 my-shadow"
                            type="button"
                            id="custom-button-2"> 
                            <img class="content-icon" src="icons/png-files/upload.png"> <div class="text-1">Upload</div> </button>
                        </div>
                        <div class="col-xl-12 mt-1 d-flex flex-row justify-content-end">
                          <span class="text-input-upload overflow-auto-x" id="custom-text-1"> No file chosen, yet. </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="ctn-linebreak">

                <div class="main-container">
                  <h3 class="mt-3 mr-2 ml-2"> AREA OF REQUEST <i class="f-w-normal"> (Check all that apply) </i></h3>
                  <div class="col p-2">
                    <div class="row-xl-12 pr-3 pl-3">
                      <ul class="d-flex align-items-center flex-wrap p-0 m-0 g-2">
                        <li>
                          <input type="checkbox" 
                          name="cables" 
                          id="cables"
                          value="cables">
                          <label for="cables"> Cables </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="keyboard"
                          id="keyboard"
                          value="keyboard">
                          <label for="keyboard"> Keyboard </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="mouse"
                          id="mouse"
                          value="mouse">
                          <label for="mouse"> Mouse </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="printer"
                          id="printer"
                          value="printer">
                          <label for="printer"> Printer </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="internet"
                          id="internet"
                          value="internet">
                          <label for="internet"> Internet </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="cd/dvd_drive" 
                          id="cd/dvd_drive"
                          value="cd/dvd_drive">
                          <label for="cd/dvd_drive"> CD/DVD Drive </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="memory"
                          id="memory"
                          value="memory">
                          <label for="memory"> Memory </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="network"
                          id="network"
                          value="network">
                          <label for="network"> Network </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="power_supply"
                          id="power_supply"
                          value="power_supply">
                          <label for="power_supply"> Power Supply </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="hard_drive" 
                          id="hard_drive"
                          value="hard_drive">
                          <label for="hard_drive"> Hard Drive </label>
                        </li>
                        <li>
                          <input type="checkbox" 
                          name="monitor"
                          id="monitor"
                          value="monitor">
                          <label for="monitor"> Monitor </label>
                        </li>
                      </ul>
                    </div>
                    <div class="row-xl-12 pr-3 pl-3 mt-2">
                      <ul class="row align-items-center p-0 m-0">
                        <li class="col-xl-4 p-0">
                          <label for="software_programs" hidden></label>
                          <input type="checkbox"
                          name="software_programs"
                          id="software_programs"
                          value="1">
                          <label for="software_programs_descrpt"> Software Programs (list): </label>
                          <textarea class="textarea-j" 
                          name="software_programs_descrpt" 
                          id="software_programs_descrpt" placeholder="Type here..."></textarea>
                        </li>
                        <li class="col-xl-4 p-0">
                          <label for="other_hardware" hidden></label>
                          <input type="checkbox"
                          name="other_hardware"
                          id="other_hardware"
                          value="1">
                          <label for="other_hardware_descrpt"> Other Hardware: </label>
                          <textarea class="textarea-j" 
                          name="other_hardware_descrpt" 
                          id="other_hardware_descrpt" placeholder="Type here..."></textarea>
                        </li>
                        <li class="col-xl-4 p-0">
                          <label for="usb_device" hidden></label>
                          <input type="checkbox"
                          name="usb_device"
                          id="usb_device"
                          value="1">
                          <label for="usb_device_descrpt"> USB Device: </label>
                          <textarea class="textarea-j" 
                          name="usb_device_descrpt"
                          id="usb_device_descrpt" placeholder="Type here..."></textarea>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div> <!-- END of contentContainer -->
            </div>
<!-- Rightside menus -->
            <div class="content-btn d-flex flex-column justify-content-end align-items-center w-auto pb-3 g-4">
              <button class="ctn-btn"> <img src="icons/png-files/save.png"> </button> 
              <button class="ctn-btn"> <img src="icons/png-files/printer.png"> </button>
              <button class="ctn-btn"> <img src="icons/png-files/trash-can.png"> </button> 
              <button type="submit" class="ctn-btn"> <img src="icons/png-files/telegram-original.png"> </button>
            </div>
          </form>
        </main>
    </div>

<script type="text/javascript" src="script_functions_ict.js"></script>

</body>
</html>