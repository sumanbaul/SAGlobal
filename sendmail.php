<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output  //SMTP::DEBUG_SERVER
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'suman.baul90@gmail.com';                     //SMTP username
    $mail->Password   = 'Sana2618@#';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption //PHPMailer::ENCRYPTION_SMTPS
    $mail->Port       = 587;                                 //465   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    if(isset($_POST['submit'])){
        $to = "contact@saglobal.rw"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $phone = $_POST['phone'];
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $message = $_POST['message'];
        $subject = "SA Global Query";

        //Recipients
        $mail->setFrom($from, $first_name.' '.$last_name);
        $mail->addAddress('musique.suman@gmail.com', $first_name.' '.$last_name);     //Add a recipient
        $mail->addAddress($to, 'SA Global'); //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('musique.suman@gmail.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = '<b>SA Global Query</b><br/>Name: ' . $first_name . ' ' .$last_name . '<br>Phone: ' . $phone . '<br>Query: '. $message;
        $mail->AltBody = $first_name . ' ' . $last_name . 'Mobile: ' .$phone. 'Message: ' .$message;

        $mail->send();
        //echo 'Message has been sent';
		
		session_start();
		
		$_SESSION['status'] = 1;
		
		
		header('Location: index.php');
		exit;
    }

    
} catch (Exception $e) {
	session_start();
		
	$_SESSION['status'] = 0;
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//https://accounts.google.com/b/3/DisplayUnlockCaptcha
?>

