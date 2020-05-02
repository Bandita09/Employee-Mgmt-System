<?php include("../auth/auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Task Lists</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../js/jquery.min.js"></script>  
  
</head>
<body>
  <!-- Including header file here -->
  <?php include "header.php"; ?>
 <!-- Ending File here --> 
<div class="container">
  <center><h3><u>Task Lists</h3></u></center>
  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Tasks</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
  </thead>
  <tbody>
    <?php
    $i = 1;
    $query = "SELECT * FROM `task` where `user_id` = '".$_SESSION['id']."'";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
    if($count > 0){
          while($rows = mysqli_fetch_array($result)){

     ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo substr($rows['task'],0,50); ?></td>
      <td><?php echo $rows['date_time']; ?></td>
      <td><a href="view-user.php?id=<?php echo $rows['t_id']; ?>">View</a></td>
    </tr>
    <?php $i++; }}else{
        echo "error";
    }?>
  </tbody>
</table> 
  </div>
</body>
</html>