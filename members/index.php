<?php 
	require_once("../included.php"); 	
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'on');
   	if($_REQUEST['studentid']){
			$user = $_POST['studentid'];
			$password = $_POST['password'];
			$results = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$user' LIMIT 1");
			$student = mysqli_fetch_array($results);
			if(sha1($password) == $student['password']){				
				$_SESSION['user'] = $user;
				
				if($_GET['target'] == ""){
					header("Location: index_home.php"); die;
				} else {
					header("Location: ".$_GET['target'].".php"); die;
				}
			}
			
	  }
	  
	  if($_SESSION['user']){
			header("Location: index_home.php");
			die;
	  }
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
			<div class="bodytext noPadding">
				<h1>Login</h1>
				<form id="loginForm" method="post" action="index.php?target=<?= $_GET['target'] ?>">
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
      	  	<script src="../js/scripts.js"></script>
	</body>
</html>