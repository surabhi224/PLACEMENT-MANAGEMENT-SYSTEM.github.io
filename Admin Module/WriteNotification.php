<?php
session_start();
include_once'../connection.php';
if(isset($_POST['send']))
{

    $msg=$_POST['msg'];
    $date=date('y-m-d h:i:s');
    $sql_insert=mysqli_query($db,"INSERT INTO message(message,date) VALUES('$msg','$date')");
    if($sql_insert)
    {
        echo "<script>alert('message sent successfully');</script>";
    }
    else
    {
        echo mysqli_error($db);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
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
        <h2>Firstname</h2>
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
              <a href="../Admin module/WriteNotification.php"><i class="fa fa-user fa-fw"></i>Notifications</a>
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

                <li>
                  <a href="../Admin module/WriteNotification.php">Notifications</a>
                </li>
                <li>
                  <a href="../Admin module/changepassword.php">Change Password</a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h1><center>Notifications</center></h1>

          </div>
          <div class="templatemo-content-widget white-bg">

  <form  method="POST" enctype="multipart/form-data">

    <div class="row form-group">
      <div class="col-lg-12 form-group">
          <label class="control-label" for="inputNote">Message:</label>
        <textarea name="msg" class="form-control" id="inputNote" rows="5"></textarea>
      </div>
    </div>




    <div class="form-group text-right">
      <button type="submit" name ="send" class="templatemo-blue-button">submit</button>

    </div>



  </form>
</div>

        </div>
      </div>
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
