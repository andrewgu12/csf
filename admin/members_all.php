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
					<h1>All Members</h1>				
						<table id="all_members">
							<tr>
								<th>Name</th>
								<th>Grade</th>
								<th>Hours</th>								
								<th>ID</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Edit</th>
							</tr>
							<?php
								$result = mysqli_query($conn, "SELECT * FROM `user` ORDER BY `grade` ASC, `lastName` ASC") or  DIE(mysqli_error($conn));
								while($row = mysqli_fetch_array($result)){
									echo "<tr>";
										$firstname = $row['name'];																					
										$lastName = $row['lastName'];
										$name = $firstname  . ' ' . $lastName;
										$email = $row['email'];
										$grade = $row['grade'];
										$studentid = $row['studentid'];
										$hours = $row['hours'];
										$phone = $row['phone'];
										echo "<td>$name</td>";
										echo "<td>$grade</td>";
										echo "<td>$hours</td>";
										echo "<td>$studentid</td>";
										echo "<td>$email</td>";
										echo "<td>$phone</td>";
										echo "<td><a href='members_edit.php?id=$studentid'>Edit</a> <a href='javascript:void(0)' onclick=\"deleteMembers('$studentid');\">Delete</a>";
									echo "</tr>";
								}
							?>
						</table>

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