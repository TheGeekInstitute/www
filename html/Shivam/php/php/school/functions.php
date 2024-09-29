<?php
require 'ABCD/PHPMailer/Exception.php';
require 'ABCD/PHPMailer/PHPMailer.php';
require 'ABCD/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function email($to,$subject,$message){
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


function sendmail($to,$subject,$otp,$type){
    if($type=="verify"){
        $message='
 <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Your Brand</a>
    </div>
    <p style="font-size:1.1em">Hi, There</p>
    <p>Thank you for choosing Your Brand. Use the following OTP to complete your Sign Up procedures. OTP is valid for 5 minutes</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otp.'</h2>
    <p style="font-size:0.9em;">Regards,<br />Your Brand</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>Your Brand Inc</p>
      <p>1600 Amphitheatre Parkway</p>
      <p>California</p>
    </div>
  </div>
</div>';
                if(email($to,$subject,$message)){
                      return true;  
                }
                else{
                    return false;
                }


    }
    else if($type=="reset"){

    }else{
        return false;
    }

}




?>