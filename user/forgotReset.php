<?php
require_once "admin/vendor/autoload.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;


function ch() {
    $key = "example_key";

    try {

        return JWT::decode($_GET["token"], new Key($key, "HS256"));

    } catch (UnexpectedValueException $throwable) {
        header("Location: login.php");
    } catch (DomainException $throwable) {
        // Report this as 4xx client error
        header("Location: login.php");
    } catch(InvalidArgumentException $throwable){
        // Report this as 5xx server error
        header("Location: login.php");
    }
}


ch();



?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="updatepassword.php" method="post">
            <p id="message"></p>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="conf_password" name="confpassword" required>
            </div>
            <div class="pass"><a href="login.php">Login</a></div>
            <div class="row button">
                <input type="submit" value="Update Password" name="submit">
            </div>
        </form>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    document.querySelector('form').addEventListener('submit', (e) => {
        e.preventDefault()

        $.ajax({
            type: 'post',
            url: 'updatePassword.php',
            data: $('form').serialize(),

            success: function (response){
                document.querySelector('#message').innerHTML = JSON.parse(response).message
                console.log(JSON.parse(response).message)
            }})
    })
</script>
</html>
