<?php include("included.php");
	  include("login.php");
	  
	  $index = $_GET['id'];
	  
	  if($_REQUEST['hours']){
			$result = mysql_query("SELECT * FROM `activities` WHERE `id`='$index' LIMIT 1");
			$eventhours = $_REQUEST['hours'];
			$peopleNumber = 1;
			while($act = mysql_fetch_array($result)){
					$users = substr($act['users'],1);
					
					$userarr = split(",", $users);
					
					foreach($userarr as $value){
						$ur = mysql_query("SELECT * FROM `user` WHERE `studentid` = '$value' LIMIT 1");
						$ua = mysql_fetch_array($ur);
						
						$currenthours = $ua['hours'];
						$newhours = $currenthours+$eventhours;
						if(isset($_REQUEST[$peopleNumber]) && $_REQUEST[$peopleNumber] == 'yes') {
							mysql_query("UPDATE `user` SET `hours`='$newhours' WHERE `studentid`='$value' LIMIT 1");
						}
						$peopleNumber++;
					}
				
			}
			
			mysql_query("UPDATE `activities` SET `complete`='1' WHERE `id`='$index' LIMIT 1");
			
			header("Location: events_view.php");
	  }
	  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?= $title; ?></title>
<link rel="stylesheet" href="default.css" />
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
			<h1>Complete Event</h1>
		<p><em>KobeCMS Build 1.2a by Richard Yu (with Glorious Assistance provided by <a href="http://www.bwcproductions.com">Anthony Kao</a>)</em></p>
		<script language="javascript1.2">
		// attach the editor to the textarea with the identifier 'textarea1'.
		WYSIWYG.attach('content');
		</script>
		<p><a href="admin_home.php">Back to Home</a></p>
		<p>This page will grant hours and close the event formally, removing it from listings.</p>
			<?php
			
			$result = mysql_query("SELECT * FROM `activities` WHERE `id`='$index' LIMIT 1");
			while($act = mysql_fetch_array($result)){
				$index = $act['id'];
				$name = $act['name'];
				$limit = $act['limit'];
				$close = $act['close'];
				$curr = $act['curr'];
				$time = $act['time'];
				$location = $act['location'];
				$date = date("D, j M", $act['date']);
				$desc = str_replace("\n", "<br/>", $act['desc']);
				$users = substr($act['users'],1);
					
					$userarr = split(",", $users);
					$carpool = array(count($userarr));
					
					$users = "";
					
					foreach($userarr as $key=>$value){
						$ur = mysql_query("SELECT * FROM `user` WHERE `studentid` = '$value' LIMIT 1");
						$ua = mysql_fetch_array($ur);
						$firstName = $ua['name'];
						$lastName = $ua['lastName'];						
						$fullName = $firstName." ".$lastName;					
						$users .= "<br/>".$fullName;
					}
				
				echo "<h2>$name</h2><p class='date'>$date</p>";
				echo "<b>Time: $time</b><br/>";
				echo "<b>Location: $location</b><br/>";
				echo "<p><b>Who's Attending:</b> $users<br/>";
				echo "</p>";
			
			}
			
			?>
			<form action="events_complete.php?id=<?= $index ?>" method="post">
				How many hours to give for this event?<br/><input name="hours" type="text" id="hours" size="5" maxlength="2" /><br/><br/>
                <?php
					echo "Who gets hours? <br />";
					$attendees = mysql_query("SELECT * FROM `activities` WHERE `id`='$index' LIMIT 1");
					$attNumber = 1;
					while ($row = mysql_fetch_array($attendees)) {
						$attendees = substr($row['users'],1);
					
						$attarr = split(",", $attendees);
						$atthours = array(count($attarr));
						foreach($attarr as $value){
							
							$ur = mysql_query("SELECT * FROM `user` WHERE `studentid` = '$value' LIMIT 1");
							$ua = mysql_fetch_array($ur);
						
							$attendees = $ua['name']." ".$ua['lastName'];
							echo "<input type='checkbox' name=$attNumber id=$attNumber value='yes' checked />$attendees";
							echo "<br />";
							$attNumber++;
						}
					}
				?>
				<input type="submit" />
			</form></div>
	</div>
    <!-- BWC PRODUCTIONS WAS HERE GO TO WWW.BWCPRODUCTIONS.COM FOR COST-EFFECTIVE WEB SOLUTIONS-->
	
	<div id="footer">
		<?php include("footer.php"); ?>
	</div>
</div>
</body>
</html>