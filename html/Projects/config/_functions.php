<?php
if(!defined('FILE_INCLUDE')){
    header("location:../index.php");
  }

function is_hex($hex_code) {
    return @preg_match("/^[a-f0-9]{2,}$/i", $hex_code) && !(strlen($hex_code) & 1);
}

function deleteCookie(){
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
        }
    }
}

function time_plus($minutes){
    $time=time();
    $minutes *= 60;
    return $time+$minutes;
}
#Custum Encryption
function encrypt($data="", $key="") {
  $iv = random_bytes(16); // Generate a random IV
  $cipherText = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
  $hmac = hash_hmac('sha256', $cipherText, $key, true);
  return base64_encode($iv . $hmac . $cipherText);
}

function decrypt($encryptedData="", $key="") {
  $data = base64_decode($encryptedData);
  $iv = substr($data, 0, 16);
  $hmac = substr($data, 16, 32);
  $cipherText = substr($data, 48);

  $calculatedHmac = hash_hmac('sha256', $cipherText, $key, true);

  if (!hash_equals($hmac, $calculatedHmac)) {
      throw new Exception('HMAC verification failed');
  }

  return openssl_decrypt($cipherText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
}

#Fast2SMS API
function mobile_otp($otp="",$mobile_number="",$type="",$route=""){          
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=YCT7BSGRQnemyi5ZNkpJ1FgVtsHjuqLU0zDbMOXwEdxarI43h9RyLJs48OcQK0bI69EANzCr1aehZVom&variables_values=".$otp."&route=".$route."&numbers=".$mobile_number."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return false;
    } else {
        return true;
      }


}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function email_otp($email,$subject,$messege){
require('Exception.php');
require("PHPMailer.php");
require("SMTP.php");
$mail = new PHPMailer(true);
try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'ownonlineshop.com@gmail.com';                    
    $mail->Password   = 'uzwirtyalxxtrnfr';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    
    //Recipients
    $mail->setFrom('ownonlineshop.com@gmail.com', 'OwnOnlineShop.com');
    $mail->addAddress($email);    
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $messege;
    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
}
}


// function email_otp($email,$subject,$messege){
//     return true;
// }


##//for server
// function email_otp($email,$subject,$messege){
// $header = "From:no-reply@ownonlineshop.com \r\n";
// $header .= "MIME-Version: 1.0\r\n";
// $header .= "Content-type: text/html\r\n";
// $send = mail ($email,$subject,$message,$header);
// if( $send == true ) {
//    return true;
// }else {
//    return false;
// }
// }


#OTP Message For Email
function email_messege($for="",$name="",$otp=""){
    
    if($for=="verify"){
    $messege='<div class="wrapper" style="max-width: 90%; max-height: 100%; background-color: #F6FAFA; margin: auto;font-family:Calibri,sans-serif;">
    <div class="content" style="text-align: center;">
        <div class="logo" style="font-size: large; font-weight: 900; text-align: center;font-size: 2.5rem;">OwnShop</div>
        <h3 style="font-size: x-large;margin: 1.2rem 0;">Hi, '.$name.' <br> Your <br> Verification Code</h3>
        <p class="otp" style="font-size: xx-large;font-weight: 900;letter-spacing: .5rem;margin: .7rem 0;text-shadow: 0px 0px 01px black;color: black; margin-bottom: 2rem;user-select: all;font-family: system-ui, -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">'.$otp.'</p>
<div class="msg" style="font-size: small;font-weight: 600; margin: .7rem auto;max-width: 100%; width: 90%;">
<p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">Here is your OTP Verification Code.</p>
<p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">It Will expire in 30 Minutes</p>
</div>
    </div>
    <div class="footer">
        <p style="margin: auto; margin:.7rem 0 0 0;font-size: large;font-weight: 900;text-underline-offset: .5rem;text-decoration-thickness: 1px;border-bottom: 1px solid grey;text-align: center;padding: .2rem 0;">Sent by <a href="#" style="text-decoration: none;">OwnShop</a></p>
        <ul class="links" style="padding: .5rem 0;">
            <li><a href="#">Support Center</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>';
}
else if($for=="reset"){
    $messege='<div class="wrapper" style="max-width: 90%; max-height: 100%; background-color: #F6FAFA; margin: auto;font-family:Calibri,sans-serif;">
    <div class="content" style="text-align: center;">
        <div class="logo" style="font-size: large; font-weight: 900; text-align: center;font-size: 2.5rem;">OwnShop</div>
        <h3 style="font-size: x-large;margin: 1.2rem 0;">Hi, '.$name.' <br> Your <br> Reset Code</h3>
        <p class="otp" style="font-size: xx-large;font-weight: 900;letter-spacing: .5rem;margin: .7rem 0;text-shadow: 0px 0px 01px black;color: black; margin-bottom: 2rem;user-select: all;font-family: system-ui, -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">'.$otp.'</p>
<div class="msg" style="font-size: small;font-weight: 600; margin: .7rem auto;max-width: 100%; width: 90%;">
<p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">Here is your OTP for Reset Password.</p>
<p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">It Will expire in 30 Minutes</p>
</div>
    </div>
    <p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">Dear, '.$name.', If You Do not try to Reset in just now, please <a href="#" style="text-decoration: none;">Change Your Password</a> to protect your account</p>
    <div class="footer">
        <p style="margin: auto; margin:.7rem 0 0 0;font-size: large;font-weight: 900;text-underline-offset: .5rem;text-decoration-thickness: 1px;border-bottom: 1px solid grey;text-align: center;padding: .2rem 0;">Sent by <a href="#" style="text-decoration: none;">OwnShop</a></p>
        <ul class="links" style="padding: .5rem 0;">
            <li><a href="#">Support Center</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>';
}

else if($for=="login"){
    $messege='<div class="wrapper" style="max-width: 90%; max-height: 100%; background-color: #F6FAFA; margin: auto;font-family:Calibri,sans-serif;">
    <div class="content" style="text-align: center;">
        <div class="logo" style="font-size: large; font-weight: 900; text-align: center;font-size: 2.5rem;">OwnShop</div>
        <h3 style="font-size: x-large;margin: 1.2rem 0;">Hi, '.$name.' <br> Your <br> Login Code</h3>
        <p class="otp" style="font-size: xx-large;font-weight: 900;letter-spacing: .5rem;margin: .7rem 0;text-shadow: 0px 0px 01px black;color: black; margin-bottom: 2rem;user-select: all;font-family: system-ui, -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">'.$otp.'</p>
<div class="msg" style="font-size: small;font-weight: 600; margin: .7rem auto;max-width: 100%; width: 90%;">
<p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">Here is your OTP for Reset Password.</p>
<p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">It Will expire in 30 Minutes</p>
</div>
    </div>
    <p style="font-size: small;font-weight: 900; text-align:center; max-width: 90%; margin: auto;">Dear, '.$name.', If You Do not try to sign in just now, please <a href="#" style="text-decoration: none;">Change Your Password</a> to protect your account</p>
    <div class="footer">
        <p style="margin: auto; margin:.7rem 0 0 0;font-size: large;font-weight: 900;text-underline-offset: .5rem;text-decoration-thickness: 1px;border-bottom: 1px solid grey;text-align: center;padding: .2rem 0;">Sent by <a href="#" style="text-decoration: none;">OwnShop</a></p>
        <ul class="links" style="padding: .5rem 0;">
            <li><a href="#">Support Center</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </div>';
}
else{
    $messege="error";
}

  return $messege;
  }


?>