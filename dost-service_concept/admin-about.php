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
                        <a href="admin_request.php" class="sidebar-link ">
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
                    <a href="admin-about.php" class="sidebar-link-top active">
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
                  
                <div class="col-xl-12 d-flex justify-content-between">
                  <h2 class="p-0 mr-2 ml-2 mt-2 mb-3"> FAQ (Frequent Asked Questions) </h2>
                  <div class="d-flex g-2 mb-auto mt-auto">
                    <button type="button" class="wf-3 p-2 ctn-btn d-flex justify-content-center" data-modal-target="#faqModal"> 
                      <div class="text-1"> Add FAQ </div> 
                    </button>
                    <button type="button" class="wf-4 bg-danger p-2 ctn-btn d-flex justify-content-center" data-modal-target="#faqDltModal"> 
                      <div class="text-1"> Delete FAQ </div> 
                    </button>
                  </div>
                </div>
                
                <div class="col-xl-12 pb-2">
                  <div id="faqBox" class="faq-box mr-4 ml-4 pl-1 pr-1"></div>
                  <div class="d-flex g-2 justify-content-end align-items-center">
                    <button class="abt-btn d-flex align-items-center p-1" type="button" id="leftBtn"><img class="logo-1" src="icons/png-files/arrow-left-circle.png" alt="left.png"></button>
                    <div id="pagination"></div>
                    <button class="abt-btn d-flex align-items-center p-1" type="button" id="rightBtn"><img class="logo-1" src="icons/png-files/arrow-right-circle.png" alt="right.png"></button>
                  </div>
                </div>
                  
              </div>
            </div>
          </div>
        </main>
        <div class="modal" id="faqModal">
          <div class="modal-header">
            <div class="title">Frequent Asked Question Information Setting</div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <form action="" id="faqForm"  enctype="multipart/form-data">
              <ul class="row mb-0 ml-5 mr-5 pt-4 pb-4 pl-0 pr-0">
                <li class="col-xl-12 p-2 g-1 d-flex flex-column">
                  <label for="question">Question: </label>
                  <input type="text" id="question" name="question">
                </li>
                <li class="col-xl-12 p-2 g-1 d-flex flex-column mb-3">
                  <label for="answer" class="w-100">Answer: </label>
                  <textarea id="answer" name="answer" style="width:358px; height:235px; resize:none;"></textarea>
                </li>
                <li class="col-xl-12 p-2 g-2 d-flex justify-content-end">
                  <button type="reset" class="ctn-btn p-2"> <div class="text-1"> Reset </div></button>
                  <button type="submit" class="ctn-btn p-2"> <div class="text-1"> Submit </div></button>
                </li>
              </ul>
            </form>
          </div>
        </div>
        <div class="modal" id="faqDltModal">
          <div class="modal-header bg-danger">
            <div class="title">Frequent Asked Question Delete Setting</div>
            <button data-close-button class="close-button">&times;</button>
          </div>
          <div class="modal-body">
            <form action="" enctype="multipart/form-data">
              <ul class="row mb-0 ml-5 mr-5 pt-4 pb-4 pl-0 pr-0">
                <li class="col-xl-12 p-2 g-2 d-flex flex-column">
                  <label for="faqData">Select what to remove:</label>
                  <select name="faqData" id="faqData"></select>
                </li>
                <li class="col-xl-12 p-2 g-2 d-flex justify-content-end">
                  <button type="reset" class="ctn-btn p-2"> <div class="text-1"> Reset </div></button>
                  <button type="button" id="faqDeleteBtn" class="bg-danger ctn-btn p-2"> <div class="text-1"> Delete </div></button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      <div id="overlay"></div>
    </div>


<script type="text/javascript" src="afterscript.js" defer onload="modalFunc()"></script>
<script type="text/javascript" src="afterscript.js" defer onload="accordionFunc(0, 1)"></script>
<script>
const faqFormElement = document.querySelector('#faqForm');
if(faqFormElement){
  faqFormElement.addEventListener("submit", function(e){
    // submitForm(e, this)
    console.log(e)
  });
}
</script>


</body>
</html>