<?php
require "includes/_db.php";
require "includes/_filter.php";
require "includes/_functions.php";
require "mail/mail.php";
session_start();
session_regenerate_id();

if(isset($_GET['token']) && !empty($_GET['token']) && ctype_xdigit($_GET['token']) && isset($_GET['email']) && filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)){
    
    $token=mysqli_real_escape_string($connection,input_filter($_GET['token']));
    $email=mysqli_real_escape_string($connection,input_filter($_GET['email']));

    $sql="SELECT  `is_verified` FROM `user_signup` WHERE `token`=? AND `email`=?";
    $stmt=$connection->prepare($sql);
    $stmt->bind_param("ss",$token,$email);
    $stmt->bind_result($db_is_verified);
    $stmt->execute();
    $stmt->store_result();
    
    if($stmt->num_rows==1){
        $stmt->fetch();
        if($db_is_verified==0){
            $is_verified=1;
            $update_sql="UPDATE `user_signup` SET `is_verified`=? WHERE `token`=? AND `email`=?";
            $update_stmt=$connection->prepare($update_sql);
            $update_stmt->bind_param("iss",$is_verified,$token,$email);
            $update_stmt->execute();
            $update_stmt->store_result();
            if($update_stmt->affected_rows==1){
                echo "account Verification Completed You can now login";
                echo "<br><a href='./login.php'> login</a>";
            }
            else{
                echo "Can Not Verify at This time Server Busy";
            }
            $update_stmt->close();


        }
        else{
            echo "Account Already Verified";
        }

    }
    else{
        session_destroy();
        header("location:login.php");
        die();
    }
    
    $stmt->close();
    


}
else{
    session_destroy();
    header("location:login.php");
    die();
}



?>