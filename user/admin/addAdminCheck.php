<?php
require_once "vendor/autoload.php";
include "../connection.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

echo "<pre>";

function ch() {
    $key = "example_key";

    try {

        return JWT::decode($_GET["token"], new Key($key, "HS256"));

    } catch (UnexpectedValueException $throwable) {
        header("Location: admin.php");
    } catch (DomainException $throwable) {
        // Report this as 4xx client error
        header("Location: admin.php");
    } catch(InvalidArgumentException $throwable){
        // Report this as 5xx server error
        header("Location: admin.php");
    }
}


ch();
$key = "example_key";


$decoded = (array) JWT::decode($_GET["token"], new Key($key, "HS256"));
print_r($decoded);
$username = $decoded["username"];
$email = $decoded["emailid"];

$sql1 = "SELECT * FROM signup WHERE (username='$username' OR emailid='$email')";
$r1 = mysqli_query($con, $sql1);

if ($decoded["password"] != $decoded["cpassword"]) {
    return;
}

if (mysqli_num_rows($r1) > 0) {
    $row = mysqli_fetch_assoc($r1);
    if ($email == isset($row["email"])) {
        echo "<script>alert('Email already exists');</script>";
        echo "<script> window.location.assign('login.php'); </script>";
    } elseif ($username == isset($row["username"])) {
        echo "<script>alert('Username already exists');</script>";
        echo "<script> window.location.assign('login.php'); </script>";
    }
}

$sql =
    "INSERT INTO signup(first_name,last_name,emailid,username,password,confpassword,address,addinfo,zipcode,city,country,phnumber,adm_status, img) VALUES ('" .
    $decoded["fname"] .
    "','" .
    $decoded["lname"] .
    "','" .
    $decoded["emailid"] .
    "','" .
    $decoded["username"] .
    "','" .
    md5($decoded["password"]) .
    "','" .
    md5($decoded["cpassword"]) .
    "','" .
    $decoded["address"] .
    "','" .
    $decoded["info"] .
    "','" .
    $decoded["code"] .
    "','" .
    $decoded["city"] .
    "','" .
    $decoded["country"] .
    "','" .
    $decoded["number"] .
    "', 0,'".
    $decoded["img"]."')";
echo $sql;
$result = mysqli_query($con, $sql);

if ($result) {
    echo "Data inserted";
} else {
    echo "dni";
}



?>
