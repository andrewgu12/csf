<?php require_once("../included.php");
	require_once("login.php");

	  if($_REQUEST['title']){
			$title = $_REQUEST['title'];
			$date = $_REQUEST['unixtime'];
			$limit = $_REQUEST['limit'];
			$time = $_REQUEST['time'];
			$location = $_REQUEST['location'];
			$description = $_REQUEST['eventDesc'];
			
			mysqli_query($conn, "INSERT INTO `activities` (`name`, `date`, `desc`, `limit`, `time`, `location`) VALUES ('$title', '$date', '$description', '$limit', '$time', '$location')") or DIE($mysqli_error($conn));
			
			header("Location: events_all.php");
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
					<h1>Add Events</h1>
					<p>You can use these html tags while writing the entry.</p>					
						<ul id="codeWords">
							<li><code>&lt;a&gt;</code>: Link files. Usage:<code>&lt;a href="link_url"&gt;File Name&lt;/a&gt;</code>. </li>
							<li><code>&lt;b&gt;</code>: Bold words. Usage: <code>&lt;b&gt;Words&lt;/b&gt;</code> </li>
							<li><code>&lt;em&gt;</code>: Emphasize words. Usage: <code>&lt;em&gt;Words&lt;/em&gt;. </code></li>
						</ul>
						<p>Click on the 'Preview entry' link to preview your post before submission.</p>
					<form id="submitEvents" method="post" action="events_add.php">
						<label for="title" class="left">Title</label><br />
						<input type="text" id="title"  name="title"/>						
						<label for="date" class="left">Date (MM/DD/YYYY)</label><br />
						<input type="text" id="date"  name="date"/>
						<input type="hidden" id="unixtime" name="unixtime"  />
						<label for="limit" class="left">Event Limit</label>
						<input type="text" id="limit" name="limit" />
						<label for="time" class="left">Event Time</label>
						<input type="text" id="time" name="time" />
						<label for="location" class="left">Event Location</label> <br />
						<input type="text" id="location" name="location" />
						<label for="eventDesc" class="left">Description</label> <br />
						<textarea id="eventDesc" name="eventDesc" ></textarea>
						<div class="row">
							<div class="left"><a href="#" id="modal-preview-event" data-reveal-id="modal-preview">Preview entry</a></div>
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
		<script src="js/foundation/foundation.reveal.js"></script>
		<script src="js/moment.js"></script>
		<script>
		$(document).foundation();
		</script>
		<script src="js/library.js"></script>		
		<div id="modal-preview" class="reveal-modal">							
			Event Title: <h3 id="modal-title"></h3>
			Event Date: <p id="modal-date"></p>
			Event Limit: <p id="modal-limit"></p>
			Event Time: <p id="modal-time"></p>
			Event Location: <p id="modal-location"></p>
			Event Description: <p id="modal-desc"></p>			
			<a class="close-reveal-modal">&#215;</a>
		</div>
	</body>
</html>