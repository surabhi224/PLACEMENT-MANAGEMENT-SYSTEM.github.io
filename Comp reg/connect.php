<?php




$compname=$_POST['compname'];
$link=$_POST['link'];
$HRname=$_POST['HRname'];
$HRemail=$_POST['HRemail'];
$contactno=$_POST['contactno'];
$compadd=$_POST['compadd'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
$country=$_POST['country'];
$niche=$_POST['niche'];
$coming=$_POST['coming'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$stipend=$_POST['stipend'];


// Database connection
$db=mysqli_connect('localhost','root','','placement-management');
if($db->connect_error){
    echo "$db->connect_error";
    die("Connection Failed : ". $db->connect_error);
} else {
    $stmt = $db->prepare("insert into company(compname, link, HRname,HRemail,contactno,compadd,pincode,state,country,niche,coming,course,branch,stipend) values(?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?,?, ?)");
    $stmt->bind_param("ssssssissssssi", $compname, $link,$HRname,$HRemail,$contactno,$compadd,$pincode,$state,$country,$niche,$coming,$course,$branch,$stipend);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $db->close();
}
?>




