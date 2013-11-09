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
					<img src="img/officersback.png"/>					
				</div>
			</div>	
			<div class="bodytext">		
			<p>To learn more about our officers, click on their faces to read more about them. Contact information for each of the officers is provided.</p>		
				<div id="officerColumn">					
					<figure id="officerInfo">
						<img src="img/officers/ria.jpg" id="ria" >
						<div class="info" id="name">Ria Bhatt, President</div>
						<div class="info" id="description">
							I'm Ria, and I currently act as CSF's president! As an officer, I coordinate and attend volunteer activities throughout the year, maintain contact with members through email, and handle general club business. You'll see me at weekend events and CSF member meetings :)
Outside of CSF, some of my favorite pastimes are painting and drawing. I've been an artist for as long as I can remember, and I'm almost always involved in new projects. Along with my involvement in the art community, I spend a lot of my free time reading. I won't even try listing out my favorite books here because there are far too many. As a fellow Monta Vista student, you know that free time is rare, so when I have an extra hour or so, I usually prefer spending it with family or friends!
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/ramana.jpg"  id="ramana">
						<div class="info" id="name">Ramana Keerthi,  VP of Operations</div>
						<div class="info" id="description">
							Lots of words go here.
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/dip.jpg"  id="dip">
						<div class="info" id="name">Dipsikha Halder,  VP of Membership</div>
						<div class="info" id="description">
							Hi I'm Dipsikha and I'm Vice President of Membership! I manage membership (obviously) and take care of CSF's role in other organizations. Apart from volunteering, I love to paint and sleep and play guitar, but mostly just sleep. I also love city lights and I can't wait to graduate in a couple of semesters =).
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/emily.JPG"  id="emily">
						<div class="info" id="name">Emily Hong, Director of Public Relationship</div>
						<div class="info" id="description">
							Hello! I am your Director of Public Relations. In CSF, I lead volunteer events and communicate with our members and non-members through email and Facebook so that they're up to date with all things CSF. Outside of CSF, I work regularly with multiple nonprofits such as Our City Forest and Reading Partners, volunteer with MVOctagon, compete with MVDECA, swim, read, and bake. I particularly enjoy tea (earl grey and chai are my favorites!), going for long runs, looking at beautiful scenery, and making lists. :)
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/alice.jpg"  id="alice">
						<div class="info" id="name">Alice Lee,  Secretary</div>
						<div class="info" id="description">
							Hey guys! I'm Alice, your secretary at CSF. I record all of your hours, attendance, and your active semesters. <br />
							Outside of CSF, I'm involved in the Youth and Government program at the YMCA, and I am also involved in CPYO, a youth orchestra, and other musical organizations.
							I love reading and singing, and I will almost never turn down an offer for food. :)
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/linda.jpg"  id="linda">
						<div class="info" id="name">Linda Xia, Treasurer</div>
						<div class="info" id="description">
							Hi guys! I'm Linda and I'll be your treasurer for this year. Throughout my time with CSF, I've got to meet some really amazing people while simultaneously giving back to the community, and I hope CSF will offer you the same experience. Outside of CSF, I'm part of our school's yearbook as well as an outside youth orchestra. I love Pinterest, trying new things, and anything that tells a good story. If you see me around, feel free to say hi! I hope CSF will be as rewarding to you as it has been for me! 
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/amy.jpg"  id="amy">
						<div class="info" id="name">Amy Tsai, Senior Project Lit Chair</div>
						<div class="info" id="description">
							Some words here.
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/michelle.jpg"  id="michelle">
						<div class="info" id="name">Michelle Li, Project Lit Chair</div>
						<div class="info" id="description">							
							Hi! I'm Michelle, and I'm Project Lit Chair. I work together with Amy for the organization Room to Read. We donate the profits from book sales directly to Room to Read, and the money is used to promote education in third world countries. I'm thrilled to be working with amazing CSF volunteers on such a regular basis! Outside of CSF, I mainly study (yay!), but in my free time, I love to eat, read, sleep, play piano, sing, volunteer, and bake (I make AWESOME chocolate chip cookies :D). I'd love to get to know all of you fantabulous CSF volunteers, so feel free to say hi if you see me around!
						</div>
					</figure>
					<figure id="officerInfo">
						<img src="img/officers/mingbo.jpg"  id="mingbo">
						<div class="info" id="name">Andrew Gu, Webmaster</div>
						<div class="info" id="description">							
							A reminder to myself to put some words. 
						</div>
					</figure>
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
		<script src="js/foundation.js"></script>
      	  	<script src="js/scripts.js"></script>
	</body>
</html>