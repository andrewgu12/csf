<?php require_once("../included.php");
	require_once("login.php");
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
					<h1>All News</h1>				
						<?php
							$result = mysqli_query($conn, "SELECT * FROM `activities`");							
							while($act = mysqli_fetch_array($result)){		
								//print_r($act);
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

								if($act['complete']=='1') {continue;}
								$userarr = split(",", $users);
								$count = array(count($userarr));
								$users = "";

								foreach($userarr as $key=>$value) 
								{
									$userQuery = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$value' LIMIT 1");
									$ua = mysqli_fetch_array($userQuery);
									$firstName = $ua['name'];
									$lastName = $ua['lastName'];						
									$fullName = $firstName." ".$lastName;
									$users .= ", " . $fullName; 
								}

								$users = substr($users, 2);
								echo "<div id='indivEvents'>";
								echo "<h2>$name</h2>";
								echo "<p><em>$date</em><br />";
								echo "<b>Time:</b> $time<br/>";
								echo "<b>Location:</b> $location<br/>";
								echo "<b>Description:</b> $desc<br />";
								echo "<b>Current Signups:</b> $curr <br/> <b>Signup Limit:</b> $limit<br />";
								echo "<b>Who's Attending:</b> $user<br />";
								echo "<a href='events_complete.php?id=$index'>Complete</a>, <a href='events_print.php?id=$index'>Print List</a>, <a href='events_edit.php?id=$index'>Edit</a> or <a href='events_delete.php?id=$index'>Delete</a></p>";
								echo  "</div>";
							}
							echo "</p>";
												
						?>

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