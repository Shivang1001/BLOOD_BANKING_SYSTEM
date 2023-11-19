<?php
    include 'connection.php';


    $password = md5($_POST['password']);
    $confpassowrd = md5($_POST['confpassword']);

    $sql = "UPDATE signup SET password = '$password' , confpassword = '$confpassowrd'";
    mysqli_query($con, $sql);

    echo json_encode([ "message" => "Password Updated Successfully" ]);