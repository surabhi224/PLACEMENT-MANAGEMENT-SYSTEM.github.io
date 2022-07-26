
<?php
session_start();
include '../connection.php';
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
  <?php
  $Welcome = "Welcome";
      echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
  ?>
        </header>
        <div class="profile-photo-container">
          <?php
          $sql="SELECT * FROM student_record";
          $data=mysqli_query($db,$sql);
          $res=mysqli_fetch_assoc($data);

           ?>
                    <img src="<?php echo "../".$res['profile_pic'] ?>" width="200px" height="200px" style="border-radius:50%;" alt="Profile Photo" class="img-responsive">

        <h2><?php

              echo  $_SESSION['firstname'] ;
          ?></h2>
        </div>


        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="../student module/dashboard.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="../drive/drive.html"><i class="fa fa-bar-chart fa-fw"></i>Campus Drives</a>
            </li>
            <li>
              <a href="../student module/myprofile.php"><i class="fa fa-sliders fa-fw"></i>My Profile</a>
            </li>
            <li>
            <a href="logout.php"><i class="fa fa-eject fa-fw"></i>Logout</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">

                <li>
                  <a href="../student module/notification.php">Notifications</a>
                </li>
                <li>
                  <a href="../student module/changepassword.php">Change Password</a>
                </li>
                <li>
                  <a href="../student module/Placed-Student.php">Placed Student</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
    			<header class="text-center">
    	          <div class="square"></div>
    	          <h1>Change Password</h1>
    	        </header>
    	        <form action="cp.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
    				<div class="form-group">
    	        		<div class="input-group">

                       <label for="Old password">Old password</label>
    		              	<input type="text" name="Oldpassword" class="form-control" id="Old password" placeholder="Old password" >
    		          	</div>
    	        	</div>
    	        	<div class="form-group">
    	        		<div class="input-group">
    		        		<label for="New Password">New password</label>
    		              	<input type="password" name="Password" class="form-control" id="New password" placeholder="New Password" >
    		          	</div>
    	        	</div>
    				<div class="form-group">
    	        		<div class="input-group">
    		        		<label for="repassword">Retype password</label>
    		              	<input type="password" name="repassword" class="form-control"id="repassword" placeholder="Retype Password" >
    		          	</div>
    				</div>
    				<div class="form-group">
    					<button type="submit" class="templatemo-blue-button width-100">Confirm</button>
    				</div>
    	        </form>
    		</div>


  <!-- JS -->
  <script src="js/jquery-1.11.2.min.js"></script>
  <!-- jQuery -->
  <script src="js/jquery-migrate-1.2.1.min.js"></script>
  <!-- jQuery Migrate Plugin -->
  <script type="text/javascript" src="js/templatemo-script.js"></script>
  <!-- Templatemo Script -->
</body>

</html>
