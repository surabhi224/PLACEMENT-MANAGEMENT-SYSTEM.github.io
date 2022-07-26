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
                  <a href="../Admin module/Student-Record.php">Students</a>
                </li>
                <li>
                  <a href="../Admin module/Company-Record.php">Company</a>
                  </li>
                  <li>
                    <a href="../Admin module/Placed-Student.php">PLaced Students</a>
                    </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h1><center>Students Records </center></h1>
          </div>
          <div class="templatemo-content-widget no-padding white-bg">
            <div class="panel panel-default table-responsive">


        <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a class="white-text templatemo-sort-by">Student name</a></td>
                    <td><a   class="white-text templatemo-sort-by">Enrollment No</a></td>
                    <td><a   class="white-text templatemo-sort-by">Unique Id </a></td>

                    <td><a class="white-text templatemo-sort-by">Email </a></td>
                    <td><a  class="white-text templatemo-sort-by">Program</a></td>


                    <td><a  class="white-text templatemo-sort-by">View </a></td>
                    <td><a class="white-text templatemo-sort-by">Edit </a></td>
                    <!-- <td><a class="white-text templatemo-sort-by">Delete</a></td> -->
                   </tr>
                </thead>


                <tbody>
                  <?php
                  include '../connection.php';
                  $q1 = "SELECT * FROM `student_record` inner join users on student_record.usn=users.username where users.status='Approved'";
                  $datas=mysqli_query($db,$q1);
                  $totals=mysqli_num_rows($datas);


                  if($totals!=0)
                  {
                    while($result=mysqli_fetch_assoc($datas))
                    {
?>
                     <tr>
                    <td><?php  echo $result['fname']." ".$result['lname']?></td>
                    <td><?php  echo $result['enroll_no']?></td>
                    <td><?php  echo $result['usn']?></td>

                    <td><?php  echo $result['email'] ?></td>
                    <td><?php  echo $result['program']?></td>

                    <td> <a href="viewsr.php?id=<?php echo $result['usn'];?>" class="btn btn-primary">View</a></td>
                    <td> <a href="updatesr.php?id=<?php echo $result['usn'];?>" class="btn btn-success">Edit</a></td>
                    <!-- <td><a href="delelerecords.php?id=<?php echo $result['usn'];?>" onclick="return checkdelete()" class="btn btn-danger">Delete</a></td> -->
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
