<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "ems";
$conn = mysqli_connect($host, $user, $pass,$db);
if(! $conn){
 die("Could not connect: ".mysqli_error());
}


$user_id = $_GET['id'];
//delete records from table
$query = "delete from employee where id = '$user_id'";

$result = mysqli_query($conn,$query);
if($result){
	$_SESSION["success"] = "data deleted successfully";
	header('Location: dashboard.php');
}
else{
	echo "data not deleted,please try again!";
}
mysqli_close($conn);
?> 