<?php require_once("../included.php");
	require_once("login.php");
	
	$index = $_REQUEST['id'];
	
	$result = mysqli_query($conn, "SELECT * FROM `news` WHERE `index`='$index' LIMIT 1");	
	$news = mysqli_fetch_array($result);
					
	 if($_REQUEST['title']){
			$title = $_REQUEST['title'];
			$date = time();
			$content = $_REQUEST['actualNews'];
			
			mysqli_query($conn, "UPDATE `news` set  `title`='$title', `date`='$date', `content`='$content' WHERE `index`='$index' LIMIT 1");
			
			header("Location: all_news.php");
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
					<h1>Edit News</h1>
					<p>You can use these html tags while writing the entry.</p>					
						<ul id="codeWords">
							<li><code>&lt;a&gt;</code>: Link files. Usage:<code>&lt;a href="link_url"&gt;File Name&lt;/a&gt;</code>.</li>
							<li><code>&lt;b&gt;</code>: Bold words. Usage: <code>&lt;b&gt;Words&lt;/b&gt;</code> </li>
							<li><code>&lt;em&gt;</code>: Emphasize words. Usage: <code>&lt;em&gt;Words&lt;/em&gt;. </code></li>
						</ul>
						<p>Click on the 'Preview entry' link to preview your post before submission.</p>
					<form id="submitNews" method="post">
						
						<label for="title" class="left">Title</label>
						<input type="text" id="title"  name="title" <?php echo 'value="'.$news['title'].'"' ; ?>/>
						<label for="actualNews" class="left">Content</label>
						<textarea id="actualNews" name="actualNews" class="actualNews"><?php echo htmlspecialchars($news['content']); ?></textarea>
						<div class="row">
							<div class="left"><a href="#" id="modal-preview-news" data-reveal-id="modal-preview">Preview entry</a></div>
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