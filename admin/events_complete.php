<?php require_once("../included.php");
	require_once("login.php");

	if($_REQUEST['hours']){			
			$index = $_REQUEST['id'];
			$result = mysqli_query($conn, "SELECT * FROM `activities` WHERE `id`='$index' LIMIT 1") or die(mysqli_error($conn));
			$eventhours = $_REQUEST['hours'];
			$peopleNumber = 1;
			while($act = mysqli_fetch_array($result)){				
				$users = substr($act['users'],1);				
				$userarr = explode(",", $users);
				
				foreach($userarr as $value){
					echo $_REQUEST['hours'];
					$ur = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid` = '$value' LIMIT 1");
					$ua = mysqli_fetch_array($ur);
					echo $value;
					$currenthours = $ua['hours'];
					$newhours = $currenthours+$eventhours;
					if(isset($_REQUEST[$peopleNumber]) && $_REQUEST[$peopleNumber] == 'yes') {
						mysqli_query($conn, "UPDATE `user` SET `hours`='$newhours' WHERE `studentid`='$value' LIMIT 1");
					}
					$peopleNumber++;
				}			
			}
			
			mysqli_query($conn, "UPDATE `activities` SET `complete`='1' WHERE `id`='$index' LIMIT 1");
			
			header("Location: events_open.php");
	}			
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
					<h1>Close Event</h1>
					<p>This page will officially close an event and give members hours, officiallly removing it from the listings.</p>
					<?php
						$id = $_REQUEST['id'];
						$query = mysqli_query($conn, "SELECT * FROM  `activities` WHERE `id` = '$id' LIMIT 1");
						$act = mysqli_fetch_array($query) ;

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

						$userarr = explode(",", $users);
						$carpool = array(count($userarr));						
						$users = "";
						
						foreach($userarr as $key=>$value){
							$ur = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid` = '$value' LIMIT 1");
							$ua = mysqli_fetch_array($ur);
							$firstName = $ua['name'];
							$lastName = $ua['lastName'];						
							$fullName = $firstName." ".$lastName;					
							$users .= "<br/>".$fullName;
						}
						echo "<div id='closeEvents'>";
						echo "<h2>$name</h2>";
						echo "<p><em>$date</em><br />";
						echo "<b>Time:</b> $time<br/>";
						echo "<b>Location: </b>$location<br/>";
						echo "<b>Who's Attending:</b>$users<br/>";
						echo "</p></div>";										
					?>
					<form action="events_complete.php?id=<?= $index ?>" method="post" id="completeEvents">
					How many hours to give for this event?<br/><input name="hours" type="text" id="hours"/>					
					<?php
						echo "Who gets hours? <br />";						
						$query = mysqli_query($conn, "SELECT * FROM  `activities` WHERE `id` = '$id' LIMIT 1");
						$attNumber = 1;
						while ($row = mysqli_fetch_array($query)) {
							$attendees = substr($row['users'],1);							
							$attarr = explode(",", $attendees);		

							$atthours = array(count($attarr));							
							foreach($attarr as $value){								
								$ur = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid` = '$value' LIMIT 1");
								$ua = mysqli_fetch_array($ur);
							
								$attendees = $ua['name']." ".$ua['lastName'];
								echo "<input type='checkbox' name=$attNumber id=$attNumber value='yes' checked /> $attendees";
								echo "<br />";
								$attNumber++;
							}
						}
					?>
					<input type="submit" class="button"/>
					</form>
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