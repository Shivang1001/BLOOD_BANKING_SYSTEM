<?php
include("../connection.php");
if(isset($_POST["submit"])){
$username	 = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
//$cpassword = $_POST["cpassword"];

$sql = "INSERT INTO user_signup(username,email,password) VALUES ('$username', '$email','$password')";
$result=mysqli_query($con,$sql);

if($result)
{
  echo "Data inserted";
}
else {
  echo "dni";
}
}
?>
