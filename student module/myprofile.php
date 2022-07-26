<?php
include '../connection.php';
session_start();
$usn=$_SESSION['username'];
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
 <?php

  ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<style media="screen">
body{
  background: -webkit-linear-gradient(left, #ced4dab5, #ced4dab5);
}
.emp-profile{
  padding: 3%;
  margin-top: 3%;
  margin-bottom: 3%;
  border-radius: 0.5rem;
  background: #fff;
}
.profile-img{
  text-align: center;
}
.profile-img img{
  width: 200px;
  height: 200px;
}

.profile-head h5{
  color: #333;
}
.profile-head h6{
  color: #212529;
}
.profile-edit-btn{
  border: none;
  border-radius: 1.5rem;
  width: 70%;
  padding: 2%;
  font-weight: 600;
  color: #6c757d;
  cursor: pointer;
}


.profile-head .nav-tabs{
  margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
  font-weight:600;
  border: none;
}
.profile-head .nav-tabs .nav-link.active{
  border: none;
  border-bottom:2px solid #0062cc;
}
.profile-work{
  padding: 14%;
  margin-top: -15%;
}
.profile-work p{
  font-size: 12px;
  color: #818182;
  font-weight: 600;
  margin-top: 10%;
}
.profile-work a{
  text-decoration: none;
  color: #495057;
  font-weight: 600;
  font-size: 14px;
}
.profile-work ul{
  list-style: none;
}
.profile-tab label{
  font-weight: 600;
}
.profile-tab p{
  font-weight: 600;
  color: #6c757d;
}
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>

<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo "../".$res['profile_pic']?>" alt=""/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php  echo  $_SESSION['firstname'].  $_SESSION['lastname'] ?>
                                    </h5>
                                    <h6>
                                        <?php echo   $_SESSION['username'] ?>
                                    </h6>



                        </div>
                    </div>
                    <div class="col-md-2">
                      <a href="editprofile.php" class="profile-edit-btn">Edit</a>
                  <!--      <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Navigation</p>
                            <a href="../student module/dashboard.php"> Dashboard</a><br>
                            <a href="../drive/drive.html">Campus DRives</a><br>
                            <a href="../student module/notification.php">Notification</a><br>
                            <a href="../student module/changepassword.php">Change Password</a><br>
                            <a href="../student module/Placed-Student.php">Placed Student</a><br>
                            <a href="logout.php">Logout</a>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                    <p>  <a href="<?php echo "../". $res['resume']?>">View Resume</a></p>
                                  </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
  </body>
</html>
