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
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        if(strlen($_POST['fullname'])>=5 && strlen($_POST['fullname'])<=60){
            $fullname=mysqli_real_escape_string($connection,input_filter($_POST['fullname']));

           
            if(isset($_POST['username']) && !empty($_POST['username'])){
                if(strlen($_POST['username'])>=5 && strlen($_POST['username'])<=10){
                    
                    $username=mysqli_real_escape_string($connection,input_filter($_POST['username']));

                    if(isset($_POST['email']) && !empty($_POST['email'])){
                        if(strlen($_POST['email'])>=10 && strlen($_POST['email'])<=100 && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

                            $email=mysqli_real_escape_string($connection,input_filter($_POST['email']));

                            if(isset($_POST['password']) && !empty($_POST['password'])){

                                if(strlen($_POST['password'])>=4 && strlen($_POST['fullname'])<=20){

                                    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                                    // $password=$_POST['password'];


                                    //database
                                    $sql="SELECT `username`, `email` FROM `user_signup` WHERE `username`=? OR `email`=?";
                                    $check_stmt=$connection->prepare($sql);
                                    $check_stmt->bind_param("ss",$username,$email);
                                    $check_stmt->bind_result($db_username,$db_email);
                                    $check_stmt->execute();
                                    $check_stmt->store_result();
                                    if($check_stmt->num_rows==1){
                                        $check_stmt->fetch();

                                        if($db_username==$username){
                                            $error=true;
                                            $color="red";
                                            $msg="Username Already Taken";
                                        }
                                        else{
                                            $error=true;
                                            $color="red";
                                            $msg="Email Already registered";
                                        }
                                    }
                                    else{
                                        //insert
                                        $insert_sql="INSERT INTO `user_signup`(`fullname`, `username`, `email`, `password`, `is_verified`, `token`) VALUES (?,?,?,?,?,?)";
                                        $is_verified=0;
                                        $token=bin2hex(random_bytes(20));

                                        $otp=mt_rand(111111,999999);
                                        $valid_from=time();
                                        $otp_sql="INSERT INTO `user_otp`(`otp`, `username`, `email`, `valid_from`) VALUES (?,?,?,?)";
                                        $otp_stmt=$connection->prepare($otp_sql);
                                        $otp_stmt->bind_param("isss",$otp,$username,$email,$valid_from);
                                        $otp_stmt->execute();
                                        $otp_stmt->store_result();

                                        $insert_stmt=$connection->prepare($insert_sql);
                                        $insert_stmt->bind_param("ssssis",$fullname,$username,$email,$password,$is_verified,$token);
                                        $insert_stmt->execute();
                                        $insert_stmt->store_result();
                                        if($insert_stmt->affected_rows==1 && $otp_stmt->affected_rows==1){
                                            if(sendmail($email,"Account Verification",email_otp($fullname,$email,$otp,"verify"))){
                                                // $error=true;
                                                // $color="green";
                                                // $msg="Regstration Completed <br>Check Your Email To Verify your Account";
                                                $_SESSION['username']=$username;
                                                $_SESSION['verify']=true;
                                                header("location:otp_verification.php");
                                            }
                                            else{
                                                $error=true;
                                                $color="red";
                                                $msg="Try After Some Time Server Busy";
                                            }
                                        }
                                        else{
                                            $error=true;
                                            $color="red";
                                            $msg="Try After Some Time Server Busy";
                                        }
                                        $insert_stmt->close();
                                        $otp_stmt->close();


                                    }
                                   
                                    $check_stmt->close();



                                   

                                }
                                else{
                                    $error=true;
                                    $color="red";
                                    $msg="password Should Be min 4 and max 20 chars";
                                }

                            }
                            else{
                                $error=true;
                                $color="red";
                                $msg="Please Password";
                            }
                        }
                        else{
                            $error=true;
                            $color="red";
                            $msg="Invalid Email";
                        }
                    }
                    else{
                        $error=true;
                        $color="red";
                        $msg="Please Enter Email";
                    }


                }
                else{
                    $error=true;
                    $color="red";
                    $msg="Invalid Username";
                }

            }
            else{
                $error=true;
                $color="red";
                $msg="Please Enter Username";
            }

        }
        else{
            $error=true;
            $color="red";
            $msg="Invalid Full Name";
        }

    }
    else{
        $error=true;
        $color="red";
        $msg="Please Enter Full Name";
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
            <label for="">Full Name</label>
            <input type="text" name="fullname">
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Email</label>
            <input type="email" name="email">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Signup">
            <a href="./login.php">Login</a>
        </form>
    </div>

</body>
</html>