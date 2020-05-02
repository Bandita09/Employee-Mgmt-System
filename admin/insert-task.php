<?php include("../auth/auth.php"); ?>
<?php
if(isset($_POST['submit'])){

	$message  = mysqli_real_escape_string($conn,$_POST['message']);
	$assign_by = $_POST['assign_by'];
	 $emplist = $_POST['emp'];	
}
foreach($emplist as $emp){

// insert data into the employee table
$query="INSERT into task (t_id,task,user_id,assigned_by) values ('',
		'$message','$emp','$assign_by')";

$result = mysqli_query($conn,$query);
}
if($result){
	$_SESSION["success"] = "Message send successfully";
	header('Location: task.php');
}
else{
	echo "data not inserted,please try again!";
}

mysqli_close($conn);
?> 