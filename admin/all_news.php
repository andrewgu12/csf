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
							$result = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC");
							while($news = mysqli_fetch_array($result)){
								$name = $news['title'];
								$date = date("D, j M", $news['date']);
								$content = str_replace("\n", "<br/>", $news['content']);
								$index = $news['index'];
								echo "<div id='newsItem'>";
								echo "<h2>$name</h2><p class='date'><em>$date</em></p>";
								echo "<p>$content</p>";
								echo "<p><a href='edit_news.php?id=$index'>Edit</a> | <a href='delete_news.php?id=$index'>Delete</a></p>";
								echo "</div>";
							}
						?>

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