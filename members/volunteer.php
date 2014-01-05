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
<?php

				
				$results = mysqli_query($conn, "SELECT * FROM `activities` ORDER BY `date`") or die($conn);
				while($event = mysqli_fetch_array($results)){
					$name = $event['name'];
					$id = $event['id'];
					$date = date("D, j M",$event['date']);
					$desc = trim($event['desc'], " ");
					$desc = str_replace("\n", "<br/>", $desc);					
					$users = $event['users'];
					$limit = $event['limit'];
					$curr = $event['curr'];
					$left = $limit - $curr;
					$time = $event['time'];
					$location = $event['location'];
					if($act['complete'] == 1) { continue; }
					
					$now =  time(); 
				
					if ($event['date'] < $now){
						continue; // skip finished events
					}
				
					// close value of 1 overrides now
					// actual time minus three days for locking period
					//if($event['date'] - (3*24*60*60) > $now || $event['close'] == 1) {
						echo "<b><u>$name</u></b> on $date<br/><br />";
						echo "<b>Time: $time</b><br/><br />";
						echo "<b>Location: $location</b><br/><br />";
						echo "$desc";
						echo "<br/>$left out of $limit spaces left";
						
						// if user already signed up, do not allow to re-sign up, check limits
						if(!strstr($users, $user) && ($left > 0 )){
							echo "<br/><a href='v_signup.php?id=$id'>[Signup]</a><br/><br/>";
						} else {
							echo "<br/><br/>";
						}
					//}
				}
				
		
			
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
      	  	<script src="js/library.js"></script>
	</body>
</html>