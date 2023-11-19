<?php
    include 'connection.php';


    $password = $_POST['password'];
    $confpassowrd = md5($_POST['confpassword']);

    $sql = "UPDATE user_signup SET password = '$password'";
    mysqli_query($con, $sql);

    echo json_encode([ "message" => "Password Updated Successfully" ]);