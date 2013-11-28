<?php require_once("../included.php") ;
	if($_REQUEST['studentid']=='admin' && $_REQUEST['password'] =='mvcsf')
	{
		$_SESSION['user']='admin';
		$_SESSION['admin'] = 'admin';
		header("Location: index_home.php");
	}	
	if($_REQUEST['studentid'])
	{
		$user = $_REQUEST['studentid'];
		$pass = $_REQUEST['password'];
		$results = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$user' LIMIT 1");
		$student = mysqli_fetch_array($results);

		if(sha1($pass) == $student['password'] && $student['admin'] == 'enable') 
		{
			$_SESSION['user'] = $user;
			$_SESSION['admin'] = $user;
			header("Location: index_home.php");
		}		
	}
	if(isset($_SESSION['user']) && isset($_SESSION['admin']))  
	{
		header("Location: index_home.php");
		die;
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
			<div id="content" class="loginform">
				<h1>Admin Login</h1>
				<form id="loginForm" method="post" action="index.php">
					<div class="row">
						<div class="large-3 columns">
							<label for="studentid" class="right inline">Student ID:</label>
						</div>
						<div class="large-9 columns">
							<input type="text" id="studentid"  name="studentid"/>
						</div>
					</div>		
					<div class="row">
						<div class="large-3 columns">
							<label for="password" class="right inline">Password:</label>
						</div>
						<div class="large-9 columns">
							<input type="password" id="password" name="password"/>
						</div>
					</div>		
					<input type="submit" class="button" value="Login">
				</form>
			</div>
			<footer>
				&copy; Monta Vista CSF 2013. All Rights Reserved.
			</footer>
		</div>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation/foundation.js"></script>
	</body>
</html>