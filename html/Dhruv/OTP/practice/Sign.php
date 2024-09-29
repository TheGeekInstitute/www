<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="" method="post">
        Full Name <input type="text" name="fullname">
        <br><br>
        Email : <input type="email" name="email">
        <br><br>
        Username : <input type="text" name="username">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Signup">
    </form>

    <?php
        require "../../../PHP/mail/mail.php";

        $conn=mysqli_connect("localhost",'root',"toor","Dhruv");

        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) ){

                    $fullname = $_POST['fullname'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST['email'];

                    $sql="SELECT `user_id`, `fullname`, `email`, `username`, `password` FROM `Mailing` WHERE `username`='$username' OR `email`='$email'"; 
                    $query=mysqli_query($conn,$sql);


              if($query){
                    if(mysqli_num_rows($query)==1){
                        $already=mysqli_fetch_assoc($query);
                        if($already['email']==$email){
                            echo 'already Email registered';
                        }
                        else{
                            echo "Username Already taken";
                        }
                    }
                    else{

                        $otp=mt_rand(11111,999999);
                        $valid_from=time();
                        $is_verified=0;
                       $sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`, `is_verified`) VALUES ('$fullname','$username','$email','$password','$is_verified')";
                       
                        $otp_sql="INSERT INTO `otp`(`otp`, `username`, `email`,`valid_from`) VALUES ('$otp','$username','$email','$valid_from')";

                        $msg="<h1>".$otp."</h1>";

                        if(mysqli_query($conn,$sql) && mysqli_query($conn,$otp_sql) && sendmail($email,'OTP Verification',$msg)){
                            // echo "Regstration Compeleted";
                            $_SESSION['username']=$username;
                            $_SESSION['email']=$email;
                            $_SESSION['verification']=true;
                            header("location:Login.php");
                        }


                    }

            }
            else{
                echo 'problem';
            }
                    
            }
            else{
                echo 'please enter the valid number or a field';
            }
            
        }
        else{
            echo 'server busy';
        }




    ?>

</body>
</head>