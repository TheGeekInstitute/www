<?php
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendmail($to,$subject,$message){
$mail = new PHPMailer(true);

try {
   
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'shuklashivank122@gmail.com';                     
    $mail->Password   = 'ixpqqzelxlyvfkqt';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                   

    //Recipients
    $mail->setFrom('shuklashivank122@gmail.com', 'School Management');
    $mail->addAddress($to);                
  

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
}
}
?>