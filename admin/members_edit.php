<?php require_once("../included.php");
	require_once("login.php");
	//error_reporting(E_ALL);
	//ini_set('display_errors', 1);
	$id = $_REQUEST['id'];
	
	$result = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$id' LIMIT 1");	
	$row = mysqli_fetch_array($result);
					
	 if($_REQUEST['lastName']){
			$firstName = trim($_REQUEST['firstName'], " ");			
			$lastName = trim($_REQUEST['lastName'], " ");
			$name = $firstName . ' ' . $lastName;
			$password = sha1($name);			
			$grade = $_REQUEST['grade'];			
			$email = $_REQUEST['email'];
			$phone = $_REQUEST['phone'];						
			$oldID = $_REQUEST['oldID'];
			$newID = $_REQUEST['studID'];
			mysqli_query($conn, "UPDATE `user` SET  `name`='$firstName', `lastName`='$lastName',  `studentid`='$newID', `password`='$password', `grade`='$grade', `email`='$email', `phone`='$phone' WHERE `studentid`='$oldID' LIMIT 1");
			header("Location: members_all.php");
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
					<h1>Edit Member</h1>					
					<form id="updateData" method="post" action="members_edit.php">						
						<div class="row">
								<div class="large-6 columns">
									<label for="firstName" class="left">First Name</label>									
									<input type="text" id="firstName" name="firstName" value="<?php echo $row['name']; ?>" />
								</div>
								<div class="large-6 columns">
									<label for="lastName" class="left">Last Name</label>
									 <input type="text" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>"/>
								</div>
							</div>
							<div class="row">
								<div class="large-3 columns">
									<label for="hours" class="left">Hours</label>
									<input type="text" id="hours"  name="hours"  value="<?php echo $row['hours']; ?>"/>
								</div>
								<div class="large-3 columns">
									<label for="grade" class="left">Grade</label>
									 <input type="text" id="grade" name="grade" value="<?php echo $row['grade']; ?>"/>
								</div>
								<div class="large-6 columns">
									<label for="id" class="left">ID</label>
									<input type="text" id ="oldID" name="oldID" value="<?php echo $row['studentid']; ?>" style="display: none;" />
									<input type="text" id ="studID" name="studID" value="<?php echo $row['studentid']; ?>" />
								</div>
							</div>
							<div class="row">							
								<div class="large-6 columns">
									<label for="phone" class="left">Phone</label>
									<input type="text" id="phone" name="phone"  value="<?php echo $row['phone']; ?>"/>
								</div>
								<div class="large-6 columns">
									<label for="email" class="left">Email</label>
									<input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"/>
								</div>							
							</div>							
							<input type="submit" class="button" value="Update!" />
					</form> 
				</div>
			</div>
			<footer>
				&copy; Monta Vista CSF 2013. All Rights Reserved. RamenCMS by Andrew Gu.
			</footer>
		</div>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation/foundation.js"></script>
		<script src="js/foundation/foundation.reveal.js"></script>
		<script>
		$(document).foundation();
		</script>
		<script src="js/library.js"></script>		
		<div id="modal-preview" class="reveal-modal">							
			<h3 id="modal-title">News content</h3>
			<div id="modal-content">
			</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>
	</body>
</html>