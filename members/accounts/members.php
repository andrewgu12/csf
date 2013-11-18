<?php
	include('included.php'); 
 	if($_REQUEST['studentid']){
			$user = $_REQUEST['studentid'];
			$password = $_REQUEST['password'];
			
			$results = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$user' LIMIT 1");
			$student = mysqli_fetch_array($results);
			if(sha1($password) == $student['password']){
				$_SESSION['user'] = $user;
				
				if($_GET['target'] == ""){
					header("Location: members_home.php"); die;
				} else {
					header("Location: ".$_GET['target'].".php"); die;
				}
			}
			
	  }
	  
	  if($_SESSION['user']){
			header("Location: members_home.php");
			die;
	  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?= $title; ?></title>
<link rel="stylesheet" href="css/foundation.min.css" />
<link rel="stylesheet" href="css/default.css" />
<link rel="stylesheet" href="css/portfolio.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
</head>

<body>
<div id="main">
	<div id="header">
	
	</div>
	
	<div id="nav">
		<?php include("nav.php"); ?>
	</div>
	
	<div id="content">		
		<div id="content_inner">	
        	<form id="form1" name="form1" method="post" action="members.php?target=<?= $_GET['target'] ?>">
				<p>
					<label for="studentid">Student ID</label>
					<br />
					<input type="text" name="studentid" id="studentid" />
				</p>
				<p>
					<label for="password">Password</label>
					<br />
					<input type="password" name="password" id="password" />
				</p>
				<p>
					<input type="submit" name="button" id="button" value="Submit" />
				</p>
			</form>
			<h1>&nbsp;</h1></div>
           
		</div>
	</div>
	
	<div id="footer">
		<?php include("../footer.php"); ?>
	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/custom.modernizr.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/library.js"></script>
<script src="js/search.js"></script>
</body>
</html>