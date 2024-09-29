<?php
define("FILE_INCLUDE",true);
include("../includes/_db.php");
include("../includes/_filter.php");
include("../includes/_functions.php");
include("../includes/mail/mail.php");

$error=$otp_verify=$reset_pass=false;
$color=$msg=$alt_msg="";
session_start();
session_regenerate_id();
// $reset_pass=true;
// $otp_verify=true;
if(!isset($_SESSION['reset_password'])){
    $_SESSION['reset_password']=false;
}

if(!isset($_SESSION['otp_verify'])){
    $_SESSION['otp_verify']=false;

}

if(!isset($_SESSION['otp_count'])){
    $_SESSION['otp_count']=1;
}




if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['default'])){
        if(isset($_POST['username']) && !empty($_POST['username'])){
            if(strlen($_POST['username'])==10 && ctype_digit($_POST['username']) || filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
                $username=mysqli_real_escape_string($connection,input_filter($_POST['username']));
    
                $check_sql="SELECT `user_id`,`fullname`,`email`, `password`, `is_verified` FROM `user_signup` WHERE `email`=? OR `mobile`=?";
    
                $check_stmt=$connection->prepare($check_sql);
                $check_stmt->bind_param("ss",$username,$username);
                $check_stmt->bind_result($db_user_id,$db_fullname,$db_email,$db_password,$db_is_verified);
                $check_stmt->execute();
                $check_stmt->store_result();
                if($check_stmt->num_rows==1){
                    $check_stmt->fetch();
                    $_SESSION['user_id']=$db_user_id;
                    $sql="SELECT `otp_id` FROM `user_otp` WHERE `user_id`=?";
                    $stmt=$connection->prepare($sql);
                    $stmt->bind_param("s",$db_user_id);
                    $stmt->execute();
                    $stmt->store_result();
                    if($stmt->num_rows>0){
                        $sql="DELETE FROM `user_otp` WHERE `user_id`='$db_user_id'";
                        if($connection->query($sql)){
                            
                            $otp=mt_rand(111111,999999);
                            $valid_form=time();
    
                            $sql="INSERT INTO `user_otp`(`user_id`,`otp`, `valid_from`) VALUES ('$db_user_id','$otp','$valid_form')";
    
                            if($connection->query($sql)){
                                
                                if(sendmail($db_email,"Reset Password",email_msg($db_email,$otp,$db_fullname,"reset"))){
                                    // $otp_verify=true;
                                    $_SESSION['otp_verify']=true;
                                
                                }
                                    else{
                                        $error=true;
                                        $color="red";
                                        $msg="Server Busy";
                                        $alt_msg="Can not Send mail At This Time";
                                    }
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
    
    
    
    
                    }
                    else{
                        $otp=mt_rand(111111,999999);
                        $valid_form=time();
    
                        $sql="INSERT INTO `user_otp`(`user_id`,`otp`, `valid_from`) VALUES ('$db_user_id','$otp','$valid_form')";
    
                        if($connection->query($sql)){
                            
                            if(sendmail($db_email,"Reset Password",email_msg($db_email,$otp,$db_fullname,"reset"))){
                                $otp_verify=true;
                            
                            }
                                else{
                                    $error=true;
                                    $color="red";
                                    $msg="Server Busy";
                                    $alt_msg="Can not Send mail At This Time";
                                }
                        }
                        else{
                            $error=true;
                            $color="red";
                            $msg="Server Busy";
                            $alt_msg="Try After Some Time";
                        }
                    }
            $stmt->close();
    
                }
                else{
                    $error=true;
                    $color="red";
                    $msg="User";
                    $alt_msg="Not Found";
                }
    
                $check_stmt->close();
    
    
            }
            else{
                $error=true;
                $color="red";
                $msg="Invalid";
                $alt_msg="Email or Phone";
            }
    
        }
        else{
            $error=true;
            $color="red";
            $msg="Phone/Email";
            $alt_msg="Should Not be Empty";
        }
    }
    else if(isset($_POST['otp_submit'])){

        if(isset($_POST['otp']) && !empty($_POST['otp'])){
            if(strlen($_POST['otp'])==6 && ctype_digit($_POST['otp'])){
                $otp=mysqli_real_escape_string($connection,input_filter($_POST['otp']));
                $user_id=$_SESSION['user_id'];
                $sql="SELECT `otp`, `valid_from` FROM `user_otp` WHERE `user_id`=?";
                $stmt=$connection->prepare($sql);
                $stmt->bind_param("s",$user_id);
                $stmt->bind_result($db_otp,$db_valid_from);
                $stmt->execute();
                $stmt->store_result();
                if($stmt->num_rows==1){
                    $stmt->fetch();
                    if($_SESSION['otp_count']<=3){
                        if($db_otp==$otp){
    
    
                            $_SESSION['reset_password']=true;
                            $_SESSION['otp_verify']=false;
                            header("location:".$_SERVER['PHP_SELF']);
                            
                        }
                        else{
                            $error=true;
                            $color="red";
                            $msg="Invalid";
                            $alt_msg="OTP";
                            $_SESSION['otp_count']+=1;
                        }
                    }
                    else{
                        $error=true;
                        $color="red";
                        $msg="Invalid";
                        $alt_msg="OTP";
                        $_SESSION['otp_verify']=false;
                        $_SESSION['otp_count']=0;
                        header("location:".$_SERVER['PHP_SELF']);
                        die();
                    }
                    
                }
                else{
                    session_destroy();
                    header("location:".$_SERVER['PHP_SELF']);
                    die();
                }
                $stmt->close();
               
            }
            else{
                $error=true;
                $color="red";
                $msg="Invalid";
                $alt_msg="OTP";
            }

        }else{
            $error=true;
            $color="red";
            $msg="OTP";
            $alt_msg="Should Not be Empty";
        }

   

    }
    else if(isset($_POST['resetpass'])){
        if(isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['cnfpass']) && !empty($_POST['cnfpass'])){
            if(strlen($_POST['pass'])>=6 && strlen($_POST['pass'])<=16 && strlen($_POST['cnfpass'])>=6 && strlen($_POST['cnfpass'])<=16){
                if($_POST['pass']==$_POST['cnfpass']){
                    $password=password_hash($_POST['pass'],PASSWORD_BCRYPT);
                    $sql="UPDATE `user_signup` SET `password`=?,`is_verified`=? WHERE `user_id`=?";
                    $user_id=$_SESSION['user_id'];
                    $is_verified=1;
                    $update_stmt=$connection->prepare($sql);
                    $update_stmt->bind_param("sis",$password,$is_verified,$user_id);
                    $update_stmt->execute();
                    $update_stmt->store_result();
                    if($update_stmt->affected_rows==1){
                        session_destroy();
                        echo '
                        <script>
                            alert("Password Updated");
                            window.location.href="login.php";
                        </script>
                        ';
                    }
                    else{
                        session_destroy();
                        echo '
                        <script>
                            alert("Server Busy Try After Some Time");
                            window.location.href='.$_SERVER['PHP_SELF'].';
                        </script>
                        ';
                    }

                    $update_stmt->close();

                }
                else{
                    $error=true;
                    $color="red";
                    $msg="Password";
                    $alt_msg="Not Matched";
                }

            }
            else{
                $error=true;
                $color="red";
                $msg="Password";
                $alt_msg="should be min 6 and max 16 chars";
            }

        }
        else{
            $error=true;
            $color="red";
            $msg="Password";
            $alt_msg="Not Matched";
        }
        
        
    }
    else{
        $error=true;
        $color="red";
        $msg="Invalid";
        $alt_msg="Request";
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
                <!-- <h2>OwnOnlineShop</h2> -->
                <img src="../Images/Brands/Logo.png" style="width:250px; margin-bottom: 1.5em;" alt="logo image">
                <h2>Reset Password <i class="fa-solid fa-arrow-right-long"></i> </h2>
                <?php
            if($error){
                echo<<<data
                <div class="alert" style="background-color:$color;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>$msg !</strong> $alt_msg.
                </div>
                data;
            }
            
            echo '
            <form action="" method="POST">
            
            ';
            
            if($_SESSION['otp_verify']==true){
                echo<<<otp
                <section class="name-section">
                <p><b>Enter OTP</b></p>
                <input type="text" name="otp">
                </section>
                <div class="submit-section">
                <button type="submit" name="otp_submit">Submit</button>
                otp;
            }else if($_SESSION['reset_password']==true){
                echo<<<reset
                    <section class="name-section">
                        <p><b>Enter password</b></p>
                        <input type="text" name="pass">
                    </section>
                    
                    
                    <section class="name-section">
                        <p><b>Confirm password</b></p>
                        <input type="text" name="cnfpass">
                    </section>
                    <div class="submit-section">
                    <button type="submit" name="resetpass">Submit</button>

                reset;
            }else{
                echo<<<def
                    <section class="name-section">
                        <p><b>Phone/Email</b></p>
                        <input type="text" name="username">
                    </section>
                    <div class="submit-section">
                    <button type="submit" name="default">Reset</button>
                def;
            }

            
            
            ?>











                        <p><b></b> <a href="./login.php"><b>Login</b></a></p>
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