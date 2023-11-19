
<!DOCTYPE html>
<html lang ="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale =1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="user_dashboard/img/favicon.ico">
  <title> Sign in & Sign up</title>
</head>


<body>
  <div class="wrapper">
    <div class="form-container sign-up">
      <form action="signup.php" method="post">

        <!--signup-->

        <h2>sign up</h2>
        <div class="form-group">
          <input type = "text" name="username" required>
          <label for="">Username</label>
          <i class="fas fa-user"></i>
        </div>
        <div class="form-group">
          <input type = "email" name="email" required>
          <label for="">Email</label>
          <i class="fas fa-at"></i>
        </div>
        <div class="form-group">
          <input type = "password" name="password" required>
          <label for="">Password</label>
          <i class="fas fa-lock"></i>
        </div>
        <input type="submit" name="submit" class="btn">Sign up</input>
        <div class="link">
          <p>Already have an account?<a href="#" class="signin-link">Sign in</a></p>
        </div>
      </form>
    </div>

    <!--signin-->

    <div class="form-container sign-in">
    <form action="signin.php" method="post">
      <h2>Login</h2>
      <div class="form-group">
        <input type="text" name="username" required>
        <i class="fas fa-user"></i>
        <label for="">Username</label>
      </div>
      <div class="form-group">
        <input type="password" name="password" required>
        <i class="fas fa-lock"></i>
        <label for="">Password</label>
      </div>
      <div class="forgot-pass">
        <a href="ForgotPassword.html">Forgot password?</a>
      </div>
      <input type="submit" name="submit" class="btn">login</input>
      <div class="link">
          <p>Don't have an account?<a href="#" class="signup-link"> Sign up</a></p>
      </div>
    </form>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>

</html>
