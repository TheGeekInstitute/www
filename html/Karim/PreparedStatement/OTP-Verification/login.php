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

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=mysqli_real_escape_string($connection,input_filter($_POST['username']));
        
        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=mysqli_real_escape_string($connection,$_POST['password']);

            $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password`, `is_verified` FROM `user_signup` WHERE `username`=? OR `email`=?";
            $check_stmt=$connection->prepare($sql);
            $check_stmt->bind_param("ss",$username,$username);
            $check_stmt->bind_result($db_user_id,$db_fullname,$db_username,$db_email,$db_password,$db_is_verified);
            $check_stmt->execute();
            $check_stmt->store_result();
            if($check_stmt->num_rows==1){
                $check_stmt->fetch();

                if(password_verify($password,$db_password)){

                    if($db_is_verified==1){
                        echo "loggedin";
                    }
                    else{
                        $otp=mt_rand(111111,999999);
                        sendmail($email,"Account Verification",email_otp($db_fullname,$db_email,$otp,"verify"));
                        $_SESSION['username']=$db_username;
                        $_SESSION['verify']=true;
                        header("location:otp_verification.php");
                    }

                }
                else{
                    $error=true;
                    $color="red";
                    $msg="Incorrect Password";
                }

            }
            else{
                $error=true;
                $color="red";
                $msg="User Not Found";
            }

            $check_stmt->close();


        }
        else{
            $error=true;
            $color="red";
            $msg="Please Enter Password";
        }
    }
    else{
        $error=true;
        $color="red";
        $msg="Please Enter Username";
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
        <h1>Regstration Form</h1>
        <?php
        if($error){
            echo '
            <p style="color:'.$color.';">'.$msg.'</p>
            ';
        }
        ?>
        <form action="" method="POST">
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
            <a href="./reset_password.php">Reset Password</a>
        </form>
    </div>

</body>
</html>