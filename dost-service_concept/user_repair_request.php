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
<!-- Leftside menus -->
          	<a href="user_request.php" class="return-icon">
              <img src="icons/png-files/chevron-left.png">
            </a>
<!-- Middleside menus -->
            <div class="content-table">
<!-- Container -->
            	<div class="ctn-container"> 
            		<div class="row d-flex justify-content-between m-10">
            			<div>
            				<label> No.: </label>
            				<input type="text" name="" disabled>	
            			</div>
            			<div>
            				<label> Date: </label>
            				<input type="text" name="" disabled>	
            			</div>
            		</div>

            		<div class="row ctn-header mt-2">
            			<h2>REQUEST FOR REPAIR</h2>
            		</div>
            		<div class="row d-flex justify-content-center mn-10 mt-1 g-5">

	    				<ul class="d-flex flex-column p-0 m-0 w-100">
	        				<li class="d-flex flex-column mb-2">
	        					<label>Desciption of Property Type:</label>
	        					<input type="text" name="">
	        				</li>
	        				<li class="d-flex flex-column mb-2">
	        					<label>Serial/Engine No.:</label>
	        					<input type="text" name="">
	        				</li>
	        				<li class="d-flex flex-column mb-2">
	        					<label>Acquisition Date:</label>
	        					<input type="date" name="">
	        				</li>
	        				<li class="d-flex flex-column">
	        					<label>Location:</label>
	        					<input type="text" name="">
	        				</li>
	        			</ul>

	    				<ul class="d-flex flex-column p-0 m-0 w-100">
	        				<li class="d-flex flex-column mb-2">
	        					<label> Brand Model: </label>
	        					<input type="text" name="">
	        				</li>
	        				<li class="d-flex flex-column mb-2">
	        					<label>Property No.:</label>
	        					<input type="text" name="">
	        				</li>
	        				<li class="d-flex flex-column">
	        					<label> Acquisition Cost: </label>
	        					<input type="text" name="" placeholder="ex. 2440 - (Php: 2,440.00)">
	        				</li>
	        			</ul>
            			
            		</div>

            		<hr class="ctn-linebreak">

            		<div class="bottom-content d-flex justify-content-center mt-2 mn-10 g-4">
	    				
	    				<div class="d-flex flex-column p-0 m-0 w-100 h-100">
	        				<h3> Problem Encountered: </h3>
	        				<textarea class="textarea-h" placeholder="Type here..."></textarea>
	        				<div class="mt-2 ml-1">
	    						<button > <img class="txt-editor-icon" src="icons/png-files/bold.png"> </button> 
	    						<button > <img class="txt-editor-icon" src="icons/png-files/italic.png"> </button>
	    						<button > <img class="txt-editor-icon" src="icons/png-files/underline.png"> </button>
	    						<button > <img class="txt-editor-icon" src="icons/png-files/list.png"> </button>
	    						<button > <img class="txt-editor-icon" src="icons/png-files/eraser.png"> </button>
	        				</div>
	    				</div>
	    				<div class="d-flex flex-column p-0 m-0 w-100 h-100">
	        				<h3> Corrective Action Performed: </h3>
	        				<textarea class="textarea-h" placeholder="Type here..."></textarea>
	        				<div class="mt-2 ml-1">
	    						<button > <img class="txt-editor-icon" src="icons/png-files/bold.png"> </button> 
	    						<button > <img class="txt-editor-icon" src="icons/png-files/italic.png"> </button>
	    						<button > <img class="txt-editor-icon" src="icons/png-files/underline.png"> </button>
	    						<button > <img class="txt-editor-icon" src="icons/png-files/list.png"> </button>
	    						<button > <img class="txt-editor-icon" src="icons/png-files/eraser.png"> </button>
	        				</div>
	    				</div>

            		</div>
            	</div> <!-- END of Container -->
            </div>
<!-- Rightside menus -->
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