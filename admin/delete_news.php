<?php
	require_once("../included.php");
	require_once("login.php");

	$index = $_REQUEST['id'];

	mysqli_query($conn, "DELETE FROM `news` WHERE  `index`='$index'  LIMIT 1 ");

	header("Location: all_news.php");
?>