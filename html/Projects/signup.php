<?php
define("FILE_INCLUDE",true);
require "config/_filters.php";
require "config/_dbConfig.php";
require "config/_functions.php";
require "config/_extras.php";
session_name('OwnOnlineShop');
session_start();
session_regenerate_id();
// session_destroy();

if(isset($_SESSION['login']) && $_SESSION['login']==true){
    header("location:index.php");
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

$fullname=$email=$mobile=$gender=$password="";
$fullname_err=$email_err=$mobile_err=$gender_err=$password_err=$signup=false;
$fullname_msg=$email_msg=$mobile_msg=$gender_msg=$password_msg="";
$fullname_i=$email_i=$mobile_i=$gender_i=$password_i=false;
$_SESSION['login']=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    #fullname start
    if(isset($_POST['csrf_token']) && !empty($_POST['csrf_token']) && isset($_SESSION['csrf_token']) && $_SESSION['csrf_token']==$_POST['csrf_token']){
      
        if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        
            if(preg_match('/^[a-zA-Z ]*$/',$_POST['fullname'])){
                $fullname=ucwords(mysqli_real_escape_string($connection,input_filter($_POST['fullname'])));
                    $fullname_i=true;
                    $_SESSION['fullname']=$fullname;
            }
            else{
                $fullname_err=true;
                $fullname_msg="Only Letters and Spaces Allowed !";
                unset($_SESSION['fullname']);
            }
            
            
        }
        else{
            $fullname_err=true;
            $fullname_msg="Full Name Should Not Be Empty !";
            unset($_SESSION['fullname']);
        }
        #fullname end
    
        
        #email validation start
        if(isset($_POST['email']) && !empty($_POST['email'])){
            if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==true){
                $email=strtolower(mysqli_real_escape_string($connection,input_filter($_POST['email'])));
                $email_i=true;
                $_SESSION['email']=$email;
            }
            else{
                $email_err=true;
                $email_msg="Invalid E-Mail Address !";
                unset($_SESSION['email']);
            }
    }
    else{
        $email_err=true;
        $email_msg="Email Should Not Be Empty !";
        unset($_SESSION['email']);
    }
        #email validation end
    
        if(isset($_POST['mobile']) && !empty($_POST['mobile'])){
            if(ctype_digit($_POST['mobile']) && strlen($_POST['mobile'])==10 && $_POST['mobile']>=6666666666 && $_POST['mobile']<10000000000){
                $mobile=mysqli_real_escape_string($connection,input_filter($_POST['mobile']));
                $_SESSION['mobile']=$mobile;
                $mobile_i=true;
            }
            else{
                $mobile_err=true;
                $mobile_msg="Invalid Mobile Number !";
                unset($_SESSION['mobile']);
            }
    
    
        }
        else{
        $mobile_err=true;
        $mobile_msg="Mobile Number Should Not Be Empty !";
        unset($_SESSION['mobile']);
        }
    
        if(isset($_POST['gender']) && !empty($_POST['gender']) && in_array($_POST['gender'],["Male","Female","Others"])){
            $gender=mysqli_real_escape_string($connection,$_POST['gender']);
            $_SESSION['gender']=$gender;
            $gender_i=true;
        
        }
        else{
            $gender_err=true;
            $gender_msg="Please Choose a Gender !";
            unset($_SESSION['gender']);
        }
    
        if(isset($_POST['password']) && !empty($_POST['password'])){
            if(strlen($_POST['password'])>=8 && strlen($_POST['password'])<=32){
                $_SESSION['password']=$_POST['password'];
                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                $password_i=true;
            }
            else{
                $password_err=true;
                $password_msg="Password Should be Minimum 8 and Maximum 32 Characters !";
                unset($_SESSION['password']);    
            }
        }
        else{
            $password_err=true;
            $password_msg="Password Should Not be Empty !";
            unset($_SESSION['password']);
        }
    //validation end
    
    
    //regstration Process
    
    if($fullname_i && $email_i && $mobile_i && $gender_i && $password_i){
       $otp=mt_rand(100000,999999);
       $is_verified=0;
    
       $user_check_sql="SELECT  `email`, `mobile_number` FROM `users_signup` WHERE  `email`=? OR `mobile_number`=?";
    
       $user_check_stmt=$connection->prepare($user_check_sql);
       $user_check_stmt->bind_param("si",$email,$mobile);
       $user_check_stmt->bind_result($db_email,$db_mobile);
       $user_check_stmt->execute();
       $user_check_stmt->store_result();
       if($user_check_stmt->num_rows()==0){
        //insert Query
        $signup=true;
    
       }
       else{
        $user_check_stmt->fetch();
            if($db_email==$email){
                $email_err=true;
                $email_msg="Email Address Already Registered !";
                unset($_SESSION['email']); 
            }
            else{
                $mobile_err=true;
                $mobile_msg="Mobile Number Already Registered";
                unset($_SESSION['mobile']); 
            }
            $user_check_stmt->close();
       }
    }
    
    
    //Signup Process
    if($signup==true){
        //OTP section
        $mobile_otp=mt_rand(100000,999999);
        $email_otp=mt_rand(100000,999999);
        $current_time=time();
        $expiry_time=time_plus(30);
        $otp_for="Registration Verification";
        $otp_sql="INSERT INTO `signup_otp`(`mobile_otp`,`email_otp`, `valid_from`, `valid_upto`,`otp_for`,`email`,`mobile_number`) VALUES (?,?,?,?,?,?,?)";
        $otp_insert_stmt=$connection->prepare($otp_sql);
        $otp_insert_stmt->bind_param("iisssss",$mobile_otp,$email_otp,$current_time,$expiry_time,$otp_for,$email,$mobile);
        
        //USER Section
        $use_id=bin2hex(random_bytes(10));
        $is_verified=0;
        $user_insert_sql="INSERT INTO `users_signup`(`user_id`, `fullname`, `email`, `mobile_number`, `gender`, `password`, `is_verified`) VALUES (?,?,?,?,?,?,?)";
        $user_insert_stmt=$connection->prepare($user_insert_sql);
        $user_insert_stmt->bind_param("ssssssi",$use_id,$fullname,$email,$mobile,$gender,$password,$is_verified);
        if($user_insert_stmt->execute() && $otp_insert_stmt->execute() && mobile_otp($mobile_otp,$mobile,"Verify","otp") && email_otp($email,"OTP Verification",email_messege("verify",$fullname,$email_otp))){
            if($user_insert_stmt->affected_rows==1 && $otp_insert_stmt->affected_rows==1){
                unset($_SESSION['fullname']);
                unset($_SESSION['mobile']);
                unset($_SESSION['gender']);
                unset($_SESSION['password']);
                $_SESSION['verify']=true;
                $verify_token=encrypt($email,"user_verification");
                setcookie("verify_token",$verify_token,time()+86400,"/");
                header("location:otp_verification.php?vcode=" . bin2hex($verify_token));
                //verify page
            }
            else{
                echo '<script>
                alert("User Already Registered"); 
                    </script>';
            }
        }
        else{
            echo '<script>
            alert("Can not Send OTP Server Busy !"); 
                </script>';
        }

    }

    }
    else{
        echo '<script>
            alert("Invalid Request !"); 
        </script>';
    }
}

?>
    <div class="wrapper">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <h1>Sign up</h1>
            <label class="field">Full Name <span>*</span> </label>
            <input type="text" placeholder="Jon Doe" name="fullname"
            value="<?php
            if(isset($_SESSION['fullname']) && !empty($_SESSION['fullname'])){
                echo $_SESSION['fullname'];
            }
            ?>"
            >
            
            <?php if($fullname_err==true){ echo '<label class="msg">'.$fullname_msg.'</label>';} ?>

            <label class="field">Email <span>*</span></label>
            <input type="text" name="email"  placeholder="email@example.com"
            value="<?php
            if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
                echo $_SESSION['email'];
            }
            ?>"
            >
            <?php if($email_err==true){ echo '<label class="msg">'.$email_msg.'</label>';} ?>


            <label class="field">Mobile <span>*</span></label>
            <input type="number" placeholder="9988776655" name="mobile"
            value="<?php
            if(isset($_SESSION['mobile']) && !empty($_SESSION['mobile'])){
                echo $_SESSION['mobile'];
            }
            ?>"
            >
            <?php if($mobile_err==true){ echo '<label class="msg">'.$mobile_msg.'</label>';} ?>


            <label class="field">Gender <span>*</span></label>
            <select name="gender" >
                <option value="">Choose</option>

                <option value="Male" <?php
            if(isset($_SESSION['gender']) && !empty($_SESSION['gender']) && $_SESSION['gender']=="Male"){ echo "selected"; } ?>>Male</option>
                <option value="Female"
                <?php
            if(isset($_SESSION['gender']) && !empty($_SESSION['gender']) && $_SESSION['gender']=="Female"){
                echo "selected";
            }
            ?>
                >Female</option>
                <option value="Others"
               <?php
            if(isset($_SESSION['gender']) && !empty($_SESSION['gender']) && $_SESSION['gender']=="Others"){
                echo "selected";
            }
            ?>
                >Others</option>
            </select>
            <?php if($gender_err==true){ echo '<label class="msg">'.$gender_msg.'</label>';} ?>
            <label class="field">Password <span>*</span></label>
            <input type="password" name="password" placeholder="Minium 8 Characters"
            value="<?php
            if(isset($_SESSION['password']) && !empty($_SESSION['password'])){echo $_SESSION['password'];}
            ?>">
            <?php if($password_err==true){ echo '<label class="msg">'.$password_msg.'</label>';} ?>

            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']=bin2hex(random_bytes(20)); ?>">
            <input type="submit" value="Sign Up">
            <!-- <input type="reset"> -->
               <p>Already Have an Account. <a href="./login.php">Login</a></p>    
        </form>
    </div>
</body>
</html>
