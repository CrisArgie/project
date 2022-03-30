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
            <form class="content-menu" action="../results.html" method="GET" enctype="multipart/form-data">
                <div class="content-table">
            	    <div class="ctn-container"> 
            		    <div class="main-container mt-4">
                            <div class="row justify-content-between p-0">
              			        <div class="col-xl-4 col-lg-12">
                                    <div class="d-flex flex-row g-3">
              				            <label for="id_no"> No.: </label>
              				            <input type="text" readonly tabindex="-1"
                                        name="id_no"
                                        id="id_no"
                                        value=""
                                        class="disabling-input w-100">	
                                    </div>
              			        </div>
              			        <div class="col-xl-4 col-lg-12">
                                    <div class="d-flex flex-row g-2 justify-content-end">
                                        <label for="date_requested"> Date: </label>
                                        <input type="text" readonly tabindex="-1"
                                        name="date_requested" 
                                        id="date_requested"
                                        value="<?php echo date('m-d-Y'); ?>" 
                                        class="disabling-input w-100">	
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
                                        <label for="dscpt_property_type">Desciption of Property Type:</label>
                                        <input type="text" 
                                        name="dscpt_property_type"
                                        id="dscpt_property_type"
                                        class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label for="serial_engine_no">Serial/Engine No.:</label>
                                        <input type="text" 
                                        name="serial_engine_no"
                                        id="serial_engine_no" 
                                        class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label for="acquisition_date">Acquisition Date:</label>
                                        <input type="date" 
                                        name="acquisition_date" 
                                        id="acquisition_date"
                                        class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label for="request_location">Location:</label>
                                        <input type="text" 
                                        name="request_location" 
                                        id="request_location"
                                        class="w-100">
                                    </li>
                                </ul>
                                <ul class="col-xl-6 col-lg-12 pr-3 pl-3 m-0 w-100">
                                    <li class="mb-2">
                                        <label for="brand_model"> Brand Model: </label>
                                        <input type="text" 
                                        name="brand_model" 
                                        id="brand_model"
                                        class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label for="property_no">Property No.:</label>
                                        <input type="text" 
                                        name="property_no" 
                                        id="property_no"
                                        class="w-100">
                                    </li>
                                    <li class="mb-2">
                                        <label for="acquisition_cost"> Acquisition Cost: </label>
                                        <input type="text" 
                                        name="acquisition_cost" 
                                        id="acquisition_cost"
                                        placeholder="ex. 2440 - (Php: 2,440.00)" class="w-100">
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
                                        <label for="problem_encountered" hidden></label>
    	        				        <textarea class="textarea-h" 
                                        name="problem_encountered"
                                        id="problem_encountered"
                                        placeholder="Type here..."></textarea>
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
                                        <label for="corrective_action_performed" hidden></label>
    	        				        <textarea class="textarea-h" 
                                        name="corrective_action_performed"
                                        id="corrective_action_performed"
                                        placeholder="Type here..."></textarea>
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
                    <button type="submit" class="ctn-btn"> <img src="../icons/png-files/telegram-original.png"> </button>
                </div>
            </form>
        </main>
    </div>



</body>
</html>