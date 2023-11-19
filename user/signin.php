<?php
require_once("connection.php");
session_start();
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $sql="select img from signup where username='".$username."' AND password='".$password."'";
  $result=mysqli_query($con,$sql);

  $row = mysqli_fetch_assoc($result);


if(mysqli_num_rows($result) > 0)
{
  $_SESSION['username'] = $username;
  $_SESSION['img'] = $row['img'];

//  $sql0 = "UPDATE `signup` SET adm_status= '0'";
//  $r0 = mysqli_query($con,$sql0);
  $sql1 = "UPDATE `signup` SET adm_status= '1' WHERE username='$username' ";
  $r1=mysqli_query($con, $sql1);
  echo "<script> window.location.assign('admin/index.php?page=0'); </script>";
  exit();
}
else {
  echo "<script>alert('Your credentials are Wrong');</script>";
  //echo "<script> window.location.assign('login.php'); </script>";
  //exit();
}
}
 ?>
