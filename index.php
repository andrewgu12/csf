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
		<script src="js/custom.modernizr.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header-wrapper">
				<div id="header">
					<span class="left">
						<img src="img/logo.png">
					</span>
					<span class="right">
						<nav class="nav-bar">						
								<ul>
									<li><a href="#">home</a></li>
									<li><a href="#">about</a></li>
									<li><a href="#">volunteer</a></li>
									<li><a href="#">media</a></li>
									<li><a href="#" >members</a></li>
									<li><a href="#">join</a></li>
								</ul>						
						</nav>
					</span>
				</div>
			</div>
			<div id="slider-wrapper">
				<div id="slider" class="nivoSlider">
					<img src="img/slideshow/image1.jpg" title="Welcome to CSF!"/>
					<img src="img/slideshow/image2.jpg" title="Welcome to CSF!" />
				</div>
			</div>	
			<div class="bodytext">
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<div class="row">
					<div class="large-6 columns">
						<ul>
							<li>&copy; Monta Vista CSF 2013</li>					
							<li>Website by Andrew Gu</li>					
						</ul>
					</div>	
					<div class="large-2  large-offset-2 columns">
						<ul>
							<li>About Us</li>
							<li>Volunteer</li>					
						</ul>
					</div>
					<div class="large-2 columns">
						<ul>
							<li>Facebook</li>
							<li>Contact Us</li>
					</div>
				</div>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		 <script src="js/jquery.js"></script>  	
		<script src="js/nivo-slider.js"></script>
		<script src="js/foundation.js"></script>
		<script>			
			$('#slider').nivoSlider({		
			    effect: 'fade',
			    directionNavHide: false,	 
			    directionNav: true,  			    
			    controlNav: false,
			    prevText: ' ',
        		    nextText: ' '            
			});
		</script>
	</body>
</html>