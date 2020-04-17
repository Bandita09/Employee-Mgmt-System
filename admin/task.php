<?php include("../auth/auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Assign Task</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../js/jquery.min.js"></script>  
  
</head>
<body>
  <!-- Including header file here -->
  <?php include "header.php"; ?>
 <!-- Ending File here --> 
<div class="container">
  <form class="form-horizontal" method="post" action="insert-user.php" onsubmit=" return formValidation();">
    <?php
      if(isset($_SESSION["success"])){
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
      }
    ?>
    <h2><u>Assign Task</u></h2>
   <!-- left box -->
  <div class="row">
    <div class="col-md-3" >
      <label class= "col-md-12 col-lg-12" for="name"><b>Employee Lists:</b></label>
      <div class="form-group" style="background-color: #d9d9d9;padding:15px;">
        
        <?php
        $query = "SELECT * from employee";
        $result = mysqli_query($conn,$query);
        $count = mysqli_num_rows($result);
          while($rows = mysqli_fetch_array($result)){
        ?>
        <div class="checkbox">
          <input type="checkbox"  name="emp[]" value="<?php echo $rows['id']; ?>">
          <strong><?php echo $rows['name']; ?></strong>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="col-md-9">  
      <div class="form-group">
        <label class="col-lg-12 col-md-12 col-xs-12"><b>Message:</b></label>
        <textarea name="message" maxlength="1000" cols="100" rows="10"></textarea>
      </div>
    </div>
  </div>
    <div class="col-md-12 col-lg-12" style="margin-top: 10px;">
      
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      
     </div>
  </div>

</form>
</body>
</html>