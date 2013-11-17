<?php require_once("included.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width" />
		<title>Monta Vista CSF</title>
		<!--app.css has Foundation styles, styles.css has custom styles-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/app.css" />		
		<link rel="stylesheet" href="css/styles.css" />		
		<script src="js/custom.modernizr.js"></script>
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
					<img src="img/join.png"/>					
				</div>
			</div>	
			<div class="bodytext">
				<div id="regform">
					<h3>Success!</h3>
					<p>Welcome to CSF! Login with your account info and start volunteering.<br />
						Your username is your student id and your password is your first name and last name. Ex:<br />
						Username: 123456<br />
						Password: Patrick Star <br />
					</p>
				</div>
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<?php include_once("footer.php"); ?>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  	
		<script>
			  document.write('<script src=/js/'
			    + ('__proto__' in {} ? 'zepto' : 'jquery')
			    + '.js><\/script>');
		</script>		
		<script src="js/foundation.js"></script>
		<script src="js/foundation.forms.js"></script>
      	  	<script src="js/scripts.js"></script>
	</body>
</html>