<?php
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
require "config/_extras.php";
session_name('OwnOnlineShop');
session_start();
session_regenerate_id();
if(isset($_SESSION['login']) && $_SESSION['login']==true){
    header("location:index.php");
}  

if(isset($_SESSION['auto_login']) && isset($_SESSION['user_id'])){
    if($_SESSION['auto_login']==true){
        header("location:index.php");
        $_SESSION['login']=true;
    }
    else{
        // session_destroy();
        header("location:login.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - OwnShop</title>
    <link rel="stylesheet" href="./login_style.css">
</head>
<body>
<?php
$_SESSION['username']="";
$otp_request=false;
$username=$password=$otp=$password_msg=$username_msg=$db_user_id=$db_fullname=$db_email=$db_mobile_number=$db_password=$db_is_verified="";
$username_err=$password_err=$signup=false;
$login_username_access=$login_password_access=$login_access=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['csrf_token']) && !empty($_POST['csrf_token']) && isset($_SESSION['csrf_token']) && $_SESSION['csrf_token']==$_POST['csrf_token']){
        if(isset($_POST['username']) && !empty($_POST['username'])){
            if(ctype_digit($_POST['username']) || filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
                $username=strtolower(mysqli_real_escape_string($connection,input_filter($_POST['username'])));
                $_SESSION['username']=$username;

               echo $db_user_id;
                $login_username_access=true;
            }
            else{
                $username_err=true;
                $username_msg="Invalid Mobile Number/Email";
                $login_username_access=$login_password_access=false;

            }
        }
        else{
            $username_err=true;
            $username_msg="Please Enter Username";
            $login_username_access=false;

        }

        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=mysqli_real_escape_string($connection,$_POST['password']);
            $login_password_access=true;
           

        }
        else{
            $password_err=true;
            $password_msg="Please Enter Password";
            $login_password_access=false;
        } 
    }
    else{
        echo '
        <script>
            alert("Invalid Request");
            window.header.location.href="login.php"
        </script>
        ';
    }
}


#login Process
if($login_password_access==true && $login_username_access==true){
    $login_check_sql="SELECT  `user_id`, `fullname`, `email`, `mobile_number`, `password`, `is_verified` FROM `users_signup` WHERE `email`=? OR `mobile_number`=?";
    $login_check_stmt = $connection->prepare($login_check_sql);
    $login_check_stmt->bind_param("ss",$username,$username);
    $login_check_stmt->bind_result($db_user_id,$db_fullname,$db_email,$db_mobile_number,$db_password,$db_is_verified);
    $login_check_stmt->execute();
    $login_check_stmt->store_result();
    if($login_check_stmt->num_rows()==1){
        $login_check_stmt->fetch();

        $login_time=time();
        $login_count=1;
        $sql="SELECT `user_id`, `login_time`, `login_count` FROM `user_logins` WHERE `user_id`=?";
        $check = $connection->prepare($sql);
        $check->bind_param("s",$db_user_id);
        $check->bind_result($login_db_user_id,$login_db_login_time,$login_db_login_count);
        $check->execute();
        $check->store_result();
        if($check->num_rows()==1){
            $check->fetch();


            if(time()-$login_db_login_time>=1800 && $login_db_login_count>5){
                $login_count=0;
                $login_db_login_count=0;
                $update_sql="UPDATE `user_logins` SET `login_time`=?,`login_count`=? WHERE `user_id`=?";
                $update_stmt=$connection->prepare($update_sql);
                $update_stmt->bind_param("sss",$login_time,$login_count,$db_user_id);
                $update_stmt->execute(); 
                $update_stmt->close();
                }


            if(time()-$login_db_login_time>=1800 || $login_db_login_count<=5){
                $login_count=($login_db_login_count+1);
                $login_update_sql="UPDATE `user_logins` SET `login_time`=?,`login_count`=? WHERE `user_id`=?";
                $login_update_stmt=$connection->prepare($login_update_sql);
                $login_update_stmt->bind_param("sss",$login_time,$login_count,$db_user_id);
                $login_update_stmt->execute();
                $login_update_stmt->store_result();
                if($login_update_stmt->affected_rows==1){
                    $login_access=true;
                }
                else{
                    echo '
                    <script>
                        alert("Invalid Request");
                        window.header.location.href="login.php"

                    </script>
                    '; 
                }

                $login_update_stmt->close();
            }
            else{
                echo '
                <script>
                    alert("Please Try After 30 Minutes");
                    window.header.location.href="login.php"

                </script>
                ';
            }
        }
        else{
       
            $login_insert_sql="INSERT INTO `user_logins`( `user_id`, `login_time`, `login_count`) VALUES (?,?,?)";
            $login_insert_stmt=$connection->prepare($login_insert_sql);
            $login_insert_stmt->bind_param("sss",$db_user_id,$login_time,$login_count);
            $login_insert_stmt->execute();
            if($login_insert_stmt->affected_rows==1){
                $login_access=true;
            }
            else{
                $login_access=false;
            }

        }
        $check->close();

    }
    else{
        $password_err=true;
        $username_err=true;
        $username_msg="Incorrect Username";
        $password_msg="Incorrect Password";
        $login_username_access=$login_password_access=false;
    }
    $login_check_stmt->close();  
}


if(isset($_POST['login']) && $login_password_access==true && $login_username_access==true && $login_access==true){
    if(password_verify($password,$db_password)){
        if($db_is_verified==1){
            $login_time = time();
            $login_count=1;
            $sql="UPDATE `user_logins` SET `login_time`=?,`login_count`=? WHERE `user_id`=? ;";
            $login_update_stmt=$connection->prepare($sql);
            $login_update_stmt->bind_param("sss",$login_time,$login_count,$db_user_id);
            $login_update_stmt->execute();
            $login_update_stmt->store_result();
            // if($login_update_stmt->affected_rows==1){
                $login_update_stmt->close();
                session_regenerate_id();
                setcookie("user_auth",encrypt($db_user_id,"user_auth"), (time()+(86400*30)),"/");
                #set cookie for automatic login;
                $_SESSION['user_id']=$db_user_id;
                $_SESSION['fullname'] = $db_fullname;
                $_SESSION['mobile'] = $db_mobile_number;
                $_SESSION['email'] = $db_email;  
                $_SESSION['login']=true;
                
                header("location:index.php");
                die();
            // }
            // else{
            //     echo '
            //     <script>
            //         alert("Server Busy!... Try After Some Time");
            //         window.header.location.href="login.php"

            //     </script>
            //     ';
            // }
            $login_update_stmt->close();

        }
        else{
            $new_time=time();
            $new_mobile_otp=mt_rand(100000,999999);
            $new_email_otp=mt_rand(100000,999999);
            $new_sql="UPDATE `signup_otp` SET `mobile_otp`=?,`email_otp`=?,`valid_from`=? WHERE `email`=? AND `mobile_number`=?";
            $new_stmt=$connection->prepare($new_sql);
            $new_stmt->bind_param("iisss",$new_mobile_otp,$new_email_otp,$new_time,$db_email,$db_mobile_number);
            $new_stmt->execute();
            $new_stmt->store_result();
            if($new_stmt->affected_rows>=1){
                mobile_otp($new_mobile_otp,$db_mobile_number,"Verify","otp");
                email_otp($db_email,"OTP Verification",email_messege("verify",$db_fullname,$new_email_otp));
            }
            $new_stmt->close();
            $_SESSION['verify']=true;
            $verify_token=encrypt($db_email,"user_verification");
            setcookie("verify_token",$verify_token,time()+86400,"/");
            header("location:otp_verification.php?vcode=" . bin2hex($verify_token));
        }
    }
    else{
    $password_err=true;
    $password_msg="Incorrect Password";
    $login_username_access=false;
   }

}

if(isset($_POST['otp_request']) && $login_username_access==true){
    $password_err=false;
    $otp_request=true;

    $login_otp_check_sql="SELECT  `user_id`, `fullname`, `email`, `mobile_number`, `password`, `is_verified` FROM `users_signup` WHERE  `mobile_number`=? OR `email`=?";
    $login_otp_check_stmt = $connection->prepare($login_otp_check_sql);
    $login_otp_check_stmt->bind_param("ss",$username,$username);
    $login_otp_check_stmt->bind_result($db_user_id,$db_fullname,$db_email,$db_mobile_number,$db_password,$db_is_verified);
    $login_otp_check_stmt->execute();
    $login_otp_check_stmt->store_result();
     if($login_otp_check_stmt->num_rows==1){
        $login_otp_check_stmt->fetch();
        if($db_is_verified==1){
            $login_time=time();
            $login_count=1;
            $sql="SELECT `user_id`, `login_time`, `login_count` FROM `user_logins` WHERE `user_id`=?";
            $check = $connection->prepare($sql);
            $check->bind_param("s",$db_user_id);
            $check->bind_result($login_db_user_id,$login_db_login_time,$login_db_login_count);
            $check->execute();
            $check->store_result();
            if($check->num_rows()==1){
                $check->fetch();

                if(time()-$login_db_login_time>=1800 && $login_db_login_count>5){
                    $login_count=0;
                    $login_db_login_count=0;
                    $update_sql="UPDATE `user_logins` SET `login_time`=?,`login_count`=? WHERE `user_id`=?";
                    $update_stmt=$connection->prepare($update_sql);
                    $update_stmt->bind_param("sss",$login_time,$login_count,$db_user_id);
                    $update_stmt->execute(); 
                    $update_stmt->close();
                    }
    
                if(time()-$login_db_login_time>=1800 || $login_db_login_count<=5){
                    $login_count=($login_db_login_count+1);
                    $login_update_sql="UPDATE `user_logins` SET `login_time`=?,`login_count`=? WHERE `user_id`=?";
                    $login_update_stmt=$connection->prepare($login_update_sql);
                    $login_update_stmt->bind_param("sss",$login_time,$login_count,$db_user_id);
                    $login_update_stmt->execute();
                    $login_update_stmt->store_result();
                    if($login_update_stmt->affected_rows==1){
                        $login_access=true;
                    }
                    else{
                        $login_access=false;
                        echo '
                        <script>
                            alert("Invalid Request");
                            window.header.location.href="login.php"

                        </script>
                        '; 
                    }
    
                    $login_update_stmt->close();
                }
                else{
                    echo '
                    <script>
                        alert("Please Try After 30 Minutes");
                        window.header.location.href="login.php"
                    </script>
                    ';
                }
            }
            else{
           
                $login_insert_sql="INSERT INTO `user_logins`( `user_id`, `login_time`, `login_count`) VALUES (?,?,?)";
                $login_insert_stmt=$connection->prepare($login_insert_sql);
                $login_insert_stmt->bind_param("sss",$db_user_id,$login_time,$login_count);
                $login_insert_stmt->execute();
                if($login_insert_stmt->affected_rows==1){
                    $login_access=true;
                }
                else{
                    $login_access=false;
                }
    
            }
            $check->close();

if(isset($_POST['otp']) && $login_access==true){
    if(!empty($_POST['otp']) && ctype_digit($_POST['otp']) && strlen($_POST['otp'])==6){
        $otp = mysqli_real_escape_string($connection,input_filter($_POST['otp']));
            if($_SESSION['login_otp']==$otp){
                
                $time=time();
                $login_count=1;
                $login_update_sql="UPDATE `user_logins` SET `login_time`=?,`login_count`=? WHERE `user_id`=?";
                $login_update_stmt=$connection->prepare($login_update_sql);
                $login_update_stmt->bind_param("sss",$login_time,$login_count,$db_user_id);
                $login_update_stmt->execute();
                $login_update_stmt->store_result();
                $login_update_stmt->close();
                
                session_regenerate_id();
                setcookie("user_auth",encrypt($db_user_id,"user_auth"), (time()+(86400*30)),"/");
                #set cookie for automatic login;
                $_SESSION['user_id']=$db_user_id;
                $_SESSION['fullname'] = $db_fullname;
                $_SESSION['mobile'] = $db_mobile_number;
                $_SESSION['email'] = $db_email;  
                $_SESSION['login']=true;
                
                header("location:index.php");
                die();
            }   
            else{
                $password_err=true;
                $password_msg="Invalid OTP";
                $login_username_access=false;
            }
        


         }
         else{
                    $password_err=true;
                    $password_msg="Invalid OTP";
                    $login_username_access=false;
                }
            }
            else{
                
                if(time()-$login_db_login_time>=1800 || $login_db_login_count<=5){
                    $login_otp=mt_rand(100000,999999);
                    $_SESSION['login_otp']=$login_otp;
                    mobile_otp($login_otp,$db_mobile_number,"Login","otp");
                    email_otp($db_email,"OTP for Login",email_messege("login",$db_fullname,$login_otp));
                }
                else{
                    echo '
                    <script>
                        alert("Please Try After 30 Minutes");
                        window.header.location.href="login.php"
                    </script>
                    ';
                }

            }
        }
        else{
            $new_time=time();
            $new_mobile_otp=mt_rand(100000,999999);
            $new_email_otp=mt_rand(100000,999999);
            $new_sql="UPDATE `signup_otp` SET `mobile_otp`=?,`email_otp`=?,`valid_from`=? WHERE `email`=? AND `mobile_number`=?";
            $new_stmt=$connection->prepare($new_sql);
            $new_stmt->bind_param("iisss",$new_mobile_otp,$new_email_otp,$new_time,$db_email,$db_mobile_number);
            $new_stmt->execute();
            $new_stmt->store_result();
            if($new_stmt->affected_rows>=1){
                mobile_otp($new_mobile_otp,$db_mobile_number,"Verify","otp");
                email_otp($db_email,"OTP Verification",email_messege("verify",$db_fullname,$new_email_otp));
            }
            $new_stmt->close();
            $_SESSION['verify']=true;
            $verify_token=encrypt($db_email,"user_verification");
            setcookie("verify_token",$verify_token,time()+86400,"/");
            header("location:otp_verification.php?vcode=" . bin2hex($verify_token));
        }   
    }
    else{
        $otp_request=false;
        $username_err=true;
        $username_msg="Invalid Username";
        $login_username_access=false;
    }
    $login_otp_check_stmt->close();
     }

?>
    <div class="wrapper">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <h1>Login</h1>
            <label class="field">Email/Phone <span>*</span> </label>
            <input type="text" placeholder="example@email.com" name="username" value="<?php echo $_SESSION['username']; ?>">
            
            <?php if($username_err==true){ echo '<label class="msg">'.$username_msg.'</label>';} ?>

            <?php if($otp_request==false){ echo '<button type="submit" name="otp_request" value="true" id="otp-btn">Login with OTP</button>'; }  ?>
            
            <label class="field"><?php if($otp_request){echo "Enter OTP";}else{echo "Password";}?> <span>*</span></label>

            <input type="<?php if($otp_request){echo "number";}else{echo "password";}?>" name="<?php if($otp_request){echo "otp";}else{echo "password";}?>"  placeholder="<?php if($otp_request){echo "";}else{echo "********";}?>">

            <?php if($password_err==true){ echo '<label class="msg">'.$password_msg.'</label>';} ?>
            
            
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']=bin2hex(random_bytes(20)); ?>">
            <!-- <input type="submit" value="Login" name="login"> -->
            <?php if($otp_request==true){ echo '<input type="submit" value="Login" name="otp_request">'; }else { echo '<input type="submit" value="Login" name="login">'; }  ?>
            
            <p><a href="./reset_password.php">Reset Password ?</a></p>
               <p>Don't Have an Account ? <a href="./signup.php">Create One</a></p>
            
        </form>
    </div>
</body>
</html>

