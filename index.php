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
	</head>
	<body>
		<div id="header-wrapper">
			<div id="header">
				<span class="left">
					<img src="img/logo.png">
				</span>
				<span class="right">
					<nav class="top-bar">
						<section class="top-bar-section">
							<ul>
								<li><a href="#">home</a></li>
								<li><a href="#">about</a></li>
								<li><a href="#">volunteer</a></li>
								<li><a href="#">media</a></li>
								<li><a href="#" >login</a></li>
							</ul>
						</section>
					</nav>
				</span>
			</div>
		</div>




		<!--include all JS files for both personal and Foundation-->
		 <script>
	  		 document.write('<script src=' + ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') + '.js><\/script>')  		
	  	</script>  	
		<script src="js/custom.modernizr.js"></script>
		<script src="js/foundation.js"></script>
	</body>
</html>