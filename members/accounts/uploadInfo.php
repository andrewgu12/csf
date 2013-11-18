<?php 
	$hostname='csf.db';
	$username='mvcsf';
	$password='4ol9y6a';
	$dbname='csfBackend';
	$user = $_REQUEST['user'];
	$newEvent = $_REQUEST['newEvent'];
	
	date_default_timezone_set('America/Los_Angeles');
	$dt = getdate();
	$time = $dt[year]."-".$dt[mon]."-".$dt[mday]." ".$dt[hours].":".$dt[minutes].":".$dt[seconds];
	$timestamp = date("U");
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	$sql = "INSERT INTO `suggestedEvents` (`user`, `newEvents`, `time`) VALUES ('$user', '$newEvent', '$timestamp')";
	var_dump($user);
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>