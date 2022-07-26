<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
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
                  <a href="../Admin module/Users.php">Users</a>
                </li>
                <li>
                  <a href="../Admin module/Pending Request.php">Pending Request</a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h1><center>Users </center></h1>
            <h5><center>
              users will be shown here
            </center></h5>
          </div>



                    <div class="templatemo-content-widget no-padding white-bg">

                      <div class="panel panel-default table-responsive">


          			  <table class="table table-striped table-bordered templatemo-user-table">
                          <thead>
                            <tr>
          				  <td><a   class="white-text templatemo-sort-by">Username</a></td>
                              <td><a   class="white-text templatemo-sort-by">First Name</a></td>
                              <td><a   class="white-text templatemo-sort-by">Last Name </a></td>
                              <td><a  class="white-text templatemo-sort-by">Email </a></td>
                              <td><a class="white-text templatemo-sort-by">Created At </a></td>
                                <td><a class="white-text templatemo-sort-by">Delete </a></td>

                             </tr>
          				        </thead>


                          <tbody>
<?php
include '../connection.php';
$query = "SELECT * FROM users where status='Approved'";
$data=mysqli_query($db,$query);
$total=mysqli_num_rows($data);


if($total!=0)
{
  while($results=mysqli_fetch_assoc($data))
  {
    ?>
    <tr>
  <td> <?php echo $results['username'] ?></td>
  <td>  <?php echo$results['fname'] ?></td>
  <td> <?php echo $results['lname'] ?></td>
  <td><?php echo $results['email'] ?> </td>
  <td> <?php echo $results['date_created'] ?></td>
    <td><a href="deleteusersrecord.php?id=<?php echo $results['username'];?>" onclick="return checkdelete()" class="btn btn-danger">Delete</a></td>

    </tr>
    <?php

  }
}
else {
  echo "Table has no records";
}

 ?>

                          </tbody>
                   </table>
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
    <script type="text/javascript">
      function checkdelete()
      {
        return confirm('Are you sure you want to delete this record');
      }
    </script>
  </body>

</html>
