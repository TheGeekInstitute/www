<?php
session_start();
$connection=mysqli_connect("localhost","root","toor","shukla");
if(isset($_SESSION['signup']) && $_SESSION['signup']==true){
    $otp=$_SESSION['otp'];
    $first=$_SESSION['first'];
    $last=$_SESSION['last'];
    $username=$_SESSION['username'];
    $email=$_SESSION['email'];
}
else{
    header("location:signup.php");
}
if(isset($_POST['otp'])){
    if(!empty($_POST['otp'])){
        if(ctype_digit($_POST['otp']) && strlen($_POST['otp'])==6){
            $form_otp=$_POST['otp'];
            $sql="SELECT * FROM `otp` WHERE `email`='$email' AND `username`='$username'";
            $query=mysqli_query($connection,$sql);
            $num=mysqli_num_rows($query);
            if($num==1){
                $data=mysqli_fetch_assoc($query);
                if($data['otp']==$form_otp){
                    $check_sql="SELECT * FROM `register` WHERE `email`='$email' AND `username`='$username'";
                $check_query=mysqli_query($connection,$check_sql);
                    $data=mysqli_fetch_assoc($check_query);
                    if($data['is verified']==1){
                        unset($_SESSION['otp']);
                        unset($_SESSION['first']);
                        unset($_SESSION['last']);
                        unset($_SESSION['username']);
                        unset($_SESSION['email']);
                        session_destroy();
                        echo '
                        <script>
                        alert("Already Verified");
                        window.location.href="login.php";
                        </script>
                        ';
                    }else{
                        $verify_sql="UPDATE `register`SET `is_verified`=1";
                        $verify_query=mysqli_query($connection,$verify_sql);
                        if($verify_query){
                            unset($_SESSION['otp']);
                            unset($_SESSION['first']);
                            unset($_SESSION['last']);
                            unset($_SESSION['username']);
                            unset($_SESSION['email']);
                            session_destroy();
                            echo'
                            <script>
                            alert("Account Verified");
                            window.location.href="login.php";
                            </script>
                            ';
                        }
                        else{
                            echo '
                            <script>
                            alert("Server Busy Try After Some Time :(");
                            </script>
                            ';
                        }
                    }
                }
                else{
                    echo '
                    <script>
                    alert("Incorrect OTP");
                    </script>
                    ';
                }
            }
            else{
                echo '
                <script>
                    alert("Invalid REQUEST");
                </script>
                ';
            }
        }
        else{
            echo '
            <script>
            alert("Incorrect OTP");
            </script>
            ';
        }
    }
    else{
        echo '
        <script>
            alert("Please Enter OTP");
        </script>
        ';
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <div class="verify">
            <p>Hello! <?php echo $first." ".$last; ?></p>
            <form action="./verify.php" method="post">
                <h1>Enter OTP</h1>
                <input type="number" name="otp"><br>
                <input type="submit" value="Verify">
            </form>
        </div>
</center>
</body>
</html>