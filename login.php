<!DOCTYPE html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">  
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>  
  <script>
   function formValidation(){
      var email = $('#email').val();
      var password = $('#password').val();

      if(email == ''){
        alert('Please Enter your email id');
        return false;
      }
      if(password == ''){
        alert('Please Enter your password');
        return false;
      }
    }
</script>
</head>
<body class="bg-primary">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="./images/emp.jpg" style="width:100px; "></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>-->
     
     
    </ul>
    <a class="btn btn-secondary my-2 my-sm-0" href="logout.php">Logout</a>
  </div>
</nav>
   <div class="login-page">
      <div class="form">
         <form class="login-form col" method="post" action="login_account.php" onsubmit=" return formValidation();">
            <?php
               if(isset($_SESSION["success"])){
                  echo $_SESSION["success"];
                  unset($_SESSION["success"]);
               }
               if(isset($_SESSION["error"])){
                  echo $_SESSION["error"];
                  unset($_SESSION["error"]);
               }
            ?>
            <input type="email"  name="email" id="email" placeholder="Enter your email-id"/>
            <input type="password" name="password"  id="password" placeholder="Enter your password"/>
            <button type="submit" name="submit">Log in</button>
           <!-- <p class="message">Not registered? <a href="register.php">Register Yourself!</a></p>-->
         </form>
      </div>
   </div>
</body>
</html>