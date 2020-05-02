<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="./res/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- Custom style for new login page -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>

  <body>
    <form class="form-signin">
      <div class="text-center mb-8">
        <a class="text-dark display-4" href="./new-login.php" style="text-decoration: none;">EMS<sup><i class="fa fa-trademark"></i></sup></a>
        <h1 class="h3 mb-3 font-weight-normal">Employee Management System</h1>
        <p>Sign in using <span class="font-weight-bold">Email id</span> and <span class="font-weight-bold">Password</span>. Alternatively, <a href="./new-register.php">Click here to Register</a></p>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center"><i class="fa fa-copyright"></i> 2020-2021</p>
    </form>
  </body>
</html>
