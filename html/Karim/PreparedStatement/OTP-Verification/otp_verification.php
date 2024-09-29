<?php
$error=false;
$msg="";
$color="";
require "../web/includes/_db.php";
require "../web/includes/_filter.php";
require "../web/includes/_functions.php";
require "../web/mail/mail.php";
session_start();
session_regenerate_id();

if(isset($_SESSION['username']) && isset($_SESSION['verify'])){
    $username=$_SESSION['username'];

    // echo $username;
    $sql="SELECT  `otp`  FROM `user_otp` WHERE `username`=?";
    $stmt=$connection->prepare($sql);
    $stmt->bind_param("s",$username);
    $stmt->bind_result($db_otp);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows==1){
        $stmt->fetch();

    }
    else{
        session_destroy();
        header("location:index.php");
    }

    $stmt->close();
}
else{
    session_destroy();
    header("location:index.php");
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['otp']) && !empty($_POST['otp']) && ctype_digit($_POST['otp'])){
        if(strlen($_POST['otp'])==6){
            $otp=mysqli_real_escape_string($connection,input_filter($_POST['otp']));

            if($otp==$db_otp){
                $is_verified=1;
                $sql="UPDATE `user_signup` SET `is_verified`=? WHERE `username`=?";
                $update_stmt=$connection->prepare($sql);
                $update_stmt->bind_param("is",$is_verified,$username);
                $update_stmt->execute();
                $update_stmt->store_result();
                if($update_stmt->affected_rows==1){
                    
                    $error=true;
                    $msg="Account Verification Completed <br> You can Login Now";
                    $color="green";
                    session_destroy();
                }
                else{
                    $error=true;
                    $msg="Server Busy Try After Some Time";
                    $color="red";
                }
            }
            else{
                $error=true;
                $msg="Invalid OTP";
                $color="red";
            }

            
        }
        else{
            $error=true;
            $msg="Invalid OTP";
            $color="red";
        }
    }
    else{
        $error=true;
        $msg="Please Enter OTP";
        $color="red";
    }

}

$connection->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            border: 2px solid black;
            width:20rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 150px auto;
            padding: 5px;
            border-radius: 10px;
        }

        .container p{
            font-size:  x-large;
            margin: 7px 0;
          
        }

        .container h1{
            margin:10px 0;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }



        .container form input{
            border: none;
            border: 1px solid black;
            border-width: 1px 1px 3px 1px;
            padding: 3px;
            font-size: large;
            width: 15rem;
            margin: 5px 0;
            outline: none;
        }

        .container form label{
            display: block;
            width: 15rem;
            font-size: large;
            /* margin: 5px 0; */
            font-weight: 900;
        }

        .container form input[type="submit"]{
            width: 10rem;
            background-color: royalblue;
            color: white;
            cursor: pointer;
            padding: 7px 0;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Account Verification</h1>
        <?php
        if($error){
            echo '
            <p style="color:'.$color.';">'.$msg.'</p>
            ';
        }
        ?>
        <form action="" method="POST">
            <label for="">Enter OTP</label>
            <input type="text" name="otp">
            <input type="submit" value="Verify">
            <!-- <input type="submit" value="Resend"> -->
        </form>
    </div>

</body>
</html>