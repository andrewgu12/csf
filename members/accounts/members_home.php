<?php include('included.php'); 
include('login.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?= $title; ?></title>
<link rel="stylesheet" href="css/foundation.min.css" />
<link rel="stylesheet" href="css/default.css" />
<link rel="stylesheet" href="css/portfolio.css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
</head>

<body>
<div id="main">
	<div id="header">
	
	</div>
	
	<div id="nav">
		<?php include("nav.php"); ?>
	</div>
	
	<div id="content">		
		<div id="content_inner">	
        	<div id="yourFaceTop">
            	<?php 
					 $firstName = $current['name'];
                        $lastName = $current['lastName'];
                        $fullName = $firstName . ' ' . $lastName;
                        $hours = $current['hours'];
                        $email = $current['email'];
                        $phone = $current['phone'];
                        $grade = $current['grade'];
						$image = $current['image'];
						if($image == '') {
							$image = 'person.png';
						}
				echo "<div id='membersImage'>";
                	echo "<img src='images/$image' />";
                echo "</div>";
                echo "<div id='description'>";
					
                       
                        echo "<p style='font-size: 48px;'>$fullName</p>";
                        echo "<p>Hours: $hours <br />";
                        echo "Email: $email<br />";
                        echo "Phone: $phone<br />";
                        echo "Grade: $grade</p>";
                    ?>
	                               
                </div>
            </div>
            <div id="bottomContent">
            	<div id="side-bar">	
                    <ul class="side-nav">
                   	  <li class="divider"></li>
                      <li class="menuOption active" id="home"><a id="sidebarLink" href="membersIntro.php">Introduction</a></li>
                      <li class="divider"></li>
                      <li class="menuOption" id="changeDetails"><a id="sidebarLink" href="membersProfileChange.php">Your Profile</a></li>
                      <li class="divider"></li>
                      <li class="menuOption" id="otherMembers"><a id="sidebarLink" href="viewMembers.php">Other Members</a></li>
                      <li class="divider"></li>
                      <li class="menuOption" id="postEvents"><a id="sidebarLink" <?php $userid = $current['studentid']; echo "href='suggestEvent.php?userid=$userid';"?>>Suggest an Event</a></li>
                      <li class="divider"></li>
                      <li class="menuOption" id="signedUpEvents"><a id="sidebarLink"  href="yourEvents.php">Registered Events</a></li>
                      <li class="divider"></li>
                      <li class="menuOption" id="upcomingEvents"><a id="sidebarLink"  href="volunteer.php">Upcoming Events</a></li>
                      <li class="divider"></li>
                      <li class="menuOption" id="logout"><a id="sidebarLink"  href="logout.php">Logout</a></li>
                      <li class="divider"></li>
                    </ul>	
               </div>
               <div id="bottomMainContent">
                        <div id="loading"><img src="images/loading.gif" style="display: none;"></div>
                        <div id="bottomContentWords">
                   		<h1> Greetings!</h1>
                                 <p>Welcome to your new member account. Here's a rundown of each of the tabs: </p>
                                <ol>
                              	<li><b>Introduction: </b> Returns to this page.</li>
                                  <li><b>Your Profile: </b> Edit your information.</li>
                                  <li><b>Other Members: </b> Here you can view all the other members in MVCSF. </li>
                                  <li><b>Suggest an Event: </b> Here you can suggest a place for volunteering. </li>
                                  <li><b>Registered Events: </b>Events you signed up for. If this page is blank, that means you haven't signed up for anything!</li>
                                  <li><b>Upcoming Events: </b>Any events that are coming up.</li>
                                  <li><b>Logout: </b>Self explanatory. </li>
                              </ol>
                      </div>
               </div>
           </div>
		</div>
	</div>
	
	<div id="footer">
		<?php include("../footer.php"); ?>
	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/custom.modernizr.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/library.js"></script>


</body>
</html>