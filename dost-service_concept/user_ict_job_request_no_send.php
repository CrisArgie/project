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
          <div class="content-menu">
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
                    <label> Date/Time of Request: </label> <input class="col-xl-6 col-lg-12" type="datetime-local" name=""> 
                  </div>
                  <div class="col-xl-3 col-lg-12  ml-auto p-0">
                    <label> Request No.: </label> <input class="col-xl-6 col-lg-12" type="text" name="" disabled>
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
                          <label> End User: </label>
                          <input class="w-100" type="text" name="">
                        </li>
                        <li class="mt-2 col-xl-12">
                          <label> Division/Section/Unit: </label>
                          <input class="w-100" type="text" name="">
                        </li>
                        <li class="mt-2 col-xl-12">
                          <label> Equipment Property No.: </label>
                          <input class="w-100" type="text" name="">
                        </li>
                      </ul>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                      <h3> TYPE OF REQUEST </h3>
                      <ul class="p-0 row">
                        <li class="mt-2 col-xl-6">
                          <input type="checkbox" name="">
                          <label> Repair </label>
                        </li>
                        <li class="mt-2 col-xl-6">
                          <input type="checkbox" name="">
                          <label> Upgrade </label>
                        </li>
                        <li class="mt-2 col-xl-12">
                          <input type="checkbox" name="">
                          <label>Other:</label>
                          <input class="w-100" type="text" name="" > <!-- hidden text -->
                        </li>
                      </ul>
                    </div>

                    <div class="d-flex flex-row pr-4 pl-4 g-3">
                      <button class="middle-button d-flex justify-content-center p-1 g-2 my-shadow"> <img class="content-icon" src="icons/png-files/link.png"> <div class="text-1">Attach</div> </button>
                      <button class="middle-button d-flex justify-content-center p-1 g-2 my-shadow"> <img class="content-icon" src="icons/png-files/upload.png"> <div class="text-1">Upload</div> </button>
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
                          <input type="checkbox" name="">
                          <label> Cables </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Keyboard </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Mouse </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Printer </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Internet </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> CD/DVD Drive </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Memory </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Network </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Power Supply </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Hard Drive </label>
                        </li>
                        <li>
                          <input type="checkbox" name="">
                          <label> Monitor </label>
                        </li>
                      </ul>
                    </div>
                    <div class="row-xl-12 pr-3 pl-3 mt-2">
                      <ul class="row align-items-center p-0 m-0">
                        <li class="col-xl-4 p-0">
                          <input type="checkbox" name="">
                          <label> Software Programs (list): </label>
                          <textarea class="textarea-j" placeholder="Type here..."></textarea>
                        </li>
                        <li class="col-xl-4 p-0">
                          <input type="checkbox" name="">
                          <label> Other Hardware: </label>
                          <textarea class="textarea-j" placeholder="Type here..."></textarea>
                        </li>
                        <li class="col-xl-4 p-0">
                          <input type="checkbox" name="">
                          <label> USB Device: </label>
                          <textarea class="textarea-j" placeholder="Type here..."></textarea>
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
            </div>
          </div>

        </main>
    </div>



    
</body>
</html>