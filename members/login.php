<?php require_once("../included.php"); ?>
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
					<span class="left">
						<img src="../img/logo.png">
					</span>
					<?php include_once("menu.php"); ?>
				</div>
			</div>
			<div id="slider-wrapper">
				<div id="slider" class="restOfThePages">
					<img src="../img/about.png"/>					
				</div>
			</div>	
			<div class="bodytext">
				<h1>Login</h1>
				<form id="loginForm">
					<div class="row">
						<div class="large-3 columns">
							<label for="username" class="right inline">Username:</label>
						</div>
						<div class="large-9 columns">
							<input type="text" id="username"  />
						</div>
					</div>		
					<div class="row">
						<div class="large-3 columns">
							<label for="password" class="right inline">Password:</label>
						</div>
						<div class="large-9 columns">
							<input type="password" id="password" />
						</div>
					</div>		
					<a href="#" class="button">Login</a>
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