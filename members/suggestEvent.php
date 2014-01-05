<?php require_once("../included.php"); 
	     require_once("login.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width" />
		<title>Monta Vista CSF</title>
		<!--app.css has Foundation styles, styles.css has custom styles-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/app.css" />		
		<link rel="stylesheet" href="../css/styles.css" />
		<link rel="stylesheet" href="../css/nivo-slider.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">		
		<script src="../js/custom.modernizr.js"></script>
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
					<img src="../img/members.png"/>					
				</div>
			</div>	
			<div class="bodytext">
				<div id="topContent">					    
			                     <?php require_once("header.php");?>
				</div>	
		            <div id="bottomContent">
			            	<div id="side-bar">	
			                    <ul class="side-nav">
			                   	  <?php require_once("sidebarMenu.php"); ?>
			                    </ul>	
			               </div>
			               <div id="bottomMainContent">
			                        <div id="loading"><img src="images/loading.gif" style="display: none;"></div>
			                        <div id="bottomContentWords">

<form id="submitEvent">
<textarea placeholder="Suggest an event!"></textarea>
<?php 
$userid = $_REQUEST['userid'];

$firstName = $current['name'];
$lastName = $current['lastName'];
$fullName = $firstName . ' ' . $lastName;
echo "<div id='userName' style='display: none;'>$fullName</div>";
?>
<a class="button" id="newEvent" href="#">Submit</a>
</form>
<script>
$('#newEvent').click(function(e) {
	sugEvent = $('textarea').val();
	user = $('#userName').text();
	var data = "user=" + user + "&newEvent=" + sugEvent;
	$.ajax({
		data: data,
		url:"uploadInfo.php",
		success:function(result)
		{
      		 $("#otherSuggestedEvents").load("updateEvents.php");;
			 $('#otherSuggestedEvents').show();
    	}
	});
	$('textarea').val("");
});	
</script>
<div id="otherSuggestedEvents">
	<?php 
    $results = mysqli_query($conn, "SELECT * FROM `suggestedEvents` ORDER BY `time` DESC LIMIT 20");
    while($row = mysqli_fetch_array($results)) 
    {
        $username = $row['user'];
        $event = $row['newEvents'];
        echo "<div id='userEvents'>";

        echo "<p>$event</p><br />";
        echo "<h3>-$username</h3>";
        echo "</div>";
    }
?>
</div>
			                      </div>
			               </div>
			           </div>		
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<?php include_once("../footer.php"); ?>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		<script src="../js/jquery.js"></script>  	
		<script src="../js/nivo-slider.js"></script>
		<script src="../js/foundation.js"></script>
      	  	<script src="js/library.js"></script>
	</body>
</html>