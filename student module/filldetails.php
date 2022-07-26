<?php

session_start();
 ?>
 <?php
include '../connection.php';

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
      echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
  ?>
        </header>
        <div class="profile-photo-container">

          <img src="images/profile-photo.png" alt="Profile Photo" class="img-responsive">
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
              </ul>
            </nav>
          </div>
        </div>

        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">My Profile</h2>
            <p>Fill Your Details</p>



            <form action="myprofile(php).php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputFirstName">First Name</label>
                  <input type="text" name="Fname" class="form-control" id="inputFirstName" placeholder="Shivangi" >
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputLastName">Last Name</label>
                  <input type="text"  name="Lname" class="form-control" id="inputLastName" placeholder="Sahgal" >
                </div>

				        <div class="col-lg-6 col-md-6 form-group">
                  <label for="usn">Enrollment No.</label>
                  <input type="text" name="EnrollNum" class="form-control" id="usn" placeholder="2018/666"  >
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                  <label for="ui">Unique Id.</label>
                  <input type="text" name="USN" class="form-control" id="ui" placeholder="btbti18033"  >
                </div>

        				<div class="col-lg-6 col-md-6 form-group">
                    <label for="Phone">Phone:</label>
                    <input type="text" name="Num" class="form-control" id="Phone" placeholder="91xxxxxxxx">
                </div>

				        <div class="col-lg-6 col-md-6 form-group">
                    <label for="Email">Email</label>
                    <input type="Email" name="Email" class="form-control" id="Email" placeholder="abc@example.com" >
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                    <label for="DOB">Date of Birth</label>
                    <input type="date" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                </div>

                <div class="col-lg-12 col-md-6 form-group">
                    <label for="adress">Permanent Address</label>
                    <input type="textarea" name="adress" class="form-control" id="adress" placeholder="House No.Locality">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <label for="pincode">Pincode</label>
                    <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Pincode">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                          <label class="control-label templatemo-block">State</label>
                          <select name="State" class="form-control">
                            <option value="select">State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                  </div>

                  <div class="col-lg-6 col-md-6 form-group">
                          <label class="control-label templatemo-block">Program</label>
                          <select name="Program" class="form-control">
                                <option value="select">Program</option>
                                <option value="Btech">Btech</option>
                                <option value="Mtech">Mtech</option>
                                <option value="BCa">BCa</option>
                                <option value="Mca">Mca</option>
                          </select>
                  </div>

          				<div class="col-lg-6 col-md-6 form-group">
                            <label class="control-label templatemo-block">Current Semester</label>
                            <select name="Cursem" class="form-control">
                              <option value="select">Semester</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>
          				  </div>

        				  <div class="col-lg-6 col-md-6 form-group">
                          <label class="control-label templatemo-block">Branch of Study</label>
                          <select name="Branch" class="form-control">
                            <option value="select">Branch</option>
                            <option value="BScience">Basic Science</option>
                            <option value="IT">IT</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="ECE">ECE</option>
                            <option value="ME">ME</option>
                            <option value="CVE">CVE</option>
                          </select>
                        </div>

			 	         <div class="col-lg-6 col-md-6 form-group">
                        <label for="sslc">SSLC/10th Aggregate</label>
                        <input type="text" name="tenpercent" class="form-control" id="sslc" placeholder="">
                </div>
          			<div class="col-lg-6 col-md-6 form-group">
                        <label for="Pu">12th/Diploma Aggregate</label>
                        <input type="text" name="twelveagg" class="form-control" id="Pu" placeholder="">
                </div>

        				<div class="col-lg-6 col-md-6 form-group">
                      <label for="BE">CGPA</label>
                      <input type="text" name="Beagg" class="form-control" id="BE" placeholder="Till curresnt sem">
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                          <label class="control-label templatemo-block">Current Backlogs</label>
                          <select name="Backlogs" class="form-control">
                            <option value="select">Numbers</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
                </div>
				        <div class="col-lg-6 col-md-6 form-group">
                      <label class="control-label templatemo-block">Enrollment Year</label>
                      <select name="eyear" class="form-control">
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                      </select>
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                        <label class="control-label templatemo-block">Passing Year</label>
                        <select name="pyear" class="form-control">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                </div>
        </div>
              </div>
              <div class="row form-group">
                    <div class="col-lg-12">
                            <label class="control-label templatemo-block">Upload your Profile Pic</label>
                            <input type="file" name="profileimg" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true"
                            data-icon="false">

                    </div>
                    <div class="col-lg-12">
                            <label class="control-label templatemo-block">Upload your Resume</label>
                            <input type="file" name="resumedoc" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true"
                            data-icon="false">

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

    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>
