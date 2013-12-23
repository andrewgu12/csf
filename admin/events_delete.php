<?php
	require_once("../included.php");
	require_once("login.php");

	$index = $_REQUEST['id'];

	mysqli_query($conn, "DELETE FROM  `activities` WHERE `id` = '$index' LIMIT 1");

	header("Location: events_open.php");
?>