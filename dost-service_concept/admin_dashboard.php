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
                        <a href="" class="sidebar-link active">
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
                        <a href="#" class="sidebar-link">
                        <img class="sidebar-icon" src="icons/png-files/users.png">
                        <div class="hidden-sidebar">Users</div>
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="#" class="sidebar-link">
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
                        <div class="col-xl-12 mb-1"> <h2 class="pr-2 pl-2"> Primary Monitoring </h2> </div>
                        <div class="col-xl-2 pl-0"> 
                            <div class="my-shadow bg-gray-100 mb-2"> 
                                <h3 class="m-0 p-0 pt-2 pl-3"> In-progress: </h3> 
                                <div></div>
                            </div>
                            <div class="my-shadow bg-gray-100 mb-2">  
                                <h3 class="m-0 p-0 pt-2 pl-3"> Pending Request: </h3>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-xl-10 my-shadow bg-gray-100 p-0 mb-2"> 
                            <h4 class="pl-3 pt-2 m-0 p-0"> Total number of request by reports </h4>
                            <div class=" "> 
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-container mt-4">
                    <div class="row my-shadow bg-gray-100">
                        <div class="col-xl-12 mb-3 mt-2"> <h2 class="pr-2 pl-2"> User and Request Monitoring </h2> </div>
                        <div class="col-xl-6 mb-2">
                            <div class=" my-shadow bg-info">
                                <h4> Total number of request by status </h4>
                            </div> </div>
                        <div class="col-xl-6 mb-2">
                            <div class=" my-shadow bg-info">
                                <h4> Total number of user by division </h4>
                            </div> </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    
</body>
</html>