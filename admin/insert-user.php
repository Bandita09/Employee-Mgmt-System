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

	$name  = $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$dob   = $_POST['dob'];
	$doj = $_POST['doj'];
	$depart = $_POST['depart'];
	$role = $_POST['role'];
	$blood_group = $_POST['blood_group'];
	$gender = $_POST['gender'];
	$blood_group = $_POST['blood_group'];
	$religion = $_POST['religion'];
	$marital_status  = $_POST['marital_status'];
	$permaddress = $_POST['permaddress'];
	$presentaddress = $_POST['presentaddress'];
	$contactno = $_POST['contact'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$confirm_pass = md5($_POST['confirmpassword']);
	
}
// insert data into the employee table
if(($name!='' || $email!='') && ($password == $confirm_pass) ){

$query="INSERT into employee (name,father_name,mother_name,dob,doj,department,role,blood_group,gender,religion,
		marital_status,permanent_address,present_address,contactno,email,password,confirmpassword) values ('$name',
		'$fname','$mname','$dob','$doj','$depart','$role','$blood_group','$gender','$religion','$marital_status','$permaddress',
		'$presentaddress','$contactno','$email','$password','$confirm_pass')";
}
$result = mysqli_query($conn,$query);
if($result){
	$_SESSION["success"] = "data inserted successfully";
	header('Location: register.php');
}
else{
	echo "data not inserted,please try again!";
}
mysqli_close($conn);
?> 