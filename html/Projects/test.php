<?php
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
session_start();
session_regenerate_id();
// session_destroy();
echo "<pre>";
// var_dump(mobile_otp(66365,8882618533,$type="Verify",$route="otp"))

// $verify_token=encrypt();
echo bin2hex(encrypt("manikumar@geekinstitute.org","user_verification"));
setcookie("verify_token",encrypt("manikumar@geekinstitute.org","user_verification"),time()+86400,"/");

$_SESSION['change_count']=0;
$_SESSION['change_time']=time();
$_SESSION['fullname']="ABCD";

$_SESSION['mobile_resend_count']=0;
$_SESSION['email_resend_count']=0;

$_SESSION['login_count']=1;
$_SESSION['login_time']=time();

echo $_SESSION['fullname'];
$_SESSION['mobile_resend_time']=time();

echo "<br><br>";

echo  $_SESSION['mobile_resend_count'];

$_SESSION['otp_login_count']=1;
                $_SESSION['otp_login_time']=time();

// function is_hex($hex_code) {
//     return @preg_match("/^[a-f0-9]{2,}$/i", $hex_code) && !(strlen($hex_code) & 1);
// }


// print_r($_SESSION);

echo "<br>";

// echo time();


var_dump(is_hex("41366f4745794d635031702f73376f477464326966746f4d494133376841474b54486737572b7731614d313455507643394d4161734a2f2b5a33526e3344383868515450386636584b775650626c65784c5835546d477164737135742f54765144314a716836314851335"))


// if (isset($_SERVER['HTTP_COOKIE'])) {
//     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//     foreach($cookies as $cookie) {
//         $parts = explode('=', $cookie);
//         $name = trim($parts[0]);
//         setcookie($name, '', time()-1000);
//         setcookie($name, '', time()-1000, '/');
//     }
// }


    // $verify_token = $_COOKIE['verify_token'];
    // echo bin2hex($verify_token);
    // header("location:otp_verification.php?vcode=".$verify_token);
    

?>


<br><br><br>

<?php
// echo  time()-1800;

// var_dump(email_otp("manikumar@geekinstitute.org","OTP Verification",email_messege("verify","MM","44444")));


?>