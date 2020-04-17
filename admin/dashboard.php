<?php include("../auth/auth.php"); ?>
<?php include ("header.php"); ?>
<div class="container">
	<div class="col display-4">
		<center>
	<?php
		echo "Welcome to Admin Dasboard";
	?></center></div>
	<table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Department</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
  </thead>
  <tbody>
    <?php
    $i = 1;
    $query = "SELECT * from employee";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
   
    if($count > 0){
          while($rows = mysqli_fetch_array($result)){
     ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $rows['name']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['department']; ?></td>
      <td><?php echo $rows['role']; ?></td>
      <td><a href="edit-user.php?id=<?php echo $rows['id'] ; ?>">Edit</a>|<a href="delete-user.php?id=<?php echo $rows['id'] ; ?>">Delete</a></td>
    </tr>
    <?php $i++; }}else{
        echo "error";
    }?>
  </tbody>
</table> 
</div>