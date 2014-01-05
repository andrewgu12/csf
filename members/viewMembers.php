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
		<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
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
			                        	<?php
							 	echo "<div id='searchForMembers'>";
								echo "<p style='font-size: 16px;'>Click on a category to begin searching. Leave blank to search all.</p>";
								echo "<form id ='memberSearch'>";
								echo "<table>";
								echo "<tr>";
								echo "<td><label for='grade'>Grade</label></td>";
								echo "<td><label for='firstName'>First Name</label></td>";
								echo "<td><label for='lastName'>Last Name</label></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td><select id='grade' name='grade' onchange='javascript:searchMembers()'>";
								echo "<option> </option>";
								echo "<option value='9'>9</option>";
								echo "<option value='10'>10</option>";
								echo "<option value='11'>11</option>";
								echo "<option value='12'>12</option>";
								echo "</select></td>";
								echo "<td><input type='text' id='firstName' name='firstName' onkeyup='javascript:searchMembers()'/></td>";
								echo "<td><input type='text' id='lastName' name='lastName' onkeyup='javascript:searchMembers()'/></td>";
								echo "</tr>";
								echo "</table></form>";
								echo "<div id='searchOutput'>";
								include("search.php");
								echo "</div>";
								echo "</div>";
							?>
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
		<script src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
      	  	<script src="js/library.js"></script>
	</body>
</html>