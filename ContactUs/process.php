<?php















$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];



// Database connection
$db=mysqli_connect('localhost','root','','placement-management');
if($db->connect_error){
    echo "$db->connect_error";
    die("Connection Failed : ". $db->connect_error);
} else {
    $stmt = $db->prepare("insert into contact(name,email,number,message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$name,$email,$number,$message);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $db->close();
}
?>

