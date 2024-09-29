<?php
define("FILE_INCLUDE",true);
include("../includes/_db.php");
include("../includes/_filter.php");
include("../includes/_functions.php");
include("../includes/mail/mail.php");

session_start();
session_regenerate_id();
$resend=false;
$verify=false;
$error=false;
$color=$msg=$alt_msg="";
if(!isset($_SESSION['submit_count'])){
    $_SESSION['submit_count']=1;
}

if(isset($_SESSION['auth']) && $_SESSION['auth']==true && isset($_SESSION['user_id'])){
    header("location:main.php");
}


// $_SESSION['submit_count']=0;


// echo $_SESSION['submit_count'];

if(isset($_SESSION['user_id']) && isset($_SESSION['otp_verification'])){
    $user_id=$_SESSION['user_id'];

    $otp_select_sql="SELECT `otp`, `valid_from`, `resend_time`, `resend_count` FROM `user_otp` WHERE `user_id`=?";
    $user_select_sql="SELECT `fullname`, `email`, `is_verified` FROM `user_signup` WHERE `user_id`=?";

    $otp_select_stmt=$connection->prepare($otp_select_sql);
    $user_select_stmt=$connection->prepare($user_select_sql);

    $otp_select_stmt->bind_param("s",$user_id);
    $user_select_stmt->bind_param("s",$user_id);

    $otp_select_stmt->bind_result($db_otp,$db_valid_form,$db_resend_time,$db_resend_count);
    $user_select_stmt->bind_result($db_fullname,$db_email,$db_is_verified);

    $otp_select_stmt->execute();
    $otp_select_stmt->store_result();
    $otp_rows=$otp_select_stmt->num_rows;
    $otp_select_stmt->fetch();
    $otp_select_stmt->close();


    $user_select_stmt->execute();
    $user_select_stmt->store_result();
    $user_rows=$user_select_stmt->num_rows;
    
    $user_select_stmt->fetch();
    $user_select_stmt->close();

    if($otp_rows==1 && $user_rows==1){
        $verify=true;
    }
    else{
        session_destroy();
        header("location:signup.php");
    }

}
else{
    session_destroy();
    header("location:signup.php");
}




//form handling
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['otp']) && !empty($_POST['otp']) && ctype_digit($_POST['otp']) && strlen($_POST['otp'])==6){
       $otp=mysqli_real_escape_string($connection,input_filter($_POST['otp']));
       $_SESSION['submit_count']+=1;
       if($_SESSION['submit_count']<=3){
        if($otp==$db_otp){
            if(time()-$db_valid_form<=1800){
                if($db_is_verified==0){
                    $is_verified=1;
                    $update_sql="UPDATE `user_signup` SET `is_verified`=? WHERE `user_id`=?";
                    $update_stmt=$connection->prepare($update_sql);
                    $update_stmt->bind_param("is",$is_verified,$user_id);
                    $update_stmt->execute();
                    $update_stmt->store_result();
                    if($update_stmt->affected_rows==1){
                       $delete_sql="DELETE FROM `user_otp` WHERE `user_id`=?";
                        $delete_stmt=$connection->prepare($delete_sql);
                        $delete_stmt->bind_param("s",$user_id);
                        $delete_stmt->execute();
                        $delete_stmt->close();
                        $_SESSION['auto_login']=true;
                        $_SESSION['user_id']=$user_id;
                        header("location:login.php");
                        //redirect to main page;
                    }
                    else{
                        $error=true;
                        $color="green";
                        $msg="Server Busy ";
                        $alt_msg="try after Some Time";
                        $resend=true;
                    }


                }
                else{
                    $error=true;
                    $color="green";
                    $msg="Account ";
                    $alt_msg="Already Verified";
                    $resend=true;
                }


            }
            else{
                $error=true;
                $color="red";
                $msg="OTP";
                $alt_msg="Expired";
                $resend=true;
            }

        }
        else{
            $error=true;
            $color="red";
            $msg="Invalid";
            $alt_msg="OTP";
        }
        
        }
        else{
            $resend=true;
            $error=true;
            $color="red";
            $msg="Invalid";
            $alt_msg="OTP";
        }

    }
    else{
        $error=true;
        $color="red";
        $msg="Invalid";
        $alt_msg="OTP";
    }


    if(isset($_POST['resend'])){
        $error=false;
        $new_otp=mt_rand(111111,999999);
        $resend_count = $db_resend_count+1;
        $resend_time = time();
        $valid_form = time();
        // echo $resend_count;
        if($db_resend_count<=3){
            $sql="UPDATE `user_otp` SET `otp`=?,`valid_from`=?,`resend_time`=?,`resend_count`=? WHERE `user_id`=?";
            $resend_update_stmt=$connection->prepare($sql);
            $resend_update_stmt->bind_param("issis",$new_otp,$valid_form,$resend_time,$resend_count,$user_id);
            $resend_update_stmt->execute();
            $resend_update_stmt->store_result();
            if($resend_update_stmt->affected_rows==1 && sendmail($db_email,"OTP Verification",email_msg($db_email,$new_otp,$db_fullname,"verify"))){
                $error=true;
                $color="green";
                $msg="new otp";
                $alt_msg="has Been Sended";
                $_SESSION['submit_count']=0;

            }  
            else{
                $error=true;
                $color="red";
                $msg="Server busy";
                $alt_msg="can not send otp at this Time";
            }
            $resend_update_stmt->close();
        }
        else{
            //time ka kaam hai
            if(time()-$db_resend_time>=1800){
                $resend_count=0;
                $sql="UPDATE `user_otp` SET `otp`=?,`valid_from`=?,`resend_time`=?,`resend_count`=? WHERE `user_id`=?";
                $resend_update_stmt1=$connection->prepare($sql);
                $resend_update_stmt1->bind_param("issis",$new_otp,$valid_form,$resend_time,$resend_count,$user_id);
                $resend_update_stmt1->execute();
                $resend_update_stmt1->store_result();
                if($resend_update_stmt1->affected_rows==1 && sendmail($db_email,"OTP Verification",email_msg($db_email,$new_otp,$db_fullname,"verify"))){
                    $error=true;
                    $color="green";
                    $msg="new otp";
                    $alt_msg="has Been Sended";
                    $_SESSION['submit_count']=0;

                }
                else{
                    $error=true;
                    $color="red";
                    $msg="Server busy";
                    $alt_msg="can not send otp at this Time";
                }
                $resend_update_stmt1->close();
            }
            else{
                $error=true;
                $color="red";
                $msg="max limit Reached";
                $alt_msg="try after 30 Minutes";
            }
        }



    }

}



//resend btn





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account  | verification</title>
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
                <h2>Let's Verify Your Account <i class="fa-solid fa-arrow-right-long"></i> </h2>
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


                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
               
                    <section>
                        <p><b>Enter OTP</b></p>
                        <input type="number" name="otp">
                    </section>
                    <div class="submit-section">
                        <button type="submit" name="verify">Verify</button>
    <?php if($resend){echo ' 
                        <button type="submit" name="resend">Resend</button>
        
        ' ; } ?>
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