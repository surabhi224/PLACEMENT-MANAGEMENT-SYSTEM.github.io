<?php
include '../connection.php';
$usn=$_GET['id'];
$sql="Select * from student_record where usn='$usn'";
$data=mysqli_query($db,$sql);
$res=mysqli_fetch_assoc($data);
/*$res['fname']
$res['lname']
$res['enroll_no']
$res['usn']
$res['phn']
*/
 ?>



<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
      <meta name="description" content="">
      <meta name="author" content="templatemo">
  <!--favicon-->
      <link rel="shortcut icon" href="favicon.ico" type="image/icon">
      <link rel="icon" href="favicon.ico" type="image/icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
      <!-- Footer -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="light-gray-bg">
  <div class="templatemo-content-widget templatemo-login-widget white-bg">




        <form action="myprofile(php).php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
          <div class="row form-group" >

            <div class="row">
                <div class="col-md-12">
                  <img  class="mb-1" src="<?php echo "../".$res['profile_pic']?>" width="200px"; height="200px"; style="margin-left:80px; margin-bottom: 30px ;border-radius:50%" >



            </div>
            </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Full name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['fname']." ".$res['lname']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Enrollment No</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['enroll_no']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Unique Id.</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['usn']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['phn_no']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['email']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Date of birth</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['dob']?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Permanent Address</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['permt_add']?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>City</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['city']  ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Pincode</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['pincode'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>State</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['state'] ?></p>
                                        </div>
                                    </div>
                                      <hr >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Program</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['program'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Current Semester</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['curr_sem'] ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Branch of Study</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['branch_study'] ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>SSLC/10th Aggregate</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['tenth_aggr'] ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>12th/Diploma Aggregate</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['twelvth_aggr'] ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>CGPA(till current sem)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['cgpa'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Backlogs(till current sem)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $res['curr_blog'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Enrollment Year</label>
                                        </div>
                                        <div class="col-md-6">
                                          <p><?php echo $res['enroll_year'] ?></p>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Passing Year</label>
                                        </div>
                                        <div class="col-md-6">
                                          <p><?php echo $res['pass_year'] ?></p>

                                        </div>
                                    </div>
      <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Resume</label>
                                        </div>
                                        <div class="col-md-6">
                                          <p>  <a href="<?php echo "../".$res['resume']?>">View Resume</a></p>
                                        </div>
                                    </div>

          </div>


        </form>
</div>


</body>
</html>
