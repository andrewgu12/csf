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
				<div id="slider" class="nivoSlider">
					<img src="img/slideshow/image1.jpg" title="Welcome to CSF!"/>
					<img src="img/slideshow/image2.jpg" title="Volunteer for your community" />
					<img src="img/slideshow/image3.JPG" title="Meet new people"/>
				</div>
			</div>	
			<div class="bodytext">
				<h1>Latest News</h1>
				<?php
					$result = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 5");
					while($news = mysqli_fetch_array($result)){
						$name = $news['title'];
						$date = date("D, j M", $news['date']);
						$content = str_replace("\n", "<br/>", $news['content']);
						echo "<div id='newsItem'>";
						echo "<h2>$name</h2><p class='date'>$date</p>";
						echo "<p>$content</p>";
						echo "</div>";
					}
				?>
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<?php include_once("footer.php"); ?>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  	
		<script src="js/nivo-slider.js"></script>
		<script>
			 $('#slider').nivoSlider({
				effect: 'fade',
				pauseTime: 4000,
				directionNavHide: false,	 
				directionNav: true,  			    
				controlNav: false,
				prevText: ' ',
				nextText: ' '       
			});
		</script>
		<script src="js/foundation.js"></script>
      	  	<script src="js/scripts.js"></script>
	</body>
</html>