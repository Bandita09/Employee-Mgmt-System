<?php include("../auth/auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>View Tasks</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../js/jquery.min.js"></script>  
  
</head>
<body>
  <!-- Including header file here -->
  <?php include "header.php"; ?>
 <!-- Ending File here --> 
<div class="container">
	<h3>Message Detail View </h3>
	<?php
		$m_id = $_GET['id'];

		$query = "SELECT * FROM `task`";
    	$result = mysqli_query($conn,$query);    	
    	$count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result); 
     ?>
	 
	 <div class="col-sm-12" style="background-color:#f9f9f9;padding:15px;">
	 	
	 	<?php echo $row['task'];?>
	 </div>
	 	
	 	<fieldset> 
	 		<form action="submit-reply.php" method="POST">
	 			<div class="col-sm-2">
	 				<div class="form-group">
	 					<label class="col-lg-2 control-label"><h4>Reply</h4></label>
	 				</div>
	 			</div>
	 			<div class="col-sm-10">
	 				<input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
	 				<input type="hidden" name="user_id" value="<?php echo $_SESSION['id'];?>">
	 				<textarea class="message" name="message" rows= "5" style="width:100%"></textarea>
	 			</div>
	 			<div class="form-group">
	 				<div class="col-lg-10 col-lg-offset-2">
	 					<button  class="btn-success" type="submit" name="submit">Submit</button>
	 				</div>	
	 			</div>
	 			<div class="col-sm-12">
	 				<?php
						$m_id = $_GET['id'];
						$query = "SELECT * FROM `reply` join `employee` ON `employee`.`id` = `reply`.`reply_by` WHERE `m_id` = '".$m_id."'";
    					$result = mysqli_query($conn,$query);    	
    					$count = mysqli_num_rows($result);
       					 $row = mysqli_fetch_array($result); 
     				?>
	 				<div class="form-group" style="background-color: #f2f2f2;margin:15px";>
	 				
	 				<?php echo $row['name']." :-".$row['reply']; ?>	
	 			</div>
	 		</div>
	 	</form>
	 	</fieldset>
</div>
</body>
</html>

