<?php
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
session_start();
session_regenerate_id();
//Testing
$verify_token=strtolower(bin2hex(random_bytes(18)));
setcookie("verify_token",encrypt($verify_token,"user_verification"),time()+86400,"/");

$_SESSION['verify']=true;
// $_SESSION['verify_token']=true;
//testing

if(!isset($_SESSION['verify']) && !isset($_COOKIE['verify_token'])){
    // header("Location:signup.php");
}
if(!isset($_COOKIE['verify_token'])){
    // header("Location:signup.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification - OwnShop</title>
    <link rel="stylesheet" href="./login_style.css">
</head>
<body>
    <?php

if(isset($_GET['change_detials'])){
    echo<<<print_change
            <div class="wrapper">
                <form method="POST" action="/Projects/signup.php">
                    <h1>Change Information</h1>
            
                    <p>Hi, Mani Kumar</p>
                
            
                    <label class="field">Enter Mobile Number <span>*</span></label>
                    <input type="text" placeholder="789654321" name="mobile"
                    value=""
                    >
                    
                    
                    <label class="field">Enter Email <span>*</span></label>
                    <input type="text" name="email"  placeholder="email@email.com"
                    >
                    
                    <label class="field"><input type="checkbox" name="tc">I accept <a href="terms_condtions.php">T&C Privacy Policy</label>
                    
                    <input type="submit" value="Change">
                            
                </form>
            </div>
    print_change;
}
else{

    echo<<<print_default

                <div class="wrapper">
                    <form method="POST" action="/Projects/signup.php">
                        <h1>Account Verification</h1>
                        <p>Not Your Mobile Number or Email <a href="?change_detials=1">Change Details</a></p>
                        <p>Hi, Mani Kumar</p>
                    

                        <label class="field">Enter Mobile OTP <span>*</span></label>
                        <input type="text" placeholder="012345" name="mobile_otp"
                        value=""
                        >
                        
                        
                        <label class="field">Enter Email OTP <span>*</span></label>
                        <input type="text" name="email_otp"  placeholder="012345"
                        >
                        
                        <label class="field"><input type="checkbox" name="tc"> I accept Terms & Conditions</label>


                        <input type="submit" value="Verify">
                        <button>Resend OTP</button>            
                    </form>
                </div>
        print_default;
}

    ?>




</body>
</html>



