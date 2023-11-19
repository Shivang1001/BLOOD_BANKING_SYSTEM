<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database_name="test2";


    $conn = mysqli_connect($server, $username, $password, $database_name);

    if(!$conn){
        die("Connection to the database failed due to ".mysqli_connect_error());
    }

      $PatientName=$_POST['PatientName'];
      $ContactName=$_POST['ContactName'];
      $PhoneNumber=$_POST['PhoneNumber'];
      $Emailid=$_POST['Emailid'];
      $BloodGroup=$_POST['BloodGroup'];
      $RequiredDate=$_POST['RequiredDate'];
      $City=$_POST['City'];
      $DoctorName=$_POST['DoctorName'];
      $Gender=$_POST['Gender'];
      $HospitalDetails=$_POST['HospitalDetails'];
      $Comments=$_POST['Comments'];

    $sql = "INSERT INTO requestblood (PatientName, ContactName, PhoneNumber,Emailid,
     BloodGroup, RequiredDate, City,DoctorName, Gender, HospitalDetails, Comments, dt)
    VALUES (' $PatientName', '$ContactName', '$PhoneNumber', '$Emailid', '$BloodGroup',
     '$RequiredDate', '$City','$DoctorName', '$Gender', '$HospitalDetails', '$Comments', CURDATE());";
    // $vari="Heloo";
     //echo $sql;

     if($conn->query($sql) == true){
      echo'<script type="text/javascript"> alert("Data saved successfully") </script>';
      //echo"Success";
    }
    else{
      echo'<script type="text/javascript"> alert("Data not saved ") </script>';
      echo"ERROR: ". $sql ."". $conn->error;
    }
    $conn->close();
  #}
?>
