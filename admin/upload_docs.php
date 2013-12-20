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
					<h1>Upload Documents</h1>				
					<p>All documents here will be located in the ../docs/ folder.</p>
					 <p>To link to these files, replace the link_url in the href tag with "../docs/NameOfFile.pdf" (no quotes). </p>
					<form id="uploadDocs" action="uploadPDF.php" enctype ="multipart/form-data" method="post">												
						<input type="file" name="documents" id="documents">
						<input type="submit" class="button" value="Upload!"/>
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