<?php
require "../web/includes/_functions.php";


$otp = mt_rand(111111,999999);
$mobile="8882618533";
if(mobile_sms($otp,$mobile)){
    echo "SMS has been Sended";
}
else{
    echo 'Server Busy';
}

?>