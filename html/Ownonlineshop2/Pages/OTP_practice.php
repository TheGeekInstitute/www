<?php

define("FILE_INCLUDE",true);
include("../includes/_db.php");
include("../includes/_filter.php");
include("../includes/_functions.php");
include("../includes/mail/mail.php");

session_start();
session_regenerate_id();

if(!isset($_SESSION['fullname'])){
    $_SESSION['fullname']="";
}


if(!isset($_SESSION['email'])){
    $_SESSION['email']="";
}


if(!isset($_SESSION['mobile'])){
    $_SESSION['mobile']="";
}

$error=false;
$next=false;
$msg="";


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){

        if(strlen($_POST['fullname'])>=5 && strlen($_POST['fullname'])<=36 && preg_match('/^[a-zA-Z ]*$/',$_POST['fullname'])){
            $fullname=mysqli_real_escape_string($connection,input_filter($_POST['fullname']));
            $_SESSION['fullname']=$fullname;

            if(isset($_POST['email']) && !empty($_POST['email'])){

            if(strlen($_POST['fullname'])>=5 && strlen($_POST['fullname'])<=100 && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $email = mysqli_real_escape_string($connection,input_filter($_POST['email']));
                $_SESSION['email']=$email;

                if(isset($_POST['mobile']) && !empty($_POST['mobile'])){

                    if(ctype_digit($_POST['mobile']) && strlen($_POST['mobile'])==10){
                        $mobile = mysqli_real_escape_string($connection,input_filter($_POST['mobile']));
                        $_SESSION['mobile']=$mobile;


                        if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['cnfpassword']) && !empty($_POST['cnfpassword'])){

                            if($_POST['password']==$_POST['cnfpassword']){

                                if(strlen($_POST['password'])>=6 && strlen($_POST['password'])<=12){

                                    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                                    $next=true;
                                    $msg= 'hellow';
                          
                                    
                                }
                                else{
                                    $error=true;
                                    $msg="Password Should be min 6 and max 12 characters";
                             
                                }

                            }
                            else{
                                $error=true;
                                $msg="Password Not matched";
                         
                            }

                        }
                        else{
                            $error=true;
                            $msg="Password Should Not be Empty";
                        
                        }

                        

                    }
                    else{
                        
                        $error=true;
                        $msg="Invalid Mobile Number";
                        
                    }

                }
                else{
                    $error=true;
                    $msg="Mobile Number Should Not be ";
                    
                }

        }
        else{
            $error=true;
            $msg="Invalid Email Address";

        }

            }
            else{

                $error=true;
                $msg="Email Should not be Empty";
            }

        }
        else{
            $error=true;
            $msg="Invalid Fullname";
          
        }


     
        
    }
    else{
        $error=true;
        $msg="Fullname Should not be Empty";

    }
}


if($next==true){
   $start_sql="SELECT `email`, `mobile` FROM `user_signup` WHERE `email`=? OR `mobile`=?";
    $next_step=$connection->prepaer($start_sql);
    $next_step=bind_param("ss",$email,$mobile);
    $next_step=bind_result($db_email,$db_mobile);
    $next_step=execute();
    $next_step=store_result();
    if($next_step->num_rows==1){
        $next_step->fetch();
        if($email==$db_email){
            $error=true;
            $msg="Email Already registered";
            
        }
        else{
            $error=true;
            $msg="Mobile";
        }
    
       }
       else{

        $user_id=bin2hex(random_bytes(10));
        $is_verified=0;
        $insert_sql="INSERT INTO `user_signup`(`user_id`, `fullname`, `email`, `mobile`, `gender`, `password`, `is_verified`) VALUES (?,?,?,?,?,?,?)";
    
        $insert_stmt=$connection->prepare($insert_sql);
        $insert_stmt->bind_param("ssssssi",$user_id,$fullname,$email,$mobile,$gender,$password,$is_verified);
        $insert_stmt->execute();
        $insert_stmt->store_result();
        
    
        $otp=mt_rand(111111,999999);
        $valid_form=time();
        $otp_sql="INSERT INTO `user_otp`(`user_id`, `otp`, `valid_from`) VALUES (?,?,?)";
        $otp_stmt=$connection->prepare($otp_sql);
        $otp_stmt->bind_param("sis",$user_id,$otp,$valid_form);
        $otp_stmt->execute();
        $otp_stmt->store_result();
        if($otp_stmt->affected_rows==1 && $insert_stmt->affected_rows==1){
            if(sendmail($email,"OTP Verification",email_msg($email,$otp,$fullname,"verify")) && mobilesms($otp,$mobile)){
                $error=true;
                $msg ='OTP sent' ;
    
                
    
            }else{
                $error=true;
                $msg="Server busy";
               
            }
        }
        else{
            $error=true;
            $msg="Server busy";
          
           
        }
    
    
        $next_step->close();
        $otp_stmt->close();
        $insert_stmt->close();
    
       }
    
    }
    
        
       




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    fullname
    <input type="text" name="fullname"  value="<?php echo $_SESSION['fullname']; ?>">
    <br>
    Email
    <input type="text" name="email"  value="<?php echo $_SESSION['email']; ?>">
   <br>
   Mobile
    <input type="text" name="mobile"  value="<?php echo $_SESSION['mobile']; ?>">
    <br>
    Password
    <input type="text" name="password">
    <br>
    confirm Password
    <input type="text" name="cnf">
<br>
<button type="submit">Sign Up</button>





        




    </form>    

<?php
            if($error){
                echo '<div>'.$msg.'</div>';
            }
            
            ?>
</body>
</html>