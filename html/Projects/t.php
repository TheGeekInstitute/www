<?php
// define('FILE_INCLUDE',true);
  
// require "config/_functions.php";

// email_otp("ownonlineshop.com@gmail.com","OTP Verification",email_messege("verify","Neeraj",123456));
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
// require "config/_extras.php";

session_start();
session_regenerate_id();
session_regenerate_id();

if(isset($_SESSION['auto_login'])){
    echo $_SESSION['auto_login'];
}


echo "<pre>";
var_dump($_SESSION);


echo decrypt($_COOKIE['user_auth'],"user_auth");
?>