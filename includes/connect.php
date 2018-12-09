<?php
// This file connects to the database.
	$user = "tectone";
	$pass = "tectone";
	//$pass = "root"; Mac only
	$url = "jessicafreaxx14655.ipagemysql.com";
	$db = "db_tectone";

	$link = mysqli_connect($url, $user, $pass, $db);
//$link = mysqli_connect($url, $user, $pass, $db, "8889");

	/* Check Connection */
	if(mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>