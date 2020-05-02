<?php include("../auth/auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Assign Leave</title>
  <link rel="stylesheet" type="text/css" href ="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href ="../css/style.css">
  <script src="../js/jquery.min.js"></script>    
</head>
<body>
  <!-- Including header file here -->
  <?php include "header.php"; ?>
 <!-- Ending File here --> 
<div class="container">
  <form class="form-horizontal" method="post" action="insert-task.php" onsubmit=" return formValidation();">
    <?php
      if(isset($_SESSION["success"])){
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
      }
    ?>
    <legend><h2><u>Assign Leave To Employees</u></h2><a href="alltask.php" type="button" class="btn btn-primary">Leave</a></legend>
   <!-- left box -->
  <div class="row">
    <div class="col-md-3" >
      <input type="hidden" name="assign_by" value="<?php echo $_SESSION['id']?>">
      <label class= "col-md-12 col-lg-12"><b>Employee Lists:</b></label>
      <div class="form-group" style="background-color: #d9d9d9;padding:15px;">
        
        <?php
        $query = "SELECT * from employee where role='Employee' ORDER BY id DESC ";
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
    <div class="col-md-9" id="leave_details"> 
        <div class="form-group">
          <label class="col-lg-3"><b>Valid From:</b></label> 
            <input type="date" name="validFrom" placeholder="dd/mm/yyyy">
        </div> 
      <div class="form-group"> 
        <label class="col-lg-3"><b>Valid To:</b></label>
          <input type="date" name="validTo" placeholder="dd/mm/yyyy">
      </div>  
      <div class="form-group">
        <label class="col-lg-3"><b>Casual Leave:</b></label>
        <input type="text" name="c_leave">
      </div>      
      <div class="form-group">  
        <label class="col-lg-3"><b>Sick Leave:</b></label>
        <input type="text" name="s_leave">
      </div>      
      <div class="form-group">  
        <label class="col-lg-3"><b>Earned Leave:</b></label>
        <input type="text" name="e_leave">
      </div>
    </div>
  </div>
    <div class="col-md-12 col-lg-12" style="margin-top: 10px;">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
     
     </div>
  </form>
</div>
</body>
</html>