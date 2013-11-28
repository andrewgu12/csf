<?php include("included.php");
	  include("login.php");
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
			<h1>Welcome to the Admin CP 
			</h1>
		<p><em>KobeCMS Build 1.2a by Richard Yu</em></p>
		<p>&nbsp;</p>
		<p><strong>News Functions</strong></p>
		<p><a href="news_create.php">Create</a> or <a href="news_view.php">View News</a></p>
		<p><strong>Member Functions</strong></p>
		<p><a href="create_members.php">Create</a> or <a href="view_members.php">View	Members</a></p>
		<p><strong>Event Functions</strong></p>
		<p><a href="events_create.php">Create</a>, <a href="events_view.php">View Events</a> or <a href="events_viewclose.php">View Closed Events</a></p>
		<p><strong>Data Reset</strong></p>
		<p><a href="data_reset.php">Data Reset</a> - WARNING! THIS ACTION IS NOT REVERSIBLE. </p>
		<p><strong>Logout</strong></p>
		<p><a href="logout.php">Logout</a></p>
		</div>
	</div>
	
	<div id="footer">
		<?php include("footer.php"); ?>
	</div>
</div>
</body>
</html>