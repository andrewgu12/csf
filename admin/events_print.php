<?php require_once("../included.php");
	require_once("login.php");
		$index = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>CSF Admin Control Panel</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/app.css">	
		<link rel="stylesheet" href="css/styles.css">
		<script src="custom.modernizr.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="banner">							
				<img src="img/logo.jpg" />									
			</div>
			<div id="content">
				<nav id="sidebar">
					<?php require_once("menu.php"); ?>
				</nav>
				<div id="mainContent">
					<h1>Print Event</h1>					
					<?php
					
					$result = mysqli_query($conn, "SELECT * FROM `activities` WHERE `id`='$index' LIMIT 1");
					while($act = mysqli_fetch_array($result)){
						$index = $act['id'];
						$name = $act['name'];
						$limit = $act['limit'];
						$close = $act['close'];
						$curr = $act['curr'];
						$time = $act['time'];
						$location = $act['location'];
						$date = date("D, j M", $act['date']);
						$desc = str_replace("\n", "<br/>", $act['desc']);
						$users = substr($act['users'],1);
							
							$userarr = split(",", $users);
							$carpool = array(count($userarr));
							
							$users = "";
							
							foreach($userarr as $key=>$value){
								$ur = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid` = '$value' LIMIT 1");
								$ua = mysqli_fetch_array($ur);
								
								$users .= "<br/>".$ua['name']. " ".$ua['lastName']." (".$ua['phone'].") ".$ua['email'];
							}
						
						echo "<div id='closeEvents'>";
						echo "<h2>$name</h2>";
						echo "<p><em>$date</em><br />";
						echo "<b>Time:</b> $time<br/>";
						echo "<b>Location: </b>$location<br/>";
						echo "<b>Who's Attending:</b>$users<br/>";
						echo "</p></div>";	
					
					} ?>
				</div>
			</div>
			<footer>
				&copy; Monta Vista CSF 2013. All Rights Reserved. RamenCMS by Andrew Gu.
			</footer>
		</div>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation/foundation.js"></script>
		<script>
		$(document).foundation();
		</script>
		<script src="js/library.js"></script>		
	</body>
</html>