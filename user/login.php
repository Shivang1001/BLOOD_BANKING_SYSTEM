<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="signin.php" method="post">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email or Phone" name="username" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="pass"><a href="ForgotPassword.html">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login" name="submit">
            </div>
        </form>
    </div>
</div>

</body>
</html>
