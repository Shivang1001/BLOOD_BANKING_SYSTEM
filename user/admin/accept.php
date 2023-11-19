<?php
  require_once('../connection.php');
  $r = "SELECT id ,Emailid FROM becomedonor WHERE status = 0 AND bloodgroup = '".$_POST['blood']."' LIMIT 1";
  $rq = mysqli_query($con , $r);
  $result = mysqli_fetch_assoc($rq);
  echo $result['id'];
  $sql = "UPDATE becomedonor SET status = 1 WHERE id = ".$result['id'];
  mysqli_query($con, $sql);

  $sql = "UPDATE requestblood SET status = 1 WHERE id = ".$_POST['value'];
  mysqli_query($con, $sql);

  $reqblood = "SELECT ContactName FROM requestblood WHERE id = ".$_POST['value'];
  $requestedblood = mysqli_query($con, $reqblood);


require_once 'vendor/autoload.php';


//Import PHPMailer classes into the global namespace
require "fpdf186/fpdf.php";

$pdf = new FPDF();
$pdf->addPage('P', 'A4', 0);
$pdf->SetTextColor(255, 0, 0);

$pdf->SetFont('Arial', 'B', 40);


$pdf->text(10, 30, "Arogini Blood");

$pdf->line(10, 35, 400, 35);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 20);
$pdf->text(10, 50, "Blood Requestor Details");


$pdf->SetFont('Arial', '', 10);

$datasql = "SELECT * FROM requestblood WHERE emailid = '".$_POST['emailid']."'";
$res = mysqli_query($con, $datasql);
$row = mysqli_fetch_assoc($res);

$pdf->text(10, 60, "Patient Name : ".$row['PatientName']);
$pdf->text(10, 68, "Contact Name : ".$row['ContactName']);
$pdf->text(10, 76, "Phone Number : ".$row['PhoneNumber']);
$pdf->text(10, 84, "Email-ID : ".$row['Emailid']);
$pdf->text(10, 92, "Blood Group : ".$row['BloodGroup']);
$pdf->text(10, 100, "City : ".$row['City']);
$pdf->text(10, 108, "Doctor Name : ".$row['DoctorName']);
$pdf->text(10, 116, "Gender : ".$row['Gender']);
$pdf->text(10, 124, "Hospital Details : ".$row['HospitalDetails']);
$pdf->text(10, 132, "Required Date : ".$row['RequriedDate']);


$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 20);
$pdf->text(10, 150, "Donor Details");


$pdf->SetFont('Arial', '', 10);


$datadsql = "SELECT * FROM becomedonor WHERE id = '".$result['id']."'";
$resd = mysqli_query($con, $datadsql);
$rowd = mysqli_fetch_assoc($resd);


$pdf->text(10, 160, "Donor Name : ".$rowd['DonorName']);
$pdf->text(10, 168, "Date of Birth : ".$rowd['Dateofbirth']);
$pdf->text(10, 176, "Blood Group : ".$rowd['BloodGroup']);
$pdf->text(10, 184, "Address : ".$rowd['Address']);
$pdf->text(10, 192, "Contact Number : ".$rowd['ContactNumber']);
$pdf->text(10, 200, "City : ".$rowd['City']);
$pdf->text(10, 224, "State : ".$rowd['State']);
$pdf->text(10, 208, "Email-ID : ".$rowd['Emailid']);
$pdf->text(10, 216, "Gender : ".$rowd['Gender']);


$pdf->output('F', 'Details_'.$_POST['value'].'.pdf');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require_once 'vendor/autoload.php';

  $mail = new PHPMailer(true);


  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
  $mail->SMTPAuth = true;
  //to view proper logging details for success and error messages
  // $mail->SMTPDebug = 1;
  $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
  $mail->Username = 'goelshivang123@gmail.com';   //email
  $mail->Password = "xkrdutdiytpxcqec";   //16 character obtained from app password created
  $mail->Port = 465;                    //SMTP port
  $mail->SMTPSecure = "ssl";
  $mail->addAttachment('Details_'.$_POST['value'].'.pdf');

  $mail->addEmbeddedImage('images/image-1.png', 'logo_p1t');
  $mail->addEmbeddedImage('images/image-2.png', 'logo_p2t');
  $mail->addEmbeddedImage('images/image-3.png', 'logo_p3t');
  $mail->addEmbeddedImage('images/image-4.png', 'logo_p4t');
  $mail->addEmbeddedImage('images/image-5.png', 'logo_p5t');
  $mail->addEmbeddedImage('images/image-6.png', 'logo_p6t');
  $mail->addEmbeddedImage('images/image-7.png', 'logo_p7t');
  $mail->addEmbeddedImage('images/image-8.png', 'logo_p8t');
  $mail->addEmbeddedImage('images/image-9.png', 'logo_p9t');
  $mail->addEmbeddedImage('images/image-10.png', 'logo_p10t');
  //sender information
  $mail->setFrom('goelshivang123@gmail.com', 'SHIVANG GOEL');

  //receiver email address and name
  $mail->addAddress($_POST['emailid'], mysqli_fetch_assoc($requestedblood)['ContactName']);

  // Add cc or bcc
  // $mail->addCC('email@mail.com');
  // $mail->addBCC('user@mail.com');


  $mail->isHTML(true);

  $mail->Subject = 'Blood Request Accepted';
  $mail->Body    = file_get_contents('mailtemp.html');

  // Send mail
  if (!$mail->send()) {
      echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
  } else {
      echo 'Message has been sent.';
  }
$mail->smtpClose();

  /***************************/
$mailn = new PHPMailer(true);

$mailn->isSMTP();
$mailn->Host = 'smtp.gmail.com';  //gmail SMTP server
$mailn->SMTPAuth = true;
//to view proper logging details for success and error messages
// $mailn->SMTPDebug = 1;
$mailn->Host = 'smtp.gmail.com';  //gmail SMTP server
$mailn->Username = 'goelshivang123@gmail.com';   //email
$mailn->Password = "xkrdutdiytpxcqec";   //16 character obtained from app password created
$mailn->Port = 465;                    //SMTP port
$mailn->SMTPSecure = "ssl";
$mailn->addAttachment('Details_'.$_POST['value'].'.pdf');

$mailn->addEmbeddedImage('donormailimages/image-1.png', 'donor_q1t');
$mailn->addEmbeddedImage('donormailimages/image-2.png', 'donor_q2t');
$mailn->addEmbeddedImage('donormailimages/image-3.png', 'donor_q3t');
$mailn->addEmbeddedImage('donormailimages/image-4.png', 'donor_q4t');
$mailn->addEmbeddedImage('donormailimages/image-5.png', 'donor_q5t');
$mailn->addEmbeddedImage('donormailimages/image-6.png', 'donor_q6t');
$mailn->addEmbeddedImage('donormailimages/image-7.png', 'donor_q7t');
$mailn->addEmbeddedImage('donormailimages/image-8.png', 'donor_q8t');

    //sender information
    $mailn->setFrom('goelshivang123@gmail.com', 'SHIVANG GOEL');

    //receiver email address and name
    $mailn->addAddress($result['Emailid'], 'GOEL');



    $mailn->isHTML(true);

    $mailn->Subject = 'Donor Request Accepted';
    $mailn->Body    = file_get_contents('donormailtemp.html');

    // Send mailn
    if (!$mailn->send()) {
        echo 'Emailn not sent an error was encountered: ' . $mailn->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }

  $mailn->smtpClose();

?>
