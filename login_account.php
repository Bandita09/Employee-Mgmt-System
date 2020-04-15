<?php
// Start the session
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "ems";
$conn = mysqli_connect($host, $user, $pass,$db);
if(! $conn){
 die("Could not connect: ".mysqli_error());
}

//login account process
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
$query = "SELECT * from employee where email= '$email' AND password = '$password'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($count == 1){

	$session_id = session_id();
	$_SESSION['auth'] = $session_id;
	
	$role = $row['role'];
	if($role == 'Admin'){
		header('Location:admin/dashboard.php');
	}
	elseif($role == 'Employee'){
		header('Location:employee/dashboard.php');
	}
	else{
		header('Location:login.php');
	}
}
else{
	$_SESSION['error'] ="Email or Password is Wrong!";
	header('Location:login.php');
	}
}