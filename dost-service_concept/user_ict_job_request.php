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
                      <a href="user_history.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/alarm-clock.png">
                        <div class="hidden-sidebar">History</div>
                      </a>
                    </li>
                    <li class="sidebar-list-item">
                      <a href="user_view_request.php" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/agenda.png">
                        <div class="hidden-sidebar">View Request</div>
                      </a>
                    </li>
                    <li class="sidebar-list-item">
                      <a href="#" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/information.png">
                        <div class="hidden-sidebar">About</div>
                      </a>
                    </li>
                    <li class="sidebar-list-item">
                      <a href="#" class="sidebar-link">
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
            <a href="user_request.php" class="return-icon">
              <img src="icons/png-files/chevron-left.png">
            </a>
            
            <div class="content-table">
              <div class="row ctn-container">
                <div class="row ctn-header">
                  <h2>ICT JOB REQUEST FORM</h2>
                </div>
                <div class="row">
                  <div class="row">
                    <div class="ctn-top col-12">
                      <div class="col-6 p-0">
                        Date/Time of Request: <input class="w-50" type="date" name=""> <!-- <input type="datetime-local" name=""> -->
                      </div>
                      <div class="col-6 p-0">
                        Request No.: <input class="w-50" type="text" name="">
                      </div>
                    </div>
                  </div>
                  <hr class="ctn-linebreak">
                  <div class="row">
                    <div class="ctn-middle col-12">
                      <div class="col-6 p-0 box-1">
                        <h3 class="mb-4">CLIENT INFORMATION</h3>
                        <label> End User: </label>  
                          <input type="text" name="">
                        <label> Division/Section/Unit: </label> 
                          <input type="text" name=""> 
                        <label> Equipment Property No.: </label>
                          <input type="text" name=""> 
                      </div>
                      <div class="col-6 p-0">
                        <h3 class="mb-4">TYPE OF REQUEST</h3>
                        <input type="checkbox" name=""> <span class="mr-5"> Repair </span>
                        <input type="checkbox" name=""> <span> Upgrade </span>
                        <br><br>
                        <input type="checkbox" name=""> <span> Other: </span> <input type="text" name="">
                        <div class="mt-5 mr-4 d-flex flex-row align-items-center justify-content-end g-2">
                          <button class="p-1 d-flex align-items-center justify-content-center g-2 my-shadow"> <img class="content-icon" src="icons/png-files/link.png"> <div class="text-1">Attach</div> </button>
                          <button class="p-1 d-flex align-items-center justify-content-center g-2 my-shadow"> <img class="content-icon" src="icons/png-files/upload.png"> <div class="text-1">Upload</div> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <hr class="ctn-linebreak">
                  <div class="row">
                   <h3 class="col mb-4">Area of Request <i class="f-w-normal">(Check all that apply)</i> </h3> 
                    <div class="row">
                      <div class="ctn-bottom d-flex align-items-start col-12">
                        <div class="col-4 p-0 pl-4 pr-4 btm-box-1 d-grid g-2">
                          <span> <input class="checkbox" type="checkbox" name=""> Cables </span> 
                          <span> <input class="checkbox" type="checkbox" name=""> Keyboard </span> 
                          <span> <input class="checkbox" type="checkbox" name=""> Mouse </span> 
                          <span> <input class="checkbox" type="checkbox" name=""> Printer </span> 
                          <span> <input class="checkbox" type="checkbox" name=""> Internet </span> 
                          <span> <input class="checkbox" type="checkbox" name=""> CD/DVD Drive </span> 
                          <span> <input class="checkbox" type="checkbox" name=""> Memory </span> 
                          <span> <input class="checkbox" type="checkbox" name=""> Network </span>
                        </div>
                        <div class="col-4 p-0 pl-4 pr-4 btm-box-2 d-grid g-2">
                          <span> <input class="checkbox" type="checkbox" name="">  Power Supply </span> 
                          <span> <input class="checkbox" type="checkbox" name="">  Hard Drive </span> 
                          <span> <input class="checkbox" type="checkbox" name="">  Monitor </span> 
                          <span> <input class="checkbox" type="checkbox" name="">  Software Programs (list): </span> <input type="text" name="">
                        </div>
                        <div class="col-4 p-0 pl-4 pr-4 btm-box-3 d-grid g-2">
                          <span class="h-auto"> <input class="checkbox" type="checkbox" name=""> Other Hardware: </span> <input type="text" name=""> 
                          <span class="h-auto"> <input class="checkbox" type="checkbox" name=""> USB Device: </span> <input type="text" name="">
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-btn d-flex flex-column justify-content-end align-items-center w-auto pb-3 g-4">
            
              <button class="ctn-btn"> <img src="icons/png-files/save.png"> </button> 
              <button class="ctn-btn"> <img src="icons/png-files/printer.png"> </button>
              <button class="ctn-btn"> <img src="icons/png-files/trash-can.png"> </button> 
              <button class="ctn-btn"> <img src="icons/png-files/telegram-original.png"> </button>
            
            </div>
          </div>
        </main>
    </div>



    
</body>
</html>