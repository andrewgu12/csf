<?php require_once("../included.php");
	require_once("login.php");
	if($_REQUEST['confirm'] == "CSF Love")
	{		
		$query = mysqli_query($conn, "SELECT * FROM `user`");
		//record the users' hours
		while($results = mysqli_fetch_array($query))
		{
			$origStud = $results['studentid'];
			$origHours = $results['hours'];
			$secondDb = 'userHistory';
			$newConn = mysqli_connect($hostname, $username, $password, $secondDb);			
			$secondQuery = mysqli_query($newConn, "SELECT * FROM 	`history` WHERE `id`='$origStud' ");
			$secondResult = mysqli_fetch_array($secondQuery);			
			//check if the user already exists in the database; if not, then add the user in
			if(!$secondResult)
			{
				$secondQuery = mysqli_query($newConn, "INSERT INTO `history` (`id`, `hours`) VALUES ('$origStud', $origHours)");				
			}
			//update the user's entry with the current amount of hours
			else 
			{				
				$pastHours = $secondResult['hours'];
				$totalHours = $origHours + $pastHours;
				$secondQuery = mysqli_query($newConn, "UPDATE `history` SET `hours`='$totalHours' WHERE `id`='$origStud'");				
			}
		}

		//truncate the table
		mysqli_query($conn, "TRUNCATE TABLE `user`");
		mysqli_query($conn, "TRUNCATE TABLE `activities`");
		mysqli_query($conn, "TRUNCATE TABLE `suggestedEvents`");
		mysqli_query($conn, "TRUNCATE TABLE `news`");
		header("Location: index_home.php");
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
					<h1>Data Reset</h1>								
					<form id="dataReset" method="post" action="data_reset.php">												
						<label for="confirm" class="left">Type <b>CSF Love</b> to confirm data reset. (Warning: This operation shifts a <b>massive</b> amount of data, so do not be alarmed if it's taking a while.)</label> <br />						
						<input type="text" id="confirm"  name="confirm"/>
						<div class="row">							
							<div class="right"><input type="submit" class="button" value="Submit"></div>
						</div>
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