<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Kolkata");

	$con = mysqli_connect("sql307.epizy.com", "epiz_28301910", "7A3dtI0yQFHxSuQ", "epiz_28301910_buzzify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>