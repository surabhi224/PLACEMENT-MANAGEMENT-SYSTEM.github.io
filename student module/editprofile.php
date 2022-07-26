<?php
include '../connection.php';
session_start();
$SarchQueryParameter = $_SESSION['username'];
$errors= array();
if(isset($_POST["update"]))
{
  $fname = $_POST['Fname'];
  $lname = $_POST['Lname'];
  $enum= $_POST['EnrollNum'];
  $USN = $_POST['USN'];

  $phno = $_POST['Num'];
  $email = $_POST['Email'];
  $date = $_POST['DOB'];
  $saddress = $_POST['adress'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];
  $state = $_POST['State'];
  $program = $_POST['Program'];
  $cursem = $_POST['Cursem'];
  $branch = $_POST['Branch'];
  $tenper = $_POST['tenpercent'];
  $twelveper = $_POST['twelveagg'];
  $beaggregate = $_POST['Beagg'];
  $back = $_POST['Backlogs'];
  $enrollyear = $_POST['eyear'];
  $pyea = $_POST['pyear'];
  $img=$_FILES['profileimg'];
  $img_name = $_FILES['profileimg']['name'];
  $timg_name=$_FILES['profileimg']['tmp_name'];
  $folder="uploadimg/".$img_name;

$r=$_FILES['resumedoc'];
    $r_name = $_FILES['resumedoc']['name'];
    $tr_name=$_FILES['resumedoc']['tmp_name'];
    $folder2="uploadr/".$r_name;

    if( !empty($img_name))
    {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png");

      if (in_array($img_ex_lc, $allowed_exs))
       {
         $f1="../uploadimg/".$img_name;
         move_uploaded_file($timg_name,$f1);
       }
       else
       {

          array_push($errors, "You can't upload images of this type");
        }
}
        if(!empty($r_name) )
        {
          $r_ex = pathinfo($r_name, PATHINFO_EXTENSION);
          $r_ex_lc = strtolower($r_ex);

          $allow_exs = array("pdf", "doc");

          if (in_array($r_ex_lc, $allow_exs))
           {
             $f2="../uploadr/".$r_name;
             move_uploaded_file($tr_name,$f2);

           }
           else
           {

              array_push($errors, "You can't upload resume of this type");
            }

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




    if(strcmp($_SESSION['username'],$USN)!=0)
    {
      array_push($errors, "yOU CANT CHG YOUR USERNAME");
    }
    if(strcmp($_SESSION['firstname'],$fname)!=0)
    {
      array_push($errors, "yOU CANT CHG YOUR FirstNAME");
    }
    if(strcmp($_SESSION['lastname'],$lname)!=0)
    {
      array_push($errors, "yOU CANT CHG YOUR LastNAME");
    }
    if(strcmp($_SESSION['email'],$email)!=0)
    {
      array_push($errors, "yOU CANT CHG YOUR Email");
    }




if(count($errors) == 0)
{
  if(!empty($img_name) && !empty($r_name) )
  {
  $q="UPDATE student_record SET fname='$_SESSION[firstname]',lname='$_SESSION[lastname]',enroll_no='$enum' ,phn_no='$phno',email='$_SESSION[email]',dob='$date',permt_add='$saddress',city='$city',pincode='$pincode',state='$state',program='$program',branch_study='$branch',
  curr_sem='$cursem',tenth_aggr='$tenper',twelvth_aggr='$twelveper',curr_blog='$back',enroll_year='$enrollyear',
  pass_year='$pyea',cgpa=' $beaggregate',profile_pic='$folder',resume='$folder2',usn='$_SESSION[username]'
   where usn='$SarchQueryParameter'";


  }
  else if((empty($img_name) && !empty($r_name) )){
    $q="UPDATE student_record SET fname='$_SESSION[firstname]',lname='$_SESSION[lastname]',enroll_no='$enum',phn_no='$phno',email='$_SESSION[email]',dob='$date',permt_add='$saddress',city='$city',pincode='$pincode',state='$state',program='$program',branch_study='$branch',
    curr_sem='$cursem',tenth_aggr='$tenper',twelvth_aggr='$twelveper',curr_blog='$back',enroll_year='$enrollyear',
    pass_year='$pyea',cgpa=' $beaggregate',resume='$folder2',usn='$_SESSION[username]'
     where usn='$SarchQueryParameter'";
  }

  else if(!(empty($img_name) && empty($r_name) ))
  {
  $q="UPDATE student_record SET fname='$_SESSION[firstname]',lname='$_SESSION[lastname]',enroll_no='$enum',phn_no='$phno',email='$_SESSION[email]',dob='$date',permt_add='$saddress',city='$city',pincode='$pincode',state='$state',program='$program',branch_study='$branch',
  curr_sem='$cursem',tenth_aggr='$tenper',twelvth_aggr='$twelveper',curr_blog='$back',enroll_year='$enrollyear',
  pass_year='$pyea',profile_pic='$folder',cgpa=' $beaggregate',usn='$_SESSION[username]'
   where usn='$SarchQueryParameter'";


  }
  else {
    $q="UPDATE student_record SET fname='$_SESSION[firstname]',lname='$_SESSION[lastname]',enroll_no='$enum',phn_no='$phno',email='$_SESSION[email]',dob='$date',permt_add='$saddress',city='$city',pincode='$pincode',state='$state',program='$program',branch_study='$branch',
    curr_sem='$cursem',tenth_aggr='$tenper',twelvth_aggr='$twelveper',curr_blog='$back',enroll_year='$enrollyear',
    pass_year='$pyea',cgpa=' $beaggregate',usn='$_SESSION[username]'
     where usn='$SarchQueryParameter'";

  }

  $d=mysqli_query($db,$q);
  if($d)
  {
  echo "<script>alert('record updated');</script>";
  }
  else {
  echo "<script>alert(' no record updated');</script>";
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
    <header class="text-center">
          <div class="square"></div>
          <h1>Update</h1>
        </header>
        <?php
   $sql = "SELECT * FROM `student_record` where usn='$SarchQueryParameter'";
      /*  $sql="Select * from student_record where usn='$SarchQueryParameter'";*/
        $data=mysqli_query($db,$sql);
        $res=mysqli_fetch_assoc($data);

         ?>
        <form action="editprofile.php?id=<?php echo $SarchQueryParameter;?>" class="templatemo-login-form" method="post" enctype="multipart/form-data">
        <?php  if (count($errors) > 0) : ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
              <p><?php echo $error ?></p>
            <?php endforeach ?>
          </div>
        <?php  endif ?>
          <div class="row form-group">
          <div class="col-lg-12" style="margin-bottom:20px;margin-left:80px">

            <img  class="mb-1" src="<?php echo "../".$res['profile_pic']?>" width="200px" height="200px" >
            <label class="control-label templatemo-block">Change your Profile Pic</label>
        <span>  <input type="file" name="profileimg" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true"
            data-icon="false"></span>
         </div>

            <div class="form-group">
              <label for="inputFirstName">First Name</label>
              <input type="text" name="Fname" class="form-control" id="inputFirstName" value=<?php echo $res['fname']?> >
            </div>
            <div class="form-group">
              <label for="inputLastName">Last Name</label>
              <input type="text"  name="Lname" class="form-control" id="inputLastName" value=<?php echo $res['lname']?> >
            </div>

    <div class="form-group">
              <label for="usn">Enrollment No.</label>
              <input type="text" name="EnrollNum" class="form-control" id="usn" value=<?php echo $res['enroll_no']?> >
            </div>
            <div class=" form-group">
                      <label for="ui">Unique Id.</label>
                      <input type="text" name="USN" class="form-control" id="ui" value=<?php echo $res['usn']?> >
                    </div>

    <div class="form-group">
              <label for="Phone">Phone:</label>
              <input type="text" name="Num" class="form-control" id="Phone" value=<?php echo $res['phn_no']?>>
            </div>

     <div class=" form-group">
              <label for="Email">Email</label>
              <input type="Email" name="Email" class="form-control" id="Email" value=<?php echo $res['email']?>>
            </div>

              <div class="form-group">
                <label for="DOB">Date of Birth</label>
                <input type="date" name="DOB" class="form-control" id="DOB" value=<?php echo $res['dob']?>>
              </div>

            <div class=" form-group">
              <label for="adress">Permanent Address</label>
              <input type="textarea" name="adress" class="form-control" id="adress" value=<?php echo $res['permt_add']?>>
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" name="city" class="form-control" id="city" value=<?php echo $res['city']?>>
            </div>
            <div class="form-group">
              <label for="pincode">Pincode</label>
              <input type="text" name="pincode" class="form-control" id="pincode" value=<?php echo $res['pincode']?>>
            </div>
            <div class="form-group">
                      <label class="control-label templatemo-block">State</label>
                      <select name="State" class="form-control" >
                        <option value=<?php echo $res['state']?> selected><?php echo $res['state']?></option>
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

              <div class=" form-group">
                        <label class="control-label templatemo-block">Program</label>
                        <select name="Program" class="form-control">
                          <option value="<?php echo $res['program']?>" selected><?php echo $res['program']?></option>
                          <option value="Btech">Btech</option>
                          <option value="Mtech">Mtech</option>
                          <option value="BCa">BCa</option>
                          <option value="Mca">Mca</option>
                        </select>
                </div>
    <div class="form-group">
              <label class="control-label templatemo-block">Current Semester</label>
              <select name="Cursem" class="form-control">
                <option value="<?php echo $res['curr_sem']?>"><?php echo $res['curr_sem']?></option>
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
              <label class="control-label templatemo-block">Branch of Study</label>
              <select name="Branch" class="form-control">
                <option value=<?php echo $res['branch_study']?> selected><?php echo $res['branch_study']?></option>
                <option value="BScience">Basic Science</option>
                <option value="IT">IT</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
                <option value="MT">MT</option>
                <option value="CE">CE</option>
              </select>
            </div>
    <div class="form-group">
              <label for="sslc">SSLC/10th Aggregate</label>
              <input type="text" name="tenpercent" class="form-control" id="sslc" value=<?php echo $res['tenth_aggr']?>>
            </div>
    <div class=" form-group">
              <label for="Pu">12th/Diploma Aggregate</label>
              <input type="text" name="twelveagg" class="form-control" id="Pu" value=<?php echo $res['twelvth_aggr']?>>
            </div>
    <div class=" form-group">
              <label for="BE">CGPA</label>
              <input type="text" name="Beagg" class="form-control" id="BE" value=<?php echo $res['cgpa']?>>
            </div>
            <div class="form-group">
              <label class="control-label templatemo-block">Current Backlogs</label>
              <select name="Backlogs" class="form-control">
                <option value=<?php echo $res['curr_blog']?> selected><?php echo $res['curr_blog']?></option>
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
    <div class="form-group">
              <label class="control-label templatemo-block">Enrollment Year</label>
              <select name="eyear" class="form-control">
                <option value=<?php echo $res['enroll_no']?> selected><?php echo $res['enroll_year']?></option>
                <option value="Y">2018</option>
                <option value="N">2019</option>
                <option value="N">2020</option>
                <option value="N">2021</option>
              </select>
            </div>
            <div class="form-group">
                      <label class="control-label templatemo-block">Passing Year</label>
                      <select name="pyear" class="form-control">
                        <option value=<?php echo $res['pass_year']?> selected><?php echo $res['pass_year']?></option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                    </div>
          </div>
         <div class="row form-group">

            <div class="col-lg-12">
              <span class="FieldInfo">Existing Resume: </span>
             <a href="<?php echo "../".$res['resume']?>">View Resume</a>
            <span>  <label class="control-label templatemo-block">change your Resume File</label>
            <input type="file" name="resumedoc"  id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true"
              data-icon="false"></span>
            </div>
          </div>
          <div class="form-group text-right">

    <button type="submit"  name="update" class="templatemo-blue-button">update</button>

          </div>
        </form>
</div>


</body>
</html>
