<?php
session_start();
include "../connection.php"; // Establishing Connection with Server
// mysql_select_db("placement"); // Selecting Database from Server

	$Username = $_SESSION['username'];
	$Password = $_POST['Password'];
	$repassword = $_POST['repassword'];
	$cur = $_POST['Oldpassword'];
	if($Password && $repassword && $cur)
	{
		if($Password == $repassword)
		{
      $query="Select * from users where username='$Username'";
			$results=mysqli_query($db,$query);
			if(mysqli_num_rows($results) == 1)
			{
				$row = mysqli_fetch_assoc($results);
				$dbpassword = $row['password'];

				if($cur == $dbpassword)
				{
          $sql="UPDATE users SET password = '$Password' WHERE username = '$Username'";
					if($result=mysqli_query($db,$sql))
					{
						echo "<center>Password Changed Successfully</center>";
					} else {
						echo "<center>Can't Be Changed! Try Again</center>";
					}
				} else {
					die("<center>Error! Please Check ur Password</center>");
				}
			} else {
				die("<center>Username not Found</center>");
			}
		} else{
			die("<center>Passwords Donot Match</center>");
		}
	} else {
		die ("<center>Enter All Fields</center>");
	}
?>
