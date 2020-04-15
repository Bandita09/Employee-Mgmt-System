<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "ems";
$conn = mysqli_connect($host, $user, $pass,$db);


if(! isset($_SESSION['auth'])){
	header('Location:../login.php');
    }         
?>