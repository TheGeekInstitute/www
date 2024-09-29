<?php

require "../../PHP/mail/mail.php";
session_start();

$expired=false;

$verification=false;
$conn=mysqli_connect("localhost",'root',"toor","Dhruv");
if(isset($_SESSION['username']) && isset($_SESSION['email']) && $_SESSION['verification']==true){
$username=$_SESSION['username'];
$email=$_SESSION['email'];

$sql="SELECT `user_id`, `fullname`, `username`, `email`, `password`, `is_verified` FROM `users` WHERE `email`='$email' AND `username`='$username'";

$otp_sql="SELECT `otp_id`, `otp`, `username`, `email`, `valid_from` FROM `otp` WHERE `email`='$email' AND `username`='$username'";

$user_query=mysqli_query($conn,$sql);
$otp_query=mysqli_query($conn,$otp_sql);

if($user_query && $otp_query){

    if(mysqli_num_rows($user_query) ==1 && mysqli_num_rows($otp_query)==1){

        $user_data=mysqli_fetch_assoc($user_query);
        $otp_data=mysqli_fetch_assoc($otp_query);
        $verification=true;


    }
    else{
        session_destroy();
        header("location:login.php");
    }


}
else{
    session_destroy();
    header("location:login.php");
}

   

}
else{
    session_destroy();
    header("location:login.php");
}


if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['verify'])){
    if(isset($_POST['otp']) && !empty($_POST['otp'])){

        if(strlen($_POST['otp'])==6){
            $otp=$_POST['otp'];
            if($verification==true && $user_data['username']==$otp_data['username']){

                if($otp_data['otp']==$otp){

                    if((time()-$otp_data['valid_from'])<=1800){

                        if($user_data['is_verified']==0){
                            $is_verified=1;
                            $user_sql="UPDATE `users` SET `is_verified`='$is_verified' WHERE `email`='$email' AND `username`='$username'";
                            $otp_sql="DELETE FROM `otp` WHERE  `email`='$email' AND `username`='$username'";
                            
                            if(mysqli_query($conn,$user_sql) && mysqli_query($conn,$otp_sql)){

                                echo "Verification Completed You can now Login";
                                session_destroy();

                            }
                            else{
                                echo "server Busy";
                            }


                        }
                        else{
                            echo "Account Already verified";
                        }

                    }
                    else{
                        echo "Otp Expired";
                        $expired=true;


                    }


                }
                else{
                    echo "Incorrect OTP";
                }

                


            }
            else{
                session_destroy();
                header("location:login.php");
            }


        }
        else{
            echo "Invalid OTP";
        }

    }
    else{
        echo "Please Enter OTP";
    }

  }


//resend

if(isset($_POST['resend'])){
    $new_otp=mt_rand(111111,999999);
    $valid_from=time();

    $update_sql="UPDATE `otp` SET `otp`='$new_otp', `valid_from`='$valid_from' WHERE `email`='$email' AND `username`='$username' ";

    
    $msg="<h1>".$new_otp."</h1>";

    if(sendmail($email,'OTP Verification',$msg) && mysqli_query($conn,$update_sql)){
        echo "New OTP Has Beend Sended";
    }
    else{
        echo "Server Busy";
    }

}



}
//resend







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>
    <?php
    echo "hi, " . $user_data['fullname'];
    ?>
    Please Enter OTP to Verify Account
</h1>

    
<form action="" method="POST">
    <input type="number" name="otp" placeholder="Enter OTP">
    <input type="submit" value="verify" name="verify">
    <?php
    if($expired){
        echo '<input type="submit" value="Resend" name="resend">';
    }

    ?>
</form>
</body>
</html>