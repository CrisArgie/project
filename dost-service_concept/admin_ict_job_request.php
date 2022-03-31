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
                        <div class="ctn-header mt-2">
                            <h2>ICT JOB REQUEST FORM</h2>
                        </div>
                        <div class="main-container">
                            <div class="row justify-content-between pr-2 pl-2">
                                <div class="col-xl-9 col-lg-12 p-0"> 
                                    <label> Date/Time of Request: </label> <input class="col-xl-6 col-lg-12" type="text" name="" disabled>
                                </div>
                                <div class="col-xl-3 col-lg-12  ml-auto p-0">
                                    <label> Request No.: </label> <input class="col-xl-6 col-lg-12" type="text" name="" disabled>
                                </div>
                            </div>
                        </div>
                        <hr class="ctn-linebreak">
                        <div class="main-container">
                            <div class="row mt-1 mb-2">
                                <h3 class="mt-2"> CLIENT INFORMATION </h3>
                                <div class="col-xl-12 p-0">
                                    <div class="main-container">
                                        <ul class="p-0 mb-2 row">
                                            <li class="mt-2 col-xl-6">
                                                <label> End User: </label>
                                                <input class="w-100" type="text" name="">
                                            </li>
                                            <li class="mt-2 col-xl-6">
                                                <label> Division/Section/Unit: </label>
                                                <input class="w-100" type="text" name="">
                                            </li>
                                            <li class="mt-2 col-xl-6">
                                                <label> Equipment Property No.: </label>
                                                <input class="w-100" type="text" name="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="ctn-linebreak">
                        <div class="main-container">
                            <div class="row flex-column">
                                <h3 class="mt-3 mr-2 ml-2"> AREA OF REQUEST <i class="f-w-normal"> (List or file document, can be download) </i></h3>
                                <div class="row">
                                    <div class="col-xl-6 h-25">
                                        <div class="row ml-3 mr-3">
                                            <ul class="col-6 p-0 m-0">
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Cables </label>
                                                </li>
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Keyboard </label>
                                                </li>
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Mouse </label>
                                                </li>
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Printer </label>
                                                </li>
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Internet </label>
                                                </li>
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> CD/DVD Drive </label>
                                                </li>
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Memory </label>
                                                </li>
                                                <li class="mt-1 mb-1">
                                                    <input type="checkbox" name="">
                                                    <label> Network </label>
                                                </li>
                                            </ul>
                                            <ul class="col-6 p-0 m-0">
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Power Supply </label>
                                                </li>
                                                <li class="mt-1 mb-1"> 
                                                    <input type="checkbox" name="">
                                                    <label> Hard Drive </label>
                                                </li>
                                                <li class="mt-1 mb-1">
                                                    <input type="checkbox" name="">
                                                    <label> Monitor </label>
                                                </li>
                                                <li class="mt-1 mb-1">
                                                    <h4 class="p-0 mt-2"> Type of Request</h4>
                                                    <label for="request_type"></label>
                                                    <select name="request_type" onChange='checkRequest(this.value);' class="w-100">
                                                        <option value="repair">Repair</option>
                                                        <option value="upgrade">Upgrade</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <input type="text" name="request_type" id="request_type" class="w-100 mt-1 display-none">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="border-box-1 pl-2 pr-2 pb-2 ml-2 mr-2 textarea-bg d-flex flex-column align-items-end">
                                                <textarea class="textarea-k" placeholder="Attached file or image"></textarea>
                                                <img src="icons/png-files/download.png" class="menu-icon"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <ul class="p-0 m-0">
                                            <li class="mt-1 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label> Software Programs (list): </label>
                                                <textarea name="" id="" class="textarea-i" rows="2"></textarea>
                                            </li>
                                            <li class="mt-1 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label> Other Hardware: </label>
                                                <textarea name="" id="" class="textarea-i" rows="2"></textarea>
                                            </li>
                                            <li class="mt-1 mb-1">
                                                <input type="checkbox" name="" id="">
                                                <label> USB Device: </label>
                                                <textarea name="" id="" class="textarea-i" rows="2"></textarea>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end ctn-container -->
                </div>
                <div class="content-right d-flex flex-column align-items-center justify-content-between p-0 pt-2 pb-3">
                    <div class="content-btn-btm pt-2">
                        <a onclick="window.history.back()" class="return-icon">
                            <img src="icons/png-files/chevron-left.png">
                        </a>
                    </div>
                    <div class="content-btn-btm">
                        <button button class="p-2 ctn-btn w-100"> <img src="icons/png-files/printer.png"> <div class="text-1"> Print </div> </button>
                        <button class="p-2 ctn-btn w-100"> <div class="text-1"> Save </div> </button>
                        <a href="" class="d-flex justify-content-center p-2 ctn-btn bg-success w-100"> <div class="text-1"> Done </div> </a> 
                    </div>
                </div>
            </div>
        </main>
    </div>


<script>
function checkRequest(val) {
  var element = document.getElementById('request_type');
  if (val == 'other'){
    element.style.display = 'block';
  }
  else if(val=='repair' || val=='upgrade')
  {
    element.style.display = 'none';
  }
}
</script>

</body>
</html>