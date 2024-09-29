<?php
$conn=mysqli_connect("localhost","root","toor","hema");

if(isset($_GET['email']) && !empty($_GET['email']) && filter_var($_GET['email'],FILTER_VALIDATE_EMAIL) && isset($_GET['token']) && !empty($_GET['token'])){
    $email=$_GET['email'];
    $token=$_GET['token'];

    $sql="SELECT `is_verified` FROM `user_signup` WHERE `email`=? AND `token`=?";

    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ss",$email,$token);
    $stmt->bind_result($db_is_verified);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows == 1){
        $stmt->fetch();

        if($db_is_verified==0){
                $is_verified=1;

                $update_sql="UPDATE `user_signup` SET `is_verified`=? WHERE `email`=?";
                $update_stmt=$conn->prepare($update_sql);
                $update_stmt->bind_param("is",$is_verified,$email);
                $update_stmt->execute();
                $update_stmt->store_result();
                if($update_stmt->affected_rows==1){
                    echo "Account Verification Completed";
                }
                else{
                    echo "Server Busy";
                }

        }
        else{
            echo "Account Already Verified <br>Your Can Now Login";
        }
        
    }
    else{
        header("location:index.php");
        die();
    }
   

}
else{
    header("location:index.php");
    die();
}

?>