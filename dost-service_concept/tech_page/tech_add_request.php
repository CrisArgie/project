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
    <link href="../style.css" rel="stylesheet">
    <script src="../script.js" defer></script>


</head>
<body>
<!-- Header Page  -->
    <header class="header">
<!-- Left menu buttons -->
        <div class="left-menu">
            <img class="menu-logo-item" src="../img/DOST_log.png">
        </div>
<!-- Right menu buttons -->
        <div class="right-menu" >
          
          <div class="dropdown" data-dropdown-menu>
            <button class="menu-profile-btn">
              <img class="menu-logo-item" src="../img/undraw_profile.svg" data-dropdown-button>
            </button>
            <div class="dropdown-menu" >
              <a class="link" href=""><img class="link-icon" src="../icons/png-files/cogs.png" alt="Settings.png"> 
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
                        <a href="tech_request.php" class="sidebar-link active">
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
                    <a href="tech_about.php" class="sidebar-link-top">
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
            <div class="content-menu">
                <div class="content-table">
            	    <div class="ctn-container"> 
            		    <div class="main-container mt-4">
                            <div class="row justify-content-between p-0">
              			        <div class="col-xl-4 col-lg-12">
                                    <div class="d-flex flex-row g-3">
              				            <label> No.: </label>
              				            <input type="text" name="" disabled class="w-100">	
                                    </div>
              			        </div>
              			        <div class="col-xl-4 col-lg-12">
                                    <div class="d-flex flex-row g-2 justify-content-end">
                                        <label> Date: </label>
                                        <input type="text" name="" disabled class="w-100">	
                                    </div>
              			        </div>
                            </div>
            		    </div>
            		    <div class="row ctn-header mt-2">
            			    <h2>REQUEST FOR REPAIR</h2>
            		    </div>
                        <div class="main-container">
                            <div class="row mn-10 mt-1">
                                <ul class="col-xl-6 col-lg-12 pr-3 pl-3 mb-0 w-100">
                                    <li class="mb-2">
                                        <label>Desciption of Property Type:</label>
                                        <input type="text" name="" class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label>Serial/Engine No.:</label>
                                        <input type="text" name="" class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label>Acquisition Date:</label>
                                        <input type="date" name="" class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label>Location:</label>
                                        <input type="text" name="" class="w-100">
                                    </li>
                                </ul>
                                <ul class="col-xl-6 col-lg-12 pr-3 pl-3 m-0 w-100">
                                    <li class="mb-2">
                                        <label> Brand Model: </label>
                                        <input type="text" name="" class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label>Property No.:</label>
                                        <input type="text" name="" class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label> Acquisition Cost: </label>
                                        <input type="text" name="" placeholder="ex. 2440 - (Php: 2,440.00)" class="w-100">
                                    </li>
                                </ul>            			
                        	</div>
                        </div>
            		    <hr class="ctn-linebreak">
                        <div class="main-container h-auto">
          		            <div class="row mt-2 mr-2 ml-2 ">	
  	    				        <div class="col-xl-6 col-lg-12 pl-3 pr-3 m-0 w-100">
  	        				        <h3 class="p-0 f-w-normal"> Problem Encountered: </h3>
                                    <div class="btn-leftside mb-2">
    	        				        <textarea class="textarea-h" placeholder="Type here..."></textarea>
                                        <div class="mb-2">
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/bold.png"> </button> 
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/italic.png"> </button>
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/underline.png"> </button>
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/list.png"> </button>
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/eraser.png"> </button>
                                        </div>
                                    </div>
  	    				        </div>
  	    				        <div class="col-xl-6 col-lg-12 pl-3 pr-3 m-0 w-100">
  	        				        <h3 class="p-0 f-w-normal"> Corrective Action Performed: </h3>
                                    <div class="btn-rightside mb-2">
    	        				        <textarea class="textarea-h" placeholder="Type here..."></textarea>
                                        <div class="mb-2">
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/bold.png"> </button> 
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/italic.png"> </button>
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/underline.png"> </button>
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/list.png"> </button>
                                            <button > <img class="txt-editor-icon" src="../icons/png-files/eraser.png"> </button>
                                        </div>
                                    </div>
  	    				        </div>
          		            </div>
                        </div>
            	    </div>
                </div>
                <div class="content-btn d-flex flex-column justify-content-end align-items-center w-auto pb-3 g-4">
                    <button class="ctn-btn"> <img src="../icons/png-files/save.png"> </button> 
                    <button button class="ctn-btn"> <img src="../icons/png-files/printer.png"> </button>
                    <button class="ctn-btn"> <img src="../icons/png-files/trash-can.png"> </button> 
                    <button class="ctn-btn"> <img src="../icons/png-files/telegram-original.png"> </button>
                </div>
            </div>
        </main>
    </div>



</body>
</html>