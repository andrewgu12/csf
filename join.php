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
		<link rel="stylesheet" href="css/nivo-slider.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">		
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
				<form id="joinUs" class="custom">
					<p>Ready to join CSF? Just fill out this form, login, and get volunteering!</p>									
					<div class="row">
						<div class="large-4 columns">
							<label for="firstName" class="left inline">First Name</label>							
							<input type="text" id="firstName" />						
						</div>
						<div class="large-4 columns">
							<label for="lastName" class="left inline">Last Name</label>							
							<input type="text" id="lastName" />						
						</div>
						<div class="large-4 columns">
							<label for="grade" class="left inline">Grade</label>
							 <select id="grade">
							 	<option value="9">9</option>
							 	<option value="10">10</option>
							 	<option value="11">11</option>
							 	<option value="12">12</option>
							 </select>
						</div>	
					</div>
					<div class="row">
						<div class="large-4 columns">
							<label for="studentID" class="left inline">Student ID</label>
							<input type="text" id="studentID" />
						</div>
						<div class="large-4 columns">
							<label for ="email" class="left inline">Email</label>
							<input type="text" id="email" />
						</div>
						<div class="large-4 columns">
							<label for="phone" class="left inline">Phone Number</label>
							<input type="text" id="phone">
						</div>	 
					</div>
				</form>
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<?php include_once("footer.php"); ?>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		<script src="js/jquery.js"></script>  	
		<script>
			  document.write('<script src=/js/'
			    + ('__proto__' in {} ? 'zepto' : 'jquery')
			    + '.js><\/script>');
		</script>
		<script src="js/nivo-slider.js"></script>
		<script src="js/foundation.js"></script>
      	  	<script src="js/scripts.js"></script>
	</body>
</html>