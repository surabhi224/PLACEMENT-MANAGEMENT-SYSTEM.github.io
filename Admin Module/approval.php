<?php
session_start();
  include '../connection.php';
 ?>


<?php
if(isset($_GET["id"])){
  $SearchQueryParameter = $_GET["id"];
  $sql = "UPDATE users SET status='Approved' WHERE username='$SearchQueryParameter'";

  $Execute = mysqli_query($db,$sql);
  if ($Execute) {
    echo "Comment Approved Su ";
    header('location:Pending Request.php');
    // code...
  }else {
      echo "Something Went Wrong. Try Again !";
    header('location:Pending Request.php');
  }
}
?>
