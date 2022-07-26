<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile</title>
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
      echo "<h1>" . $Welcome . "<br>".   $_SESSION['username']. "</h1>";
  ?>
        </header>
        <div class="profile-photo-container">

          <img src="images/profile-photo.png" alt="Profile Photo" class="img-responsive">
        <h2>Admin</h2>
        </div>


        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <!-- <li>
              <a href="../Admin module/dashboard.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li> -->
            <li>
              <a href="../Admin module/myprofile.php"><i class="fa fa-user fa-fw"></i>My Profile</a>
            </li>
            <li>
              <a href="../Admin module/Users.php"><i class="fa fa-users fa-fw"></i>User Management</a>
            </li>
            <li>
              <a href="../Admin module/Records.php"><i class="fa fa-bar-chart fa-fw"></i>Records</a>
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
            <!--    <li>
                  <a href="">Home</a>
                </li>
                <li>
                  <a href="../Admin module/WriteNotification.php">Notifications</a>
                </li>
                <li>
                <a href="../Admin module/changepassword.php">Change Password</a>
              </li>-->
              </ul>
            </nav>
          </div>
        </div>
<!--
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">My Profile</h2>
            <p>Update Your Details</p>
            <form action="" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputFirstName">First Name</label>
                  <input type="text" name="Fname" class="form-control" id="inputFirstName" placeholder="Shivangi">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputLastName">Last Name</label>
                  <input type="text"  name="Lname" class="form-control" id="inputLastName" placeholder="Sahgal">
                </div>


                <div class="col-lg-6 col-md-6 form-group">
                          <label for="ui">Unique Id.</label>
                          <input type="text" name="Unique Id" class="form-control" id="ui" placeholder="btbti18033" >
                        </div>

				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Phone">Phone:</label>
                  <input type="text" name="Num" class="form-control" id="Phone" placeholder="91xxxxxxxx">
                </div>

				 <div class="col-lg-6 col-md-6 form-group">
                  <label for="Email">Email</label>
                  <input type="Email" name="Email" class="form-control" id="Email" placeholder="abc@example.com">
                </div>

                  <div class="col-lg-6 col-md-6 form-group">
                    <label for="DOB">Date of Birth</label>
                    <input type="date" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                  </div>


              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">Upload your Profile Pic</label>
                  <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                  <!--
                  <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true"
                  data-icon="false">
                  <p>Maximum upload size is 5 MB.</p>
                </div>

              </div>
              <div class="form-group text-right">

				<button type="submit"  name="submit" class="templatemo-blue-button">add</button>
				<button type="submit"  name="update" class="templatemo-blue-button">update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    -->
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>
