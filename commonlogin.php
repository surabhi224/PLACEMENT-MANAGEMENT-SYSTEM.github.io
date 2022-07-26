<?php
session_start();
include 'connection.php';

$errors= array();
$ausnname="admin";
$apassword="pms0710@admin";
if (isset($_POST['login']))
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $role = mysqli_real_escape_string($db, $_POST['Role']);


  if (empty($username))
  {
  	array_push($errors, "Username is required");
  }
  if (empty($password))
  {
  	array_push($errors, "Password is required");
  }


  if (count($errors) == 0)
  {
    if(strcmp($role,"Admin")==0 )
    {
      if( strcmp($username,$ausnname)==0 && strcmp($password,$apassword)==0)
      {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: Admin module/WriteNotification.php');
      }
      else
      {
        array_push($errors, "Wrong username/password combination");
      }
    }


    else if(strcmp($role,"Student")==0)
    {
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
      $results = mysqli_query($db, $query);
      $row = mysqli_fetch_assoc($results);
      $sql="SELECT * FROM student_record WHERE usn='$username'";
      $result = mysqli_query($db, $sql);
      $rows = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($results) == 1)
        {
          $status=$row["status"];
          $firstname=$row["fname"];
          $lastname=$row["lname"];
          $email=$row["email"];
          $img=$rows["profile_pic"];
          if(strcmp($status,"Approved")==0)
          {
              $_SESSION['username'] = $username;
              $_SESSION['firstname'] = $firstname;
              $_SESSION['lastname'] = $lastname;
              $_SESSION['email'] = $email;
              $_SESSION['image']=$img;
              $_SESSION['success'] = "You are now logged in";
              header('location: Student module/dashboard.php');
          }
          else
          {
            array_push($errors, "Not approved  ");
          }
        }
        else
        {
          array_push($errors,"Wrong username/password combination");
        }
      }
      else
        {
          array_push($errors,"Enter valid role");
        }
    }
  }



?>









<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <!--favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/icon">
  <link rel="icon" href="favicon.ico" type="image/icon">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="student module/css/font-awesome.min.css" rel="stylesheet">
  <link href="student module/css/bootstrap.min.css" rel="stylesheet">
  <link href="student module/css/templatemo-style.css" rel="stylesheet">

</head>
<body class="light-gray-bg">
  <div class="templatemo-content-widget templatemo-login-widget white-bg">
    <header class="text-center">
      <div class="square"></div>
      <h1>Login</h1>
    </header>
    <form  action="" class="templatemo-login-form" method="POST">
          <?php  if (count($errors) > 0) : ?>
            <div class="alert alert-danger">
            	<?php foreach ($errors as $error) : ?>
            	  <p><?php echo $error ?></p>
            	<?php endforeach ?>
            </div>
          <?php  endif ?>
           <div class="form-group">
              <label for="usn">Username</label>
              <input type="text" class="form-control" id="usn " placeholder="Username" name="username">
          </div>

          <div class="form-group">
              <label for="pwd">Password</label>
              <input type="password" class="form-control"id="pwd" placeholder="******" name="password">
          </div>

          <div class="form-group">
              <label for="role">Role</label>
              <select name="Role" class="form-control" id="role">
                <option value="select">Select</option>
                <option value="Admin">Admin</option>
                <option value="Student">Student</option>
              </select>
          </div>

          <div class="form-group">
              <div class="checkbox squaredTwo">
                  <input type="checkbox" id="c1" name="cc" />
              </div>
          </div>

          <div class="form-group">
            <button type="submit" name="login" class="templatemo-blue-button width-100">Login</button>
          </div>
    </form>
  </div>
  <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
      <p>Not a registered Student yet? <strong><a href="registeration.php" class="blue-text">Sign up now!</a></strong></p>
  </div>
</body>
</html>
