<?php
include '../connection.php';
$SarchQueryParameter=$_GET['id'];
$q="DELETE from users where username='$SarchQueryParameter'";
/*$q1="DELETE from student_record where usn='$SarchQueryParameter'";*/
$data=mysqli_query($db,$q);

if($data)
{
  echo "Record deleted";

}
else {
  echo "No Record deleted";
}

 ?>
