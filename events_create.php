<?php include("included.php");
	  include("login.php");
		
	  if($_REQUEST['title']){
			//$title = $_REQUEST['title'];
			$title = mysql_real_escape_string($_REQUEST['title']);
			$date = $_REQUEST['date'];
			$desc = mysql_real_escape_string($_REQUEST['content']);
			$limit = $_REQUEST['limit'];
			$location = $_REQUEST['location'];
			$time = $_REQUEST['time'];
			$closed = "no";
			
			mysql_query("INSERT INTO `activities` (`id`, `name`, `date`, `desc`, `limit`, `close`, `time`, `location`) VALUES (NULL, '$title', '$date', '$desc', '$limit', '$closed', '$time', '$location')");
			
			header("Location: events_view.php");
	  }
		
	  include("nav.php");
	  
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
			<h1>Create an Event</h1>
		<p><em>KobeCMS Build 1.2a by Richard Yu (with Glorious Assistance provided by <a href="http://www.bwcproductions.com">Anthony Kao</a>)</em></p>
		<script language="javascript1.2">
		// attach the editor to the textarea with the identifier 'textarea1'.
		WYSIWYG.attach('content');
		</script>
		<p><a href="admin_home.php">Back to Home</a></p>
		<form method="post" action="events_create.php">
			<p>
				<label for="title">Name</label>
				<br />
				<input type="text" name="title" id="title" />
			</p>
            
            <p>
            Date UNIX Timestamp (<a href="http://www.timestampgenerator.com/">http://www.timestampgenerator.com/</a>)<br/>
            <input type="text" name="date" id="date"  value="" maxlength="42" />
			<p>
			Event Limit<br/>
			<input type="text" name="limit"  size="5" maxlength="3"/>
			</p>
			<p>
			Event Time<br/>
			<input type="text" name="time" />
			</p>
			<p>
			Event Location<br/>
			<input type="text" name="location" />
			</p>
			<p>
				<label for="content">Description<br />
				</label>
				<textarea name="content" id="content" cols="70" rows="5"></textarea>
			</p>
			<p>
				<input type="submit" name="button" id="button" value="Submit" />
			</p>
		</form>

		</div>
	</div>
	
	<div id="footer">
		<?php include("footer.php"); ?>
	</div>
</div>
</body>
</html>