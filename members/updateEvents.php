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