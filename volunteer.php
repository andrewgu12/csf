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
					<img src="img/volunteer.png"/>					
				</div>
			</div>	
			<div class="bodytext noPadding">
				<div id="side-bar">	
		                    <ul class="side-nav">		                   	  
		                      <li class="menuOption active" id="home"><a id="sidebarLink" href="membership.php">Membership</a></li>		                      
		                      <li class="menuOption" id="home"><a id="sidebarLink" href="classList.php">Class Lists</a></li>		                      
		                      <li class="menuOption" id="home"><a id="sidebarLink" href="projlit.php">Project Lit</a></li>		                      
		                    </ul>	
		               </div>
				<div  id="mainContent">	
					<h1>Membership</h1>
					<p>Please email <a href="mailto:csf.records@gmail.com">csf.records@gmail.com</a> if you have concerns regarding hours or the current state of your membership. <br />
						Email <a href="mailto: projectlit.csf@gmail.com">projectlit.csf@gmail.com</a> if you have any concerns regarding project lit.<br />
						Email <a href="mailto: montavistacsf@gmail.com">montavistacsf@gmail.com</a> if you wish to purchase apparel, cancel an activity, have trouble with your account, or have any other concerns. </p>
					<h2><u>Meetings</u></h2>						
						<ul>
			                	 	<li>Meetings are held twice per semester on Thursdays at brunch in B204. </li>
			                	       <li>Meeting reminders will be sent out 2 days prior to each meeting.</li>
			                           <li>One hour</b> will be deducted for a missed meeting.</li>	
			                      </ul>		                   
		                      <h2><u>Volunteer Activities & Events:</u></h2>
		                      	<ul>
			                      	 <li>Log in to find and sign up for volunteer opportunities. By default, your username is your student <b>ID number</b> and your password is your <b>full name</b> as it appears on the membership application (<b>including spaces and capital letters</b>). </li>
							 <li>Wear your CSF shirt (purchasable at $9) or sweatshirt ($17) to activities. One hour will be deducted if CSF attire is not worn. </li>
							 <li>Sign in and out of your activities with the officer or coordinator in charge. Failure to comply will result in unrecorded hours. </li>
							 <li>There will be no penalty if you send a substitute to an activity in place of yourself. Have the substitute let the officer-in-charge know. The substitute will get the hours, and you won't have any deducted. </li>
							 <li>If the activity itself is cancelled, you will be given either a chance to do an alternative activity or up to <b>3 hours</b> depending on how late the cancellation is. </li>
						</ul>					
					<h2><u>Activity Cancellation Policy:</u></h2>						
							Email <a href="mailto: montavistacsf@gmail.com">montavistacsf@gmail.com</a> for any cancellations. <br />
						<ul>
							<li>(-1) for a cancellation within three days of the activity. </li>
							<li>(-2) for a failure to cancel before the day of the event. </li>
							<li>No penalty for a cancellation made over three days before the event. </li>
						</ul>
					</p>
					<h2><u>Senior Awards and Distinction:</u></h2>
						<ul>
							<li>CSF 100% Life Member - <b>active 7 semesters (certificate, cord, and sash)</b> </li>
							<li>CSF Special Life Member - <b>active 6 semesters (certificate and cord)</b> </li>
							<li>CSF Regular Life Member - <b>active 4-5 Semesters (certificate)</b></li>
						</ul>
					<h2><u>Senior Scholarships:</u></h2>
					<p>Applications will be released during the beginning of April. The following will be taken into consideration: <br /></p>
						<ul>
							<li>Activity in Monta Vista CSF </li>
							<li>Initiative in and dedication to in-school and out-of-school commitments </li>
							<li>Academic record </li>
							<li>Personality reflected in personal response questions</li>
						</ul>
					<h2><u>Study Buddies and CSF:</u></h2>
					<ul>
			           		<li>CSF members can transfer hours from study buddies to their CSF account</li>
			                	<li>Please notify Ms. Balentine of hours you wish to transfer</li>
			                	<li>Hours will be transferred at the <b>end of the semester</b></li>
			           	</ul>
			           	<h2><u>Suggesting an Event:</u></h2>
			           	<ul>
				           	<li>CSF encourages you to suggest potential events you know of in the community to officers! If the event seems appropriate, CSF officers may contact the coordinator and set up a post on the website</li>
				              <li>If the event you suggested occurs, you may be awarded extra hours depending on the role you played in the creation of the event and your attendance at the event.</li>
			          	 </ul>
			          	<h2><u>CSF Apparel:</u></h2>
			          		<div class="row">
			          			<div class="large-6 columns">
			          				<h2>Crewneck: ($17)</h2>
			          				<img src="img/crewneck.jpg">
			          			</div>
			          			<div class="large-6  columns">
			          				<h2>T-Shirt ($9)</h2>
			          				<img src="img/tshirt.jpg">
			          			</div>
			          		</div>
				</div>
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<?php include_once("footer.php"); ?>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		<script src="js/jquery.js"></script>  	
		<script src="js/nivo-slider.js"></script>
		<script src="js/foundation.js"></script>
      	  	<script src="js/scripts.js"></script>
	</body>
</html>