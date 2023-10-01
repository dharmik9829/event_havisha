<?php

$name = $_POST['name'];
$userEmail = $_POST['user_email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->Username = 'dharmikg86@gmail.com';
$mail->Password = 'wsmnfroivysvlltc';
$mail->setFrom('dharmikg86@gmail.com', 'Dharmik Gohil');
$mail->addReplyTo('dharmikg86@gmail.com', 'Dharmik');
$mail->addAddress('havishaentertainment@gmail.com', 'Havisha Events');
$mail->Subject = 'New Enquiry for Havisha Event';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body =  "<h2>Username-> $name | User email-> $userEmail |  Subject -> $subject | Message -> $message</h2> ";
if (!$mail->send()) {
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Thank you for contacting to Havisha Events We will get back to you in 24 hours';
}
