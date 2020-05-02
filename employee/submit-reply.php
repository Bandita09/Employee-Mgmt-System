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


if(isset($_POST['submit'])){

	$m_id    =  $_POST['m_id'];
	$user_id =  $_POST['user_id'];
	$message = $_POST['message'];
}

$query="INSERT into reply (r_id,m_id,reply,reply_by) values ('',
		'$m_id','$message','$user_id')";

$result = mysqli_query($conn,$query);
if($result){
	$_SESSION["success"] = "Reply Sent successfully";
	header('Location: task.php');
}
else{
	echo "data not inserted,please try again!";
}
mysqli_close($conn);
?> 