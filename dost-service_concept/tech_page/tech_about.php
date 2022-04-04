<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>DOST Service Request - About</title>
    
    <!-- My styles for this template -->
    <link href="../style.css" rel="stylesheet">
    <script src="../script.js" defer></script>

</head>
<body>
<!-- Header Page  -->
    <header class="header">
<!-- Left menu buttons -->
        <div class="left-menu">
            <img class="menu-logo-item" src="../img/DOST_log.png">
            <button class="menu-icon-btn" data-menu-icon-btn>
                <img class="menu-logo-item" src="../icons/png-files/menu.png">
            </button>
        </div>
<!-- Right menu buttons -->
        <div class="right-menu" >
          
          <div class="dropdown" data-dropdown-menu>
            <button class="menu-profile-btn">
              <img class="menu-logo-item" src="../img/undraw_profile.svg" data-dropdown-button>
            </button>
            <div class="dropdown-menu" >
              <a class="link" href="_settings.php"><img class="link-icon" src="../icons/png-files/cogs.png" alt="Settings.png"> 
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
                    <a href="tech_about.php" class="sidebar-link-top active">
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
            <div class="main-container">
              <div class="row justify-content-between align-items-baseline mt-3 mr-2 ml-2">
                <h2 class="p-0 m-0"> About </h2>
                <div class="col-xl-12 mt-3 ">
                  <h4 class="d-flex justify-content-center p-0 m-0"> Process of Requesting Service </h4>  
                  <div class="w-100 mt-2 d-flex justify-content-center">
                    <img src="../img/IMG_PFLW_032322.jpg" style="width: auto; height: 450px;">
                  </div>
                </div>
              </div>
            </div>
            <hr class="ctn-linebreak mt-3">
            <div class="main-container">
              <div class="row ">
                <div class="col-xl-12 p-0">
                  <h2 class="p-0 mr-2 ml-2 mt-2 mb-3"> FAQ (Frequent Asked Questions) </h2>
                  
                  <div style="height: 45vh; overflow: auto;">
                    <div id="faqBox" class="faq-box mr-4 ml-4 pl-1 pr-1">
                      <script type="text/javascript" src="../afterscript.js" defer onload="aboutReadFunc(2)"></script>
                    </div>
                    <div>  
                      <ul class="d-flex align-content-center justify-content-end g-2 pl-4 pr-4 m-0">
                        <li>
                          <button class="abt-btn d-flex align-content-center justify-content-center p-1">
                            <img class="logo-1" src="../icons/png-files/arrow-left-circle.png">
                          </button>  
                        </li>
                        <li class="mt-auto mb-auto">
                          <h5 class="fw-normal p-0 m-0" id="pagination"></h5>  
                        </li>
                        <li> 
                          <button class="abt-btn d-flex align-content-center justify-content-center p-1">
                            <img class="logo-1" src="../icons/png-files/arrow-right-circle.png">  
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                  

                </div>
              </div>
            </div>
          </div>
        </main>
    </div>



    
</body>
</html>