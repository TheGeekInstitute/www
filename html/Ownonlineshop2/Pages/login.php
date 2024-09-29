<?php
define("FILE_INCLUDE",true);
include("../includes/_db.php");
include("../includes/_filter.php");
include("../includes/_functions.php");

include("../includes/mail/mail.php");

session_start();
session_regenerate_id();

if(isset($_SESSION['auth']) && $_SESSION['auth']==true && isset($_SESSION['user_id'])){
    header("location:main.php");
    exit();
}


if(isset($_SESSION['user_id']) && isset($_SESSION['auto_login'])){
    header("location:main.php");
    die();
}


$error=false;
$color=$msg=$alt_msg="";



if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){

        if(strlen($_POST['username'])==10  || filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
            $username=mysqli_real_escape_string($connection,input_filter($_POST['username']));
            $_SESSION['username']=$username;
           

                if(isset($_POST['password']) && !empty($_POST['password']) && strlen($_POST['password'])>=6 && strlen($_POST['password'])<=12){
                    $password=$_POST['password'];

                    $check_sql="SELECT `user_id`, `fullname`, `email`, `mobile`, `password`, `is_verified` FROM `user_signup` WHERE `email`=? OR `mobile`=?";
                    $check_stmt = $connection->prepare($check_sql); 
                    $check_stmt->bind_param("ss",$username,$username);
                    $check_stmt->bind_result($db_user_id,$db_fullname,$db_email,$db_mobile,$db_password,$db_is_verified);
                    $check_stmt->execute();
                    $check_stmt->store_result();
                    if($check_stmt->num_rows==1){
                        $check_stmt->fetch();
                        if(password_verify($password,$db_password)){
                            if($db_is_verified==1){
                                $_SESSION['user_id']=$user_id;
                                $_SESSION['auth']=true;
                                header("location:main.php");
                               
                            }
                            else{
                                $otp=mt_rand(111111,999999);
                                $valid_from=time();
                                
                                $update_sql="UPDATE `user_otp` SET `otp`=?,`valid_from`=? WHERE `user_id`=?";
                                $update_stmt=$connection->prepare($update_sql);
                                $update_stmt->bind_param("iss",$otp,$valid_from,$db_user_id);
                                $update_stmt->execute();
                                $update_stmt->store_result();
                                if($update_stmt->affected_rows==1){
                                    if(sendmail($db_email,"OTP Verification",email_msg($db_email,$otp,$db_fullname,"verify"))){
                                        $_SESSION['user_id']=$db_user_id;
                                        $_SESSION['otp_verification']=true;
                                        header("location:otp_verification.php");
                                        die();
                                    }
                                    else{
                                        $error=true;
                                        $color="red";
                                        $msg="Server Busy";
                                        $alt_msg="Try After Some Time";
                                    }

                                }
                                else{
                                    $error=true;
                                    $color="red";
                                    $msg="Server Busy";
                                    $alt_msg="Try After Some Time";
                                }

                                // header("location:otp_verification.php");
                            }


                        }
                        else{
                            $error=true;
                            $color="red";
                            $msg="Incorrect";
                            $alt_msg="Email/Mobile Or Password";
                        }


                    }
                    else{
                        $error=true;
                        $color="red";
                        $msg="Incorrect";
                        $alt_msg="Email/Mobile Or Password";
                    }
                    $check_stmt->close();




                   

        
                 }
                 else{
                    $error=true;
                    $color="red";
                    $msg="Password";
                    $alt_msg="field is emtpty";
                 }

            
        }
    }

else{
    $error=true;
    $color="red";
    $msg="USername";
    $alt_msg="feild is empty";


}

}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Logo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <style>
        .alert {
  padding: 20px;
 
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    </style>



</head>

<body>
    <div class="login-container">
        <div class="login-hero">
            <div class="login-image">
                <img src="../Images/Assets/login.svg" alt="login Image">
            </div>
            <div class="login-details">

            <?php

            if($error){
                echo<<<data
                <div class="alert" style="background-color:$color;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>$msg !</strong> $alt_msg.
                </div>
                data;
            }
            ?>
                <!-- <h2>OwnOnlineShop</h2> -->
                <img src="../Images/Brands/Logo.png" style="width:250px; margin-bottom: 1.5em;" alt="logo image">
                <h2>Let's Login Your Account <i class="fa-solid fa-arrow-right-long"></i> </h2>
                <form action="" method ="POST">
                    <section class="name-section">
                        <p><b>Email/Mobile</b></p>
                        <input type="text" name="username">
                    </section>

                    <section>
                        <p><b>Password</b></p>
                        <input type="password" name="password">
                    </section>
                    <div class="submit-section">
                        <button type="submit">Sign In</button>
                        <p><b>Don't Have Account ?</b> <a href="./signup.html"><b>Create Account Here</b></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Starts -->
    <footer>
        <div class="footer-hero">
            <div class="about-footer">
                <h2>Easter</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus adipisci nostrum voluptatibus
                    porro dignissimos qui doloremque, fugit minima id voluptate?</p>
            </div>
            <div class="service-footer">
                <h2>Services</h2>
                <ul>
                    <li><a href="#">Deals in Devices</a></li>
                    <li><a href="#">Home Decor</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Health</a></li>
                </ul>
            </div>
            <div class="Cateogaries-footer">
                <h2>Cateogaries</h2>
                <ul>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Refurbished Devices</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Accesories</a></li>
                    <li><a href="#">Decoration</a></li>
                    <li><a href="#">Beauty Products</a></li>
                    <li><a href="#">Tickets</a></li>
                </ul>
            </div>
            <div class="contact-footer">
                <ul>
                    <h2>Contact Us</h2>
                    <li><a href="mailto:mrabraham@thegics.in"> <i class="fa-solid fa-envelope"></i> Email US</a></li>
                    <li><a href="tel:8447377952"> <i class="fa-solid fa-phone"></i> Call Us</a></li>
                    <li><a href="#"> <i class="fa-solid fa-house-chimney-crack"></i> Kapashera New Delhi</a></li>
                </ul>
                <div class="contact-social">
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-square"></i></a>
                    <a href="https://wa.me/8447377952"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <p>Copyright &copy; 2022 | Created By <a href="https://www.thegics.in/" target="_blank">Gics</a></p>
        </div>
    </footer>
    <!-- Footer ends -->
</body>

</html>