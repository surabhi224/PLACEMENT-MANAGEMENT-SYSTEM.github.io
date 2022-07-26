<?php

session_start();


// connect to the database
include 'connection.php';
if($db==true)
{
  echo " connected";
}
// initializing variables
$errors= array( );

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db,$_POST['Fname']);
  $lname =mysqli_real_escape_string($db, $_POST['Lname']);
  $enum= mysqli_real_escape_string($db,$_POST['EnrollNum']);
  $USN = mysqli_real_escape_string($db,$_POST['USN']);
  $phno = mysqli_real_escape_string($db,$_POST['Num']);
  $email =mysqli_real_escape_string($db, $_POST['Email']);
  $date = mysqli_real_escape_string($db,$_POST['DOB']);
  $saddress = mysqli_real_escape_string($db,$_POST['adress']);
  $city = mysqli_real_escape_string($db,$_POST['city']);
  $pincode = mysqli_real_escape_string($db,$_POST['pincode']);
  $state = mysqli_real_escape_string($db,$_POST['State']);
  $program = mysqli_real_escape_string($db,$_POST['Program']);
  $cursem = mysqli_real_escape_string($db,$_POST['Cursem']);
  $branch = mysqli_real_escape_string($db,$_POST['Branch']);
  $tenper = mysqli_real_escape_string($db,$_POST['tenpercent']);
  $twelveper = mysqli_real_escape_string($db,$_POST['twelveagg']);
  $beaggregate = mysqli_real_escape_string($db,$_POST['Beagg']);
  $back = mysqli_real_escape_string($db,$_POST['Backlogs']);
  $enrollyear = mysqli_real_escape_string($db,$_POST['eyear']);
  $pyear = mysqli_real_escape_string($db,$_POST['pyear']);
  $img_name = $_FILES['profileimg']['name'];
  $timg_name=$_FILES['profileimg']['tmp_name'];

    $r_name = $_FILES['resumedoc']['name'];
    $tr_name=$_FILES['resumedoc']['tmp_name'];

  $password_1 = mysqli_real_escape_string($db, $_POST['Password']);
	$password_2 = mysqli_real_escape_string($db, $_POST['repassword']);



  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
	if (empty($fname)) { array_push($errors, "Firstname is required"); }
	if (empty($lname)) { array_push($errors, "Lastname is required"); }
  if (empty($USN)) { array_push($errors, "Username is required"); }
	if (empty($enum)) { array_push($errors, "Enrollment number is required"); }
  if (empty($phno)) { array_push($errors, "Phone No is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($date)) { array_push($errors, "Date of birth is required"); }
  if (empty($program)) { array_push($errors, "Program is required"); }
if (empty($branch)) { array_push($errors, "Branch is required"); }
if (empty($enrollyear)) { array_push($errors, "Enrollment year is required"); }
if (empty($pyear)) { array_push($errors, "Passing Year is required"); }

if (empty($img_name))
{
  array_push($errors, "Profile image   is required");
}
else
{
  //validation image
       			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
       			$img_ex_lc = strtolower($img_ex);

       			$allowed_exs = array("jpg", "jpeg", "png");

       			if (in_array($img_ex_lc, $allowed_exs))
             {
              $folder="uploadimg/".$img_name;
              move_uploaded_file($timg_name,$folder);
             }
             else
             {

               	array_push($errors, "You can't upload images of this type");
              }
}


if (empty($r_name))
{
  array_push($errors, "Resume is required");
}
else
{
  //validating resume
              $r_ex = pathinfo($r_name, PATHINFO_EXTENSION);
              $r_ex_lc = strtolower($r_ex);

              $allow_exs = array("pdf", "doc");

              if (in_array($r_ex_lc, $allow_exs))
               {
                 $folder2="uploadr/".$r_name;
                 move_uploaded_file($tr_name,$folder2);
               }
               else
               {

                  array_push($errors, "You can't upload resume of this type");
                }

}

    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if (empty($password_2)) { array_push($errors, "Password is required"); }




    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname))
    {
      array_push($errors, " In Firstname only letters and white space allowed");
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
    {
      array_push($errors, " In Lastname only letters and white space allowed");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
       array_push($errors, "Invalid email");
    }

    //validating phone num
    $filtered_phone_number = filter_var($phno, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
           array_push($errors, "Invalid phone");
     }




    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    }

// first check the database to make sure
// a user does not already exist with the same username and/or email
$user_check_query = "SELECT * FROM users WHERE username='$USN' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
	if ($user['username'] === $USN) {
		array_push($errors, "Username already exists");
	}

	if ($user['email'] === $email) {
		array_push($errors, "email already exists");
	}
}
// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
	$password = $password_1;//encrypt the password before saving in the database

	$query = "INSERT INTO users (fname,lname,username, email, password)
				VALUES('$fname','$lname','$USN', '$email','$password')";
	mysqli_query($db, $query);
  $q2="INSERT INTO student_record VALUES ('$fname', '$lname','$enum', '$USN', '$phno', '$email', '$date', '$saddress','$city','$pincode','$state','$program','$cursem', '$branch', '$tenper', '$twelveper','$beaggregate', '$back', '$enrollyear', '$pyear','$folder','$folder2')";
   mysqli_query($db, $q2);



	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: commonlogin.php');

}
}

// ...

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<!--favicon-->
	<link rel="shortcut icon" href="favicon.ico" type="image/icon">
	<link rel="icon" href="favicon.ico" type="image/icon">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registeration</title>
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	<link href="student module/css/font-awesome.min.css" rel="stylesheet">
	<link href="student module/css/bootstrap.min.css" rel="stylesheet">
	<link href="student module/css/templatemo-style.css" rel="stylesheet">
	<!-- Footer -->
	<link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>

<body class="light-gray-bg">
	<div class="templatemo-content-widget templatemo-login-widget white-bg">
		<header class="text-center">
			<div class="square"></div>
			<h1>Student Register</h1>
		</header>
		<form method="POST" class="templatemo-login-form" action="registeration.php"  enctype="multipart/form-data">
      <?php  if (count($errors) > 0) : ?>
        <div class="alert alert-danger">
        	<?php foreach ($errors as $error) : ?>
        	  <p><?php echo $error ?></p>
        	<?php endforeach ?>
        </div>
      <?php  endif ?>


                <div class="row form-group">
                  <div class="form-group">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" name="Fname" class="form-control" id="inputFirstName" placeholder="Surabhi" >

                  </div>

                  <div class=" form-group">
                    <label for="inputLastName">Last Name</label>
                    <input type="text"  name="Lname" class="form-control" id="inputLastName" placeholder="Mishra" >
                  </div>

                  <div class=" form-group">
                    <label for="usn">Enrollment No.</label>
                    <input type="text" name="EnrollNum" class="form-control" id="usn" placeholder="2019/2994"  >
                  </div>

                  <div class=" form-group">
                    <label for="ui">Username.</label>
                    <input type="text" name="USN" class="form-control" id="ui" placeholder="btbti19088"  >
                  </div>

                  <div class=" form-group">
                      <label for="Phone">Phone:</label>
                      <input type="text" name="Num" class="form-control" id="Phone" placeholder="91xxxxxxxx">
                  </div>

                  <div class="form-group">
                      <label for="Email">Email</label>
                      <input type="Email" name="Email" class="form-control" id="Email" placeholder="abc@example.com" >
                  </div>

                  <div class=" form-group">
                      <label for="DOB">Date of Birth</label>
                      <input type="date" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                  </div>

                  <div class="form-group">
                      <label for="adress">Permanent Address</label>
                      <input type="textarea" name="adress" class="form-control" id="adress" placeholder="House No.Locality">
                  </div>

                  <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" name="city" class="form-control" id="city" placeholder="City">
                  </div>

                  <div class=" form-group">
                      <label for="pincode">Pincode</label>
                      <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Pincode">
                  </div>

                  <div class="form-group">
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

                    <div class="form-group">
                            <label class="control-label templatemo-block">Program</label>
                            <select name="Program" class="form-control">
                                  <option value="select">Program</option>
                                  <option value="Btech">Btech</option>
                                  <option value="Mtech">Mtech</option>
                                  <option value="BCa">BCa</option>
                                  <option value="Mca">Mca</option>
                            </select>
                    </div>

                    <div class="form-group">
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

                    <div class="form-group">
                            <label class="control-label templatemo-block">Branch of Study</label>
                            <select name="Branch" class="form-control">
                              <option value="select">Branch</option>
                              <option value="BScience">Basic Science</option>
                              <option value="IT">IT</option>
                              <option value="CSE">CSE</option>
                              <option value="EEE">EEE</option>
                              <option value="ECE">ECE</option>
                              <option value="MT">MT</option>
                              <option value="CE">CE</option>
                            </select>
                          </div>

                   <div class=" form-group">
                          <label for="sslc">SSLC/10th Aggregate</label>
                          <input type="text" name="tenpercent" class="form-control" id="sslc" placeholder="">
                  </div>
                  <div class=" form-group">
                          <label for="Pu">12th/Diploma Aggregate</label>
                          <input type="text" name="twelveagg" class="form-control" id="Pu" placeholder="">
                  </div>

                  <div class=" form-group">
                        <label for="BE">CGPA</label>
                        <input type="text" name="Beagg" class="form-control" id="BE" placeholder="Till curresnt sem">
                  </div>

                  <div class=" form-group">
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
                  <div class=" form-group">
                        <label class="control-label templatemo-block">Enrollment Year</label>
                        <select name="eyear" class="form-control">
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                        </select>
                  </div>
                  <div class=" form-group">
                          <label class="control-label templatemo-block">Passing Year</label>
                          <select name="pyear" class="form-control">
                              <option value="2023">2023</option>
                              <option value="2024">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                          </select>
                  </div>
                  <div class="form-group">
            				<label for="psw">Password</label>
            				<input type="password" name="Password" id="psw" class="form-control" placeholder="******">
            			</div>

            			<div class="form-group">
            				<label for="rpsw">ReType password</label>
            				<input type="password" name="repassword" id="rpsw" class="form-control" placeholder="Retype Password">
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
          <div class="form-group">
            <button type="submit" name="submit" class="templatemo-blue-button width-100">Register</button>
          </div>

		</form>
    </div>
	</div>

	<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
		<p>Have an Account? <strong><a href="commonlogin.php" class="blue-text">Sign in here!</a></strong></p>
	</div>


</body>

</html>
