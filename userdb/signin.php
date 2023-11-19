<?php
require_once("connection.php");


if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql="select * from user_signup where username='".$username."' AND password='".$password."'
limit 3";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){
  echo "<script> window.location.assign('user_dashboard/index.php'); </script>";
  exit();
}
else {
  echo "<script>alert('Your credentials are Wrong');</script>";
  echo "<script> window.location.assign('login.php'); </script>";
  exit();
}
}
 ?>
