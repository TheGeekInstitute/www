<?php
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
require "config/_extras.php";
session_name('OwnOnlineShop');

session_start();
session_regenerate_id();
$form_change_password=$form_verify=false;
$email_msg=$mobile_msg=$password_msg=$cpassword_msg=$email_otp_msg=$mobile_otp_msg="";
$email_error=$mobile_error=$password_error=$cpassword_error=$email_otp_access=$mobile_otp_access=$email_update_password_access=$mobile_update_password_access=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['csrf_token']==$_SESSION['csrf_token']){
        if(isset($_POST['reset']) && isset($_POST['username']) && !empty($_POST['username'])){
            if((ctype_digit($_POST['username']) && strlen($_POST['username'])==10) || filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
                
                $username = strtolower(mysqli_real_escape_string($connection,input_filter($_POST['username'])));

                $sql="SELECT `user_id`, `fullname`, `email`, `mobile_number`, `password`, `is_verified` FROM `users_signup` WHERE `mobile_number`=? OR `email`=?";

                $stmt = $connection->prepare($sql);
                $stmt->bind_param("ss",$username,$username);
                $stmt->bind_result($db_user_id,$db_fullname,$db_email,$db_mobile_number,$db_password,$db_is_verified);
                $stmt->execute();
                $stmt->store_result();
                if($stmt->num_rows==1){
                    $stmt->fetch();
                    $_SESSION['user_id']=$db_user_id;
                    $check_sql="SELECT  `email_otp`, `mobile_otp`, `time`, `reset_count` FROM `reset_password_otp` WHERE `user_id`=?";
                    $check_stmt=$connection->prepare($check_sql);
                    $check_stmt->bind_param("s",$db_user_id);
                    $check_stmt->bind_result($db_email_otp,$db_mobile_otp,$db_time,$db_reset_count);
                    $check_stmt->execute();
                    $check_stmt->store_result();
                    $check_stmt->fetch();
                    if($check_stmt->num_rows==0){
                        $insert_sql="INSERT INTO `reset_password_otp`( `user_id`, `email_otp`, `mobile_otp`, `time`, `reset_count`) VALUES (?,?,?,?,?)";
                        $time=time();
                        $email_otp=mt_rand(100000,999999);
                        $mobile_otp=mt_rand(100000,999999);
                        $resent_count=1;
                        
                        $insert_stmt=$connection->prepare($insert_sql);
                        $insert_stmt->bind_param("siisi",$db_user_id,$email_otp,$mobile_otp,$time,$resent_count);
                        $insert_stmt->execute();
                        $insert_stmt->store_result();
                       
                        if($insert_stmt->affected_rows==1 && email_otp($db_email,"OTP for Reset Password",email_messege("reset",$db_fullname,$email_otp))==true && mobile_otp($mobile_otp,$db_mobile_number,"Reset","otp")==true){
                            $form_verify=true;
                        }

                        $insert_stmt->close();
                    
                    }
                    else{
                        if($db_reset_count<=3 || time()-$db_time>=1800){
                            $time=time();
                            $email_otp=mt_rand(100000,999999);
                            $mobile_otp=mt_rand(100000,999999);
                            $resent_count=$db_reset_count+1;
                            $update_sql="UPDATE `reset_password_otp` SET `email_otp`=?,`mobile_otp`=?,`time`=?,`reset_count`=? WHERE `user_id`=?";
                            $update_stmt=$connection->prepare($update_sql);
                            $update_stmt->bind_param("iisis",$email_otp,$mobile_otp,$time,$resent_count,$db_user_id);
                            $update_stmt->execute();
                            $update_stmt->store_result();
                            if($update_stmt->affected_rows==1 && email_otp($db_email,"OTP for Reset Password",email_messege("reset",$db_fullname,$email_otp))==true && mobile_otp($mobile_otp,$db_mobile_number,"Reset","otp")==true){
                                $form_verify=true;
                            }
    
                            $update_stmt->close();
                            
                        }
                        else{
                            $email_error=true;
                            $email_msg="Try After 30 Minutes";
                        }
                    }

                    $check_stmt->close();


                }
                else{
                    $email_error=true;
                    $email_msg="Invalid Email/Phone";
                }
                $stmt->close();
            }
            else{
                $email_error=true;
                $email_msg="Invalid Email/Phone";
            }
        }
        else{
            $email_error=true;
            $email_msg="Please Enter Email/Phone";
        }


       

        if(isset($_POST['reset_val']) && ctype_xdigit($_POST['reset_val']) && isset($_POST['email_otp']) && isset($_POST['mobile_otp'])){
            $form_verify=true;
            $user_id=decrypt(hex2bin(mysqli_real_escape_string($connection,input_filter($_POST['reset_val']))),"reset");
            if($user_id== $_SESSION['user_id']){
                if(!empty($_POST['email_otp']) && strlen($_POST['email_otp'])==6 && ctype_digit($_POST['email_otp'])){
                    $email_otp=mysqli_real_escape_string($connection,input_filter($_POST['email_otp']));
                    $email_otp_access=true;
                }
                else{
                    $email_otp_msg="Invalid OTP";
                }

                if(!empty($_POST['mobile_otp']) && strlen($_POST['mobile_otp'])==6 && ctype_digit($_POST['mobile_otp'])){
                    $mobile_otp=mysqli_real_escape_string($connection,input_filter($_POST['mobile_otp']));
                    $mobile_otp_access=true;
                }
                else{
                    $mobile_otp_msg="Invalid OTP";
                }
            }
            else{
                header("location:reset_password.php");
                die();
            }
            
            
            if($email_otp_access==true && $mobile_otp_access==true){
                $check_sql="SELECT  `email_otp`, `mobile_otp`, `time`, `reset_count` FROM `reset_password_otp` WHERE `user_id`=?";
                $check_stmt=$connection->prepare($check_sql);
                $check_stmt->bind_param("s",$user_id);
                $check_stmt->bind_result($db_email_otp,$db_mobile_otp,$db_time,$db_reset_count);
                $check_stmt->execute();
                $check_stmt->store_result();
                if($check_stmt->num_rows>0){
                    $check_stmt->fetch();
                    if($db_reset_count<=4 && time()-$db_time<=1800){
                        if($db_email_otp==$email_otp){
                            $email_update_password_access=true;
                        }
                        else{
                            $email_otp_msg="Invalid OTP";
                        }
    
                        if($db_mobile_otp==$mobile_otp){
                            $mobile_update_password_access=true;
                        }
                        else{
                            $mobile_otp_msg="Invalid OTP";
                        }
    
                        if($email_update_password_access==true && $mobile_update_password_access==true){
                            $_SESSION['form_change_password']=true;
                            $_SESSION['user_id']=$user_id;
                            header("location:reset_password.php");
                        }
                        else{
                            $_SESSION['form_change_password']=false;
                        }
                    }
                    else{
                        session_destroy();
                        echo '
                        <script>
                        alert("OTP Has Been Expired, Try Again !!!!");
                        window.location.href="reset_password.php";
                        </script>
                        ';
                    }
                }
                else{
                header("location:reset_password.php");
                die();
                }
                $check_stmt->close();
            } 
        }


        //change_password btn
      
        if(isset($_POST['change']) && isset($_POST['reset_token']) && !empty($_POST['reset_token']) && isset($_POST['password']) && isset($_POST['cpassword'])){
            if(ctype_xdigit($_POST['reset_token'])){
                $user_id=decrypt(hex2bin(mysqli_real_escape_string($connection,input_filter($_POST['reset_token']))),"token");
                if($_SESSION['user_id']==$user_id){
                    if(!empty($_POST['password'])){
                        if(strlen($_POST['password'])>=8 && strlen($_POST['password'])<=32){
                            $password= mysqli_real_escape_string($connection,input_filter($_POST['password']));
                            if(isset($_POST['cpassword']) && !empty($_POST['cpassword'])){
                                if($password==$_POST['cpassword']){
                                    $password=password_hash($password,PASSWORD_BCRYPT);
                                    $is_verified=1;
                                    $update_pass_sql="UPDATE `users_signup` SET `password`=?,`is_verified`=? WHERE `user_id`=?;";
                                    $update_pass_stmt=$connection->prepare($update_pass_sql);
                                    $update_pass_stmt->bind_param("sis",$password,$is_verified,$user_id);
                                    $update_pass_stmt->execute();
                                    $update_pass_stmt->store_result();
                                    if($update_pass_stmt->affected_rows==1){
                                        $delete_sql="DELETE FROM `reset_password_otp` WHERE `user_id`=?";
                                        $delete_stmt=$connection->prepare($delete_sql);
                                        $delete_stmt->bind_param("s",$user_id);
                                        $delete_stmt->execute();
                                        // $delete_sql->close();
                                        session_destroy();
                                        echo ' <script>
                                        alert("Congulations 💥 Password Has Been Changed , You Can Login Now");
                                        window.location.href="login.php";
                                        </script>';


                                    }else{
                                        session_destroy();
                                     echo  ' <script>
                                        alert("Can Not Change Password At This Time, Server Busy!!!!");
                                        window.location.href="reset_password.php";
                                        </script>';
                                    }

                                    $update_pass_stmt->close();


                                }
                                else{
                                    $cpassword_msg="Password Not Matched";

                                }
                            }
                            else{
                                $cpassword_msg="Please Confirm the Password";
                            }
                        }
                        else{
                        $password_msg="Password Should be Min 8 or Max 32 Characters";
                        }

           
                    }
                    else{
                        $password_msg="Password Should Not Be Empty";
                    }

                }
                else{
                    header("location:reset_password.php");
                    die();
                }
                
            }
            else{
                header("location:reset_password.php");
                die();
            }
        }


    }
    else{
        echo '
        <script>
            alert("Invalid Request");
            window.location.href="reset_password.php";
        </script>';
    }
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - OwnShop</title>
<style>
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
            max-height: 30rem;
            top: calc(50% - 15rem);
            left: calc(50% - 10rem);
            padding:.5rem;
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
        .wrapper form input[type="text"],
        .wrapper form input[type="password"]
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
            justify-content: start;
            font-weight:900;
            /* letter-spacing:1px; */
        }
        .wrapper form input[type="submit"]{
            margin-top: .5rem;
            border: 1px solid white;
            background-color: royalblue;
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
</style>
</head>
<body>




    <div class="wrapper">
        <form method="POST" action="">
            <h1>Reset Password</h1>
           <?php
            if($form_verify==true){
                echo '
                <p>OTP has been sended to your Registered Mobile Number and Email</p>
 
                <label class="field">Email OTP <span>*</span> </label>

                <input type="number" placeholder="123456" name="email_otp"
                value="">
                <label for="">'.$email_otp_msg.'</label>
                <label class="field">Mobile OTP <span>*</span> </label>
                <input type="number" placeholder="123456" name="mobile_otp"
                value="">
                <label for="">'.$mobile_otp_msg.'</label>
                <input type="hidden" name="reset_val" value="'.bin2hex(encrypt($_SESSION['user_id'],"reset")).'">
                <input type="submit" value="Submit" name="otp_submit">
                ';
            }
            else if( isset($_SESSION['form_change_password']) && $_SESSION['form_change_password']==true){
                echo '
                <label class="field">New Password <span> *</span> </label>
                <input type="password" placeholder="********" name="password">
                <label for="">'.$password_msg.'</label>

                <label class="field">Confirm Password <span>*</span> </label>
                <input type="text" placeholder="Confirm Password" name="cpassword" >
                <label for="">'.$cpassword_msg.'</label>
                <input type="hidden" name="reset_token" value="'.bin2hex(encrypt($_SESSION['user_id'],"token")).'">
                <input type="submit" value="Change" name="change">
      
                ';
            }
            else{
                echo '
                <label class="field">Email/Phone <span>*</span> </label>
                <input type="text" placeholder="example@email.com" name="username"
                value="">
                ';
                if($email_error==true){
                    echo '
                    <label>'.$email_msg.'</label>
                    ';
                }

                echo '
                <input type="submit" value="Reset" name="reset">
                   <p>Already Have an Account. <a href="./login.php">Login</a></p>
                ';
            }
            ?>
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']=bin2hex(random_bytes(20)); ?>">
        </form>
    </div>


    <script>
      document.querySelectorAll("input").forEach((e)=>{
            e.addEventListener('input',()=>{
                e.nextElementSibling.innerHTML="";
            })
        })
    </script>

</body>
</html>



