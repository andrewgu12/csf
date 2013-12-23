<?php require_once("../included.php");
	require_once("login.php");

	  if($_REQUEST['studID']){	  	
		$firstName = mysqli_real_escape_string($conn, trim($_REQUEST['firstName']));
		$lastName = mysqli_real_escape_string($conn, trim($_REQUEST['lastName']));
		$grade = mysqli_real_escape_string($conn, $_REQUEST['grade']);
		$id = mysqli_real_escape_string($conn, $_REQUEST['studID']);
		$email =  mysqli_real_escape_string($conn, $_REQUEST['email']);
		$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
		$admin = mysqli_real_escape_string($conn, $_REQUEST['admin']);		
		$password = $firstName . " " . $lastName;
		$password = sha1($password);
		
		mysqli_query($conn, "INSERT INTO `user`(`studentid`, `name`, `lastName`, `email`, `password`, `admin`,`hours`, `grade`, `phone`) VALUES ('$id', '$firstName', '$lastName', '$email', '$admin', '$password', '0', '$grade', '$phone')") or DIE(mysqli_error($conn));

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
					<h1>Add Members</h1>					
					<form method="post" action="members_add.php" id="createMembers">
						<div class="row">
							<div class="large-6 columns">
								<label for="firstName" class="left">First Name</label>
								<input type="text" id="firstName" name="firstName" />
							</div>
							<div class="large-6 columns">
								<label for="lastName" class="left">Last Name</label>
								 <input type="text" id="lastName" name="lastName" />
							</div>
						</div>
						<div class="row secondrow">
							<div class="large-6 columns">
								<label for="studID" class="left">Student ID</label>
								<input type="text" id="studID"  name="studID" />
							</div>
							<div class="large-3 columns">
								<label for="grade" class="left">Grade</label>
								 <input type="text" id="grade" name="grade"/>
							</div>
							<div class="large-3 columns">
								<label for="admin" class="left">Admin</label>
								<select id="admin" name="admin">
									<option value="enable">Yes</option>
									<option value="no">No</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns">
								<label for="email" class="left">Email</label>
								<input type="text" id="email" name="email" />
							</div>
							<div class="large-6 columns">
								<label for="phone" class="left">Phone</label>
								<input type="text" id="phone" name="phone" />
							</div>
						</div>
						<input type="submit" class="button center" value="Add!">
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