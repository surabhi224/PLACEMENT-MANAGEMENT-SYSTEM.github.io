<?php
	session_start();
	session_destroy();

	header("location: ../commonlogin.php");
	echo"You have been Logged out";
	?>
