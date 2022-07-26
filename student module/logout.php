<?php
	session_start();
	session_destroy();

	header("location: ../home page/home-page.php");
	echo"You have been Logged out";
	?>
