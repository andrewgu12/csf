
<form id="submitEvent">
<textarea placeholder="Suggest an event!"></textarea>
<?php 
$userid = $_REQUEST['userid'];
$hostname='csf.db';
$username='mvcsf';
$password='4ol9y6a';
$dbname='csfBackend';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
$results = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$userid' LIMIT 1");
$current = mysqli_fetch_array($results);
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
$hostname='csf.db';
	$username='mvcsf';
	$password='4ol9y6a';
	$dbname='csfBackend';
$conn = mysqli_connect($hostname, $username, $password, $dbname);
    $results = mysqli_query($conn, "SELECT * FROM `suggestedEvents` ORDER BY `time` DESC LIMIT 20");
    while($row = mysqli_fetch_array($results)) 
    {
        $username = $row['user'];
        $event = $row['newEvents'];
        echo "<div id='userEvents'>";

        echo "<p>$event</p>";
        echo "<h3>-$username</h3>";
        echo "</div>";
    }
?>
</div>