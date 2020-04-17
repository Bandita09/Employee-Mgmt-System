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
	$user_id = $_POST['user_id'];
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
// update data into the employee table

if($password== ""){

	$query="UPDATE employee SET name = '$name',father_name = '$fname',mother_name = '$mname',dob='$dob',doj='$doj',department='$depart',role ='$role',blood_group = '$blood_group',gender ='$gender',religion = '$religion',
		marital_status='$marital_status',permanent_address = '$permaddress',present_address='$presentaddress',contactno='$contactno',email='$email' where id = '$user_id'" ;
}
else{
	 $query="UPDATE employee SET name = '$name',father_name = '$fname',mother_name = '$mname',dob='$dob',doj='$doj',department='$depart',role ='$role',blood_group = '$blood_group',gender ='$gender',religion = '$religion',
		marital_status='$marital_status',permanent_address = '$permaddress',present_address='$presentaddress',contactno='$contactno',email='$email',password='$password',confirmpassword='$confirm_pass' where id = '$user_id'" ;
	}
$result = mysqli_query($conn,$query);
if($result){
	$_SESSION["success"] = "data updated successfully";
	header('Location: dashboard.php');
}
else{
	echo "data not updated,please try again!";
}
mysqli_close($conn);
?> 