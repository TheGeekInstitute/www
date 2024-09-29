<?php
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
require "config/_extras.php";
session_name('OwnOnlineShop');
session_start();
session_regenerate_id();
$mobile_err=$email_err=false;
$mobile_msg=$email_msg="";

if(!isset($_COOKIE['verify_token'])){
    header("Location:singup.php");
    // echo "Redirect to signuppage";
}

if(isset($_REQUEST['vcode']) && !empty($_REQUEST['vcode']) && isset($_COOKIE['verify_token']) && ctype_xdigit($_REQUEST['vcode']) && is_hex($_REQUEST['vcode'])){


    $vcode = decrypt(hex2bin($_REQUEST['vcode']),"user_verification");
    $verify_token = decrypt($_COOKIE['verify_token'],"user_verification");

    


    if($vcode == $verify_token){
        $sql="SELECT `mobile_otp`,`email_otp`,`valid_from`,`email`,`mobile_number`,`email_resend_time`,`mobile_resend_time` FROM `signup_otp` WHERE `email` =?";
    
        $user_table_sql="SELECT `user_id`,`fullname`, `is_verified` , `mobile_number`,`email` FROM `users_signup` WHERE `email`=?";
        $user_table_stmt=$connection->prepare($user_table_sql);
        $user_table_stmt->bind_param("s",$vcode);
        $user_table_stmt->bind_result($db_user_id,$db_fullname,$db_is_verified,$user_mobile,$user_email);
        $user_table_stmt->execute();
        $user_table_stmt->store_result();
        // echo $vcode;
    
        $otp_stmt = $connection->prepare($sql);
        $otp_stmt->bind_param("s",$vcode);
        $otp_stmt->bind_result($db_mobile_otp,$db_email_otp,$db_valid_from,$db_email,$db_mobile_number,$db_email_resend_time,$db_mobile_resend_time);
        $otp_stmt->execute();
        $otp_stmt->store_result();
        if($otp_stmt->num_rows==1 && $user_table_stmt->num_rows==1){
            $user_table_stmt->fetch();
            $otp_stmt->fetch();

            $user_update_sql="UPDATE `users_signup` SET `email`=?,`mobile_number`=? WHERE `user_id`=?";
            $user_update_stmt = $connection->prepare($user_update_sql);
            $user_update_stmt->bind_param("sss",$db_email,$db_mobile_number,$db_user_id);
            $user_update_stmt->execute(); 
            $user_update_stmt->close();

            $otp_stmt->close();
            $user_table_stmt->close();
        }
        else{
            header("location:signup.php");
        }
    }else{
        setcookie("verify_token","",time()-86400,"/");
        header("location:signup.php");
    }
}
else{
    setcookie("verify_token","",time()-86400,"/");
    header("location:signup.php");
}


if($db_is_verified==1){
    $_SESSION['user_id']=$db_user_id;
    $_SESSION['fullname'] = $db_fullname;
    $_SESSION['mobile'] = $db_mobile_number;
    $_SESSION['email'] = $db_email;  
    $_SESSION['login']=true;
    $_SESSION['auto_login'] = true;
    setcookie("user_auth",encrypt($db_user_id,"user_auth"), (time()+(86400*30)),"/");
    header("location:login.php");
}


//form handling

if(isset($_POST['mobile_otp']) && isset($_POST['email_otp']) && isset($_POST['vcode']) && isset($_POST['tc'])){
    if($_POST['tc']=="true"){
       if(!empty($_POST['mobile_otp']) && ctype_digit($_POST['mobile_otp']) && strlen($_POST['mobile_otp'])==6){
        $mobile_otp=mysqli_real_escape_string($connection,input_filter($_POST['mobile_otp']));
       


       }
       else{
        $mobile_err=true;
        $mobile_msg="Invalid Mobile OTP";
       }


       if(!empty($_POST['email_otp']) && ctype_digit($_POST['email_otp']) && strlen($_POST['email_otp'])==6){
        $email_otp=mysqli_real_escape_string($connection,input_filter($_POST['email_otp']));
       
       }
       else{
        $email_err=true;
        $email_msg="Invalid Email OTP";
       }      
$mobile_otp_access=$email_otp_access=false;

if($mobile_err!=true && $email_err!=true){
        if(decrypt($_COOKIE['verify_token'],"user_verification")==$vcode){
            if(time() - $db_valid_from < 1800){
                if($db_mobile_otp==$mobile_otp){
                    $mobile_otp_access=true;
                }
                else{
                    $mobile_err=true;
                    $mobile_msg="Invalid OTP";
                    $mobile_otp_access=$email_otp_access=false;

                }

                if($db_email_otp==$email_otp){
                    $email_otp_access=true;
                }
                else{
                    $email_err=true;
                    $email_msg="Invalid OTP";
                    $email_otp_access=$email_otp_access=false;
                }
                
                if($db_is_verified==0){
                    if($email_otp_access == true && $mobile_otp_access ==true){
                        $verified=1;
                        $update_sql = "UPDATE `users_signup` SET `is_verified`=? WHERE `email`=? AND`mobile_number`=?";
                        $update_stmt=$connection->prepare($update_sql);
                        $update_stmt->bind_param("iss",$verified,$db_email,$db_mobile_number);
                        $update_stmt->execute();
                        $update_stmt->store_result();
                        if($update_stmt->affected_rows == 1){
                            $update_stmt->close();
                            
                            $sql="DELETE FROM `signup_otp` WHERE `email`=? AND `mobile_number`=?";
                            $delete_stmt = $connection->prepare($sql);
                            $delete_stmt->bind_param("ss",$db_email,$db_mobile_number);
                            $delete_stmt->execute();
                            $delete_stmt->close();

                            setcookie("verify_token","",time()-86400,"/");

                            $_SESSION['fullname'] = $db_fullname;
                            $_SESSION['mobile'] = $db_mobile_number;
                            $_SESSION['email'] = $db_email;  
                            $_SESSION['login']=true;
                            $_SESSION['auto_login'] = true;
                            setcookie("user_auth",encrypt($db_user_id,"user_auth"), (time()+(86400*30)),"/");
                            header("location:index.php");
                            die();
                          
                        }
                    }
                }
                else{
                    echo '
                    <script>
                        alert("You have already completed verification");
                        window.location.href="login.php";
                    </script>
                    ';
                    setcookie("verify_token","",time()-86400,"/");
                    unset($_SESSION['fullname']);
                    unset($_SESSION['mobile']);
                    unset($_SESSION['password']);
                    session_destroy();
                    deleteCookie();
                    
                    header("location:login.php");
                }
            }
            else{
                $mobile_err=true;
                $mobile_msg="OTP Expired";
                $email_err=true;
                $email_msg = "OTP Expired";
            }

        }

       }
       


    }
    else{
        echo '
        <script>
            alert("Please Accept The T&C");
        </script>
        ';
    }
}


#change details handling
if($_SERVER['REQUEST_METHOD']=="POST"){
    $change_email_access=$change_mobile_access=false;
    if(isset($_REQUEST['vcode']) && !empty($_REQUEST['vcode']) && isset($_REQUEST['email']) && isset($_REQUEST['mobile'])){
        $change_vcode = decrypt(hex2bin($_REQUEST['vcode']),"user_verification");
        if($change_vcode == $vcode){
            $change_mobile = mysqli_real_escape_string($connection,input_filter($_REQUEST['mobile']));
            $change_email = strtolower(mysqli_real_escape_string($connection,input_filter($_REQUEST['email'])));
            
            if(ctype_digit($change_mobile) && strlen($change_mobile)==10){
                $change_mobile_access=true;
           }
           else{
            $change_email_access=false;
            $change_mobile_access=false;
            echo '
            <script>
                alert("Invalid Mobile Number");
                window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
            </script>
            ';   
        }
        
        if(filter_var($change_email,FILTER_VALIDATE_EMAIL)){
            $change_email_access=true;

         
        }
        else{
            $change_email_access=false;
            $change_mobile_access=false;

            echo '
            <script>
                alert("Invalid Email Address");
                window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
            </script>
            ';
        }
           if($db_email != $change_email || $db_mobile_number != $change_mobile ){
            $send=false;
            if(!isset($_SESSION['change_count'])){
                $_SESSION['change_count']=0;
                $_SESSION['change_time']=time();
            }
            else{
                $_SESSION['change_count']+=1;
            }
            
            
            if(time()-$_SESSION['change_time'] >= 300 || $_SESSION['change_count']<=3){
                if($_SESSION['change_count']>3){
                    $_SESSION['change_count']=0;
                    $_SESSION['change_time']=time();
                }
            if($db_mobile_number != $change_mobile){
                
                $sql="SELECT `email`,`mobile_number` FROM `users_signup` WHERE `mobile_number`=?";
                $check_stmt=$connection->prepare($sql);
                $check_stmt->bind_param("s",$change_mobile);
                $check_stmt->execute();
                $check_stmt->store_result();
                if($check_stmt->num_rows==0){
                    $check_stmt->close();
                    $new_time=time();
                    $new_otp=mt_rand(100000,999999);
                    $mobile_sql="UPDATE `signup_otp` SET `mobile_otp`=?,`valid_from`=?,`mobile_number`=? WHERE `mobile_number`=? AND `email`=?;";
    
    
                    $mobile_stmt=$connection->prepare($mobile_sql);
                    $mobile_stmt->bind_param("sssss",$new_otp,$new_time,$change_mobile,$db_mobile_number,$db_email);
                    $mobile_stmt->execute();
                    $mobile_stmt->store_result();
                    if($mobile_stmt->affected_rows==1){
                        mobile_otp($new_otp,$change_mobile,"Verify","otp");
                        $send=true;
                    }
                    else{
                        echo '
                        <script>
                        alert("Can not Send OTP at this time");
                        window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
                        </script>
                        ';
                    }
                    $mobile_stmt->close();
                }
                else{
                    echo '
                    <script>
                    alert("Mobile Number Already Registered");
                    window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
                    </script>
                    ';
                }    
            }
            if($db_email != $change_email){
                $sql="SELECT `email`,`mobile_number` FROM `users_signup` WHERE `email`=?";
                $email_check_stmt=$connection->prepare($sql);
                $email_check_stmt->bind_param("s",$change_email);
                $email_check_stmt->execute();
                $email_check_stmt->store_result();
                if($email_check_stmt->num_rows==0){
                    $email_check_stmt->close();
                    $new_time=time();
                    $new_otp=mt_rand(100000,999999);
                     $email_sql="UPDATE `signup_otp` SET `email_otp`=?,`valid_from`=?,`mobile_number`=? WHERE `mobile_number`=? AND `email`=?;";
     
     
                     $email_stmt=$connection->prepare($email_sql);
                     $email_stmt->bind_param("sssss",$new_otp,$new_time,$change_email,$db_mobile_number,$db_email);
                     $email_stmt->execute();
                     $email_stmt->store_result();
                     if($email_stmt->affected_rows==1){
                         email_otp($change_email,"OTP Verification",email_messege("verify",$db_fullname,$new_otp));
                        $send=true;
                     }
                     else{
                        echo '
                        <script>
                        alert("Can not Send OTP at this time Email");
                        window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
                        </script>
                        ';
                    }
                    $email_stmt->close();
                }
                else{
                    echo '
                    <script>
                    alert("Email Address Already Registered");
                    window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
                    </script>
                    ';
                }

            }

            if($send==true){
                echo '
                <script>
                alert("New OTP Has Been been sended to your new Mobile Number/Email");
                window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")).'"
                </script>
                ';
            }  
            }
            else{
                    echo '
                    <script>
                    alert("Maximum Limit Reached - Try After 3 Minutes");
                    window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
                    </script>
                    ';
            }
           }
           else{
            echo '
            <script>
                alert("Please Change Email or Mobile Number");
                window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification"))."&change_detials=true".'"
            </script>
            ';
           }

           
            
        }
        else{
            header("location:otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")));
        }
        
    }
}


#//Resend OTP code
if(isset($_REQUEST['vcode']) && isset($_REQUEST['resend']) && !empty($_REQUEST['vcode']) && !empty($_REQUEST['resend'])){
   $resend = mysqli_real_escape_string($connection,input_filter($_REQUEST['resend']));
   $valid_from=$resend_time=time();
#mobile resend otp

  if($resend=="mobile"){
      if(!isset($_SESSION['mobile_resend_count'])){
          $_SESSION['mobile_resend_count']=1;
      }
      else{
          $_SESSION['mobile_resend_count']+=1;
      }
    $update_resend_sql="UPDATE `signup_otp` SET `valid_from`=?,`mobile_resend_time`=? WHERE `email`=? AND `mobile_number`=?";
    $update_resend_stmt=$connection->prepare($update_resend_sql);
    $update_resend_stmt->bind_param("ssss",$valid_from,$resend_time,$db_email,$db_mobile_number);
    $update_resend_stmt->execute();
    $update_resend_stmt->store_result();
    if($update_resend_stmt->affected_rows>=1){
        $update_resend_stmt->close();
        if(time()-$db_mobile_resend_time>=300 || $_SESSION['mobile_resend_count']<=3){
            if($_SESSION['mobile_resend_count']>3){
                $_SESSION['mobile_resend_count']=1;
            }
    
            if(mobile_otp($db_mobile_otp,$db_mobile_number,"Verify","otp")){
                echo '
                <script>
                    alert("OTP has Been Sended");
                    window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")).'"
                </script>
                ';
            }
            else{
                echo '
                <script>
                    alert("Can not Resend OTP At This time");
                    window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")).'"
                </script>
                ';
            }
    
        }
        else{
            echo '
            <script>
                alert("Try After 5 Minutes");
                window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")).'"
            </script>
            ';
        }

    }

}


#email resend otp
if($resend=="email"){
    if(!isset($_SESSION['email_resend_count'])){
        $_SESSION['email_resend_count']=1;
    }
    else{
        $_SESSION['email_resend_count']+=1;
    }
  $update_resend_sql="UPDATE `signup_otp` SET `valid_from`=?,`email_resend_time`=? WHERE `email`=? AND `mobile_number`=?";
  $update_resend_stmt=$connection->prepare($update_resend_sql);
  $update_resend_stmt->bind_param("ssss",$valid_from,$resend_time,$db_email,$db_mobile_number);
  $update_resend_stmt->execute();
  $update_resend_stmt->store_result();
  if($update_resend_stmt->affected_rows>=1){
      $update_resend_stmt->close();
      if(time()-$db_mobile_resend_time>=300 || $_SESSION['email_resend_count']<=3){
          if($_SESSION['email_resend_count']>3){
              $_SESSION['email_resend_count']=1;
          }
  
          if(email_otp($db_email,"OTP Verification",email_messege("verify",$db_fullname,$db_email_otp))){
              echo '
              <script>
                  alert("OTP has Been Sended");
                  window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")).'"
              </script>
              ';
          }
          else{
              echo '
              <script>
                  alert("Can not Resend OTP At This time");
                  window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")).'"
              </script>
              ';
          }
  
      }
      else{
          echo '
          <script>
              alert("Try After 5 Minutes");
              window.location.href = "'."otp_verification.php?vcode=".bin2hex(encrypt($db_email,"user_verification")).'"
          </script>
          ';
      }

  }

}

}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .wrapper{
            text-align: center;
            background-color: rgba(65, 105, 225, 0.09);
            border-radius: 2rem;
            margin: auto;
            position: absolute;
            max-width:20rem;
            width: 20rem;
            height: 30rem;
            top: calc(50% - 15rem);
            left: calc(50% - 10rem);
        }

        .wrapper .logo img{
            height: 2.5rem;
            display: block;
            margin: 1rem auto;
        }

        .wrapper > h1{
            margin: .7rem 0;
        }

        .wrapper > p{
            margin: .7rem 0;
        }

        .wrapper a{
            color:royalblue;
        }
        .wrapper a:hover{
            text-decoration: underline;
        }

      
        .wrapper form{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
        }

        .wrapper form span{
            color: red;
        }



        .wrapper form input[type="number"],
        .wrapper form input[type="submit"],
        .wrapper form input[type="email"]
        {
            width: 80%;
            height: 1.7rem;
            margin: .2rem 0;
        }
        .wrapper form label{
            display: block;
            font-weight: 400;
            width: 80%;
            margin-top: 1rem;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .wrapper form input[type="submit"]{
            margin-top: .5rem;
            border: 1px solid white;
            background-color: grey;
            cursor: pointer;
            color: white;
            font-weight: 700;
            border-radius: .2rem;
            font-size: 1rem;

        }

        .wrapper form input + label{
            color: red;
            margin: 0;
        }

    

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="../web/images/11.jpg" alt="">
        </div>
      
        <?php
if(isset($_GET['change_detials']) && !empty($_GET['change_detials'])){
    echo'
    <h1>Change Details</h1>
    <form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post">
        <label class="filed"><p>Mobile Number <span>*</span></p></label>
        <input type="number" name="mobile" value="'.$db_mobile_number.'">
        <label>
        ';

        if($mobile_err==true){
            echo $mobile_msg;
        }

        echo '
        </label>
        <label class="filed"><p>Email Address <span>*</span></p></label>
        <input type="email" name="email" value="'.$db_email.'">
        <input type="hidden" name="vcode" value="'.bin2hex($_COOKIE['verify_token']).'">
        <label>
        ';
      
        if($email_err==true){
            echo $email_msg;
        }

        echo '
        </label>
        <input type="submit" value="Change" name="change" style="background-color:royalblue;">
        <a href=otp_verification.php?vcode='.bin2hex($_COOKIE['verify_token']).' >Back</a>

    </form>
    </div>
    ';
}


else{
    echo '
    <h1>OTP Verification</h1>
    <p>Hi, '.$db_fullname.' OTP has beend Sended to your Registered Mobile number  & Email</p>
    
    <p>Not Your Mobile Number or Email ?<br> <a href="?vcode='.bin2hex($_COOKIE['verify_token']).'&change_detials=true">Change Details</a>  </p>
    
    <form action="" method="post">
        <label class="filed"><p>Mobile OTP <span>*</span></p>  <a href="otp_verification.php?vcode='.bin2hex(encrypt($db_email,"user_verification")).'&resend=mobile">Resend OTP</a> </label>
        <input type="number" name="mobile_otp">
        <label>
        ';

        if($mobile_err==true){
            echo $mobile_msg;
        }
        echo '
        </label>    
        <label class="filed"><p>Email OTP <span>*</span></p>  <a href="otp_verification.php?vcode='.bin2hex(encrypt($db_email,"user_verification")).'&resend=email">Resend OTP</a></label>
        <input type="number" name="email_otp" >
        <label>';
        
        if($email_err==true){
            echo $email_msg;
        }
        echo '
        </label>
        <label class="filed"><input type="checkbox" name="tc" value="true" id="tc"> I Accept <a href="#">T&C</a> | <a href="#">Privacy & Policies</a> </label>
        <input type="hidden" name="vcode" value="'.bin2hex($_COOKIE['verify_token']).'">
        <input type="submit" value="Verify" name="verify" id="btn" disabled>
    </form>
    </div> 
';
    
}

?>
        
<script>
    let tc = document.querySelector("#tc");
    tc.addEventListener('click',()=>{
    let btn = document.querySelector("#btn");
            if(tc.checked==true){
                btn.removeAttribute("disabled")
                btn.setAttribute("style","background-color:royalblue");
            }
            else{
                btn.setAttribute("disabled","") 
                btn.setAttribute("style","background-color:grey");
            }
        })
</script>
</body>
</html>