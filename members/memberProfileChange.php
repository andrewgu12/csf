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
							<div id="profile" class="members_home">								
							    <h2>Update Personal Profile</h2>
							    <form id="form1" name="form1" method="post" action="members_profile_chg.php" enctype="multipart/form-data">
							        <label for="student" class="left">Student ID</label><br />
							        <input type="text" id="student" name="student" value="<?= $user ?>" disabled /><br/>        
							        <label for="name" class="left">First Name</label> <br />
							        <input type="text" id="name" name="name" value="<?= $current['name'] ?>" /><br/>
							        <label for="lastname" class="left">Last Name</label> <br />
							        <input type="text" id="lastname" name="lastname" value="<?= $current['lastName'] ?>" /><br/>        
							        <label for="email" class="left">Email</label> <br />
							        <input type="text" id="email" name="email" value="<?= $current['email'] ?>" /><br/>
							        <label for="grade" class="left">Grade</label> <br />
							        <input type="text" id="grade" name="grade" value="<?= $current['grade'] ?>" /><br/>    
							        <label for="password" class="left">Password</label> <br />
							         <input type="password" id="pass" name="pass" /><br/>                    
							         <label for="phone" class="left">Phone</label><br />
							        <input type="text" id="phone" name="phone" value="<?= $current['phone'] ?>" /><br/>        
							        <p><input type="file" name="file" id="file"><br>
							        Upload profile picture. <br />
							        Notes: <br />
							        <ul>
							        	<li>Please crop the image to 180px(width) by 155px(height).</li>
							            <li> Images are to be no bigger than 200 kb. </li>
							            <li>Please change the file name to your user id (i.e. 123546.png).</li>
							            <li>Pictures are to be only .jpg or .png.</li>
							            <li> If you need help, email andrew@mingbogu.com.</li>
							            </ul>
							        </p>
							        <br/>
							        <p><input type="submit" class="button" id="submit" name="submit" /></p>
							    </form>
							</div>
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