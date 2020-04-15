<?php include "../auth/auth.php" ?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Registration form</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../js/jquery.min.js"></script>  
  <script>
    function showOtherReligionTextBox(value) {
       if(value=='others')
          document.getElementById("otherReligon").style.display='inline';
        else
        document.getElementById("otherReligon").style.display='none';
    }
    /*function showText(obj)
    {

      if(obj.value=='other')
      {
        document.getElementById('depart').style.display='inline';
      }
      else
      {
        document.getElementById('depart').style.display='none';
      }
    }*/
    function formValidation(){
      var name = $('#name').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var passlength = $('#password').val().length;

      if(name == ''){
        alert('Please Enter your name');
        return false;
      }
      if(email == ''){
        alert('Please Enter your email id');
        return false;
      }
      if(password == ''){
        alert('Please Enter your password');
        return false;
      }
      if(passlength <= 5){
        alert('Please enter a minimum 5 digit password');
        return false;
      }

    }
</script>
</head>
<body>
  <!-- Including header file here -->
  <?php include "header.php"; ?>
 <!-- Ending File here -->
<div class="display-5 text-primary text-uppercase"><strong><center>Employee Registration Form</center></strong></div> 
<div class="container bg-gray">
  <form class="form-horizontal" method="post" action="insert-user.php" onsubmit=" return formValidation();">
    <?php
      if(isset($_SESSION["success"])){
        echo $_SESSION["success"];
      }
    ?>
    <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <strong for="name">Name:</strong>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter full name">
      </div>
    </div>
    </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <strong for="name">Father Name:</strong>
        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="name" placeholder="Enter father's name">
      </div>
    </div>
    <div class="col-md-6">  
      <div class="form-group">
        <strong for="mname">Mother Name:</strong>
        <input type="text" class="form-control" id="mname" name="mname" aria-describedby="name" placeholder="Enter mother's name">
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-3"> 
  <div class="form-group">
    <strong for="dob">Date of Birth:</strong>
    <input type="date" class="form-control" name="dob" id="date" aria-describedby="date">
  </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <strong for="marital_status">Marital Status:</strong><br>
      <select id="marital_status" name="marital_status">
        <option value="single">Single</option>
        <option value="Married">Married</option>
      </select>
    </div>
  </div>
  <div class="col-md-3">  
     <div class="form-group">
        <strong for="blood_group">Blood Group:</strong><br>
        <select id="blood_group" name="blood_group">
          <option value="A">A+</option>
          <option value="A">A-</option>
          <option value="B">B+</option>
          <option value="B">B-</option>
          <option value="O">O+</option>
          <option value="O">O-</option>
        </select>
      </div>
  </div>
  <div class="col-md-3"> 
    <div class="form-group">
      <strong for="dob">Date of Joining:</strong>
      <input type="date" class="form-control" name="doj" id="date" aria-describedby="date">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <strong>Department:</strong>
       <input type="radio" id="depart" name="depart" value="Web Technology">
        <strong for="webtech">Web Technology</strong>
        <input type="radio" id="depart" name="depart" value="seo">
        <strong for="seo">SEO</strong>        
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
          <strong>Role:</strong>
          <input type="radio" id="role" name="role" value="Admin">
          <strong for="admin">Admin</strong>
          <input type="radio" id="role" name="role" value="Employee">
          <strong for="employee">Employee</strong>
      </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Gender:</strong>
            <input type="radio" id="male" name="gender" value="male">
            <strong for="male">Male</strong>
            <input type="radio" id="female" name="gender" value="female">
            <strong for="female">Female</strong>
            <input type="radio" id="other" name="gender" value="other">
            <strong for="other">Other</strong> 
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
        <strong for="religion">Religion:</strong>
        <select name="religion" onchange="showOtherReligionTextBox(this.value)">
          <option value="hinduism">Hinduism</option>
          <option value="islamic">Islamic</option>
          <option value="christian">Christian</option>
          <option value="Jains">Jainism</option>
          <option value="others">Others(if,specify)</option>

        </select>
        <input id="otherReligon" type="text" style="display:none;"> 
    </div>
  </div>
</div> 
<div class="row">
  <div class="col-md-6"> 
    <div class="form-group">
      <strong for="contact">Contact No.:</strong>
      <input type="text" name="contact" class="form-control" id="tel">
    </div>
  </div>
</div>   
<div class="row">
    <div class="col-md-4">
  <div class="form-group">
    <strong for="mothername">Email address</strong>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <strong for="Password">Password</strong>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <strong for="Password">Confirm Password</strong>
    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Re-enter password">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-6">
    <strong for="tempAddress">Present Address:</strong><br>
    <textarea name="presentaddress" maxlength="1000" cols="50" rows="5"></textarea>
  </div> 
  <div class="col-md-6">
    <strong for="permAddress">Permanent Address:</strong><br>
    <textarea name="permaddress" maxlength="1000" cols="50" rows="5"></textarea>
  </div>      
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</form>
</div>
<div id="footer">
        <div class="row">
          <div class="col-lg-12">
            <p>One word</p>
           </div>
        </div>

</div>
</body>
</html>
<?php
// Destroy the session
session_destroy();
?>