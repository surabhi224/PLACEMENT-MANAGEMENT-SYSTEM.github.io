<?php

$name=$_POST['name'];
$enroll=$_POST['enroll'];
$branch=$_POST['branch'];
$batch=$_POST['batch'];
$salary=$_POST['salary'];
$designation=$_POST['designation'];
$comp_name=$_POST['comp_name'];
$comp_state=$_POST['comp_state'];




// Database connection
$db=mysqli_connect('localhost','root','','stuents');
if($db->connect_error){
    echo "$db->connect_error";
    die("Connection Failed : ". $db->connect_error);
} else {
    $stmt = $db->prepare("insert into record(name, enroll, branch,batch,salary,designation,comp_name,comp_state) values(?, ?, ?, ?, ?, ?,?, ?)");
    $stmt->bind_param("ssssisss", $name, $enroll,$branch,$batch,$salary,$designation,$comp_name,$comp_state);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $db->close();
}
?>
