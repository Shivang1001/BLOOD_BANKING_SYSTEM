<?php
include("connection.php");
require_once 'user_dashboard/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';


$payload = $_POST;
$payload['exp'] = time() + 120;
$emailid = $_POST['emailid'];

$sql = "SELECT COUNT(*) FROM user_signup WHERE emailid = '$emailid'";
$res = mysqli_query($con, $sql);

if(mysqli_fetch_assoc($res)['COUNT(*)'] == 0) {
    echo json_encode(['message' => 'Email-ID not exists']);
}

//if(isset($_POST["submit"])) {


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

    //sender information
    $mail->setFrom('goelshivang123@gmail.com', 'SHIVANG GOEL');

    //receiver email address and name
    $mail->addAddress($_POST['emailid'], 'CHECK');

    // Add cc or bcc
    // $mail->addCC('email@mail.com');
    // $mail->addBCC('user@mail.com');


    $mail->isHTML(true);

    $mail->Subject = 'Blood Request Accepted';
    $mail->Body = "http://localhost/shivang/userdb/forgotReset.php?token=$jwt";

    // Send mail
    if (!$mail->send()) {
        echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
    } else {
        echo json_encode(['message' => 'Reset link has been send']);
    }


//}