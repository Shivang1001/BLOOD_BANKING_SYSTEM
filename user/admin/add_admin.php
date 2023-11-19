<?php
include("../connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';

require_once 'vendor/autoload.php';

$_POST['img'] = 'img/profile_'.$_POST['username'].'_'.$_FILES['files']['name'];
$payload = $_POST;

//print_r($_FILES);


if(isset($_POST["submit"])) {
    echo $_FILES['files']['name'];
    move_uploaded_file($_FILES['files']['tmp_name'], 'img/profile_'.$_POST['username'].'_'.$_FILES['files']['name']);

    $jwt = JWT::encode($payload, $key, 'HS256');


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

    // $mail->addEmbeddedImage('images/image-1.png', 'logo_p1t');
    // $mail->addEmbeddedImage('images/image-2.png', 'logo_p2t');
    // $mail->addEmbeddedImage('images/image-3.png', 'logo_p3t');
    // $mail->addEmbeddedImage('images/image-4.png', 'logo_p4t');
    // $mail->addEmbeddedImage('images/image-5.png', 'logo_p5t');
    // $mail->addEmbeddedImage('images/image-6.png', 'logo_p6t');
    // $mail->addEmbeddedImage('images/image-7.png', 'logo_p7t');
    // $mail->addEmbeddedImage('images/image-8.png', 'logo_p8t');
    // $mail->addEmbeddedImage('images/image-9.png', 'logo_p9t');
    // $mail->addEmbeddedImage('images/image-10.png', 'logo_p10t');
    //sender information
    $mail->setFrom('goelshivang123@gmail.com', 'SHIVANG GOEL');

    //receiver email address and name
    $mail->addAddress($_POST['emailid'], 'CHECK');

    // Add cc or bcc
    // $mail->addCC('email@mail.com');
    // $mail->addBCC('user@mail.com');


    $mail->isHTML(true);

    $mail->Subject = 'Blood Request Accepted';
    $mail->Body = "http://localhost/shivang/user/admin/addAdminCheck.php?token=$jwt";

    // Send mail
    if (!$mail->send()) {
        echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }


}