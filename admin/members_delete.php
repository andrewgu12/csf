<?php
	require_once("../included.php");
	require_once("login.php");

	$studID = $_REQUEST['id'];

	mysqli_query($conn, "DELETE FROM `user` WHERE `studentid`='$studID' LIMIT 1");
	header("Location: members_all.php");
?>