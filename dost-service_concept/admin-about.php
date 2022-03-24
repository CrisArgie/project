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
          <div class="content-menu flex-column">
            <div class="main-container">
              <div class="row justify-content-between align-items-baseline mt-3 mr-2 ml-2">
                <h2 class="p-0 m-0"> About </h2>
                <div class="col-xl-12 mt-3 ">
                  <h4 class="d-flex justify-content-center p-0 m-0"> Process of Requesting Service </h4>  
                  <div class="w-100 mt-2 d-flex justify-content-center">
                    <img src="img/IMG_PFLW_032322.jpg" style="width: auto; height: 450px;">
                  </div>
                </div>
              </div>
            </div>
            <hr class="ctn-linebreak mt-3">
            <div class="main-container">
              <div class="row ">
                <div class="col-xl-12 p-0">
                  <h2 class="p-0 mr-2 ml-2 mt-2 mb-3"> FAQ (Frequent Asked Questions) </h2>
                  <div class="faq-box mr-4 ml-4 pl-1 pr-1">
                    <div class="faq border-bottom-dark mt-2 mb-2">
                      <input type="checkbox" id="faq1" class="checkbox">
                      <label class="faq-label mt-2 mb-2" for="faq1">Accordion using CSS only?</label>
                      <div class="faq-content mb-3 w-90">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae inventore voluptates corrupti illum quod itaque quia delectus blanditiis laboriosam iure.
                      </div>
                    </div>
                    <div class="faq border-bottom-dark mt-2 mb-2">
                      <input type="checkbox" id="faq2" class="checkbox">
                      <label class="faq-label mt-2 mb-2" for="faq2">Accordion using CSS only?</label>
                      <div class="faq-content mb-3 w-90">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae inventore voluptates corrupti illum quod itaque quia delectus blanditiis laboriosam iure. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam facilis sit, at laborum maiores recusandae ut vitae nobis blanditiis quae!
                      </div>
                    </div>
                    <div class="faq border-bottom-dark mt-2 mb-2">
                      <input type="checkbox" id="faq3" class="checkbox">
                      <label class="faq-label mt-2 mb-2" for="faq3">Accordion using CSS only?</label>
                      <div class="faq-content mb-3 w-90">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae inventore voluptates corrupti illum quod itaque quia delectus blanditiis laboriosam iure. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit assumenda nobis eos esse impedit tempore, fugiat quam praesentium numquam ducimus, quisquam sapiente, ex sunt dicta aliquam voluptate vitae in ullam dolore laudantium illo mollitia exercitationem! Praesentium optio facere ipsum obcaecati.
                      </div>
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