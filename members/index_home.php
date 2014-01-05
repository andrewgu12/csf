<?php require_once("../included.php"); 
	     require_once("login.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width" />
		<title>Monta Vista CSF</title>
		<!--app.css has Foundation styles, styles.css has custom styles-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/app.css" />		
		<link rel="stylesheet" href="../css/styles.css" />
		<link rel="stylesheet" href="../css/nivo-slider.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">		
		<script src="../js/custom.modernizr.js"></script>

	</head>
	<body>
		<div id="wrapper">
			<div id="header-wrapper">
				<div id="header">
					<?php include_once("menu.php"); ?>
				</div>
			</div>
			<div id="slider-wrapper">
				<div id="slider" class="restOfThePages">
					<img src="../img/members.png"/>					
				</div>
			</div>	
			<div class="bodytext">
				<div id="topContent">					    
			                    <?php require_once("header.php");?>
				</div>	
		            <div id="bottomContent">
			            	<div id="side-bar">	
			                    <ul class="side-nav">
			                    		<?php require_once("sidebarMenu.php"); ?>
			                    </ul>	
			               </div>
			               <div id="bottomMainContent">
			                        <div id="loading"><img src="images/loading.gif" style="display: none;"></div>
			                        <div id="bottomContentWords">
			                   		<h1> Greetings!</h1>
			                                 <p>Welcome to your new member account. Here's a rundown of each of the tabs: </p>
			                                <ol>
			                              	<li><b>Introduction: </b> Returns to this page.</li>
			                                  <li><b>Your Profile: </b> Edit your information.</li>
			                                  <li><b>Other Members: </b> Here you can view all the other members in MVCSF. </li>
			                                  <li><b>Suggest an Event: </b> Here you can suggest a place for volunteering. </li>
			                                  <li><b>Registered Events: </b>Events you signed up for. If this page is blank, that means you haven't signed up for anything!</li>
			                                  <li><b>Upcoming Events: </b>Any events that are coming up.</li>
			                                  <li><b>Logout: </b>Self explanatory. </li>
			                              </ol>
			                      </div>
			               </div>
			           </div>		
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<?php include_once("../footer.php"); ?>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		<script src="../js/jquery.js"></script>  	
		<script src="../js/nivo-slider.js"></script>
		<script src="../js/foundation.js"></script>
      	  	<script src="js/library.js"></script>
	</body>
</html>