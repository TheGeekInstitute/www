<?php
session_start();
require("db.php");
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
            $sql="SELECT * FROM `otp` WHERE `email`='$email' AND `username`='$username';";
            $query=mysqli_query($connection,$sql);
            $num=mysqli_num_rows($query);
            if($num==1){
                $data=mysqli_fetch_assoc($query);
                if($data['otp']==$form_otp){
                    $check_sql="SELECT * FROM `users`  WHERE `email`='$email' AND `username`='$username';";
                    $check_query=mysqli_query($connection,$check_sql);
                    $data=mysqli_fetch_assoc($check_query);
                    if($data['is_verified']==1){
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
                        $verify_sql="UPDATE `users` SET `is_verified`=1";
                        $verify_query=mysqli_query($connection,$verify_sql);
                        if($verify_query){
                            unset($_SESSION['otp']);
                            unset($_SESSION['first']);
                            unset($_SESSION['last']);
                            unset($_SESSION['username']);
                            unset($_SESSION['email']); 
                            session_destroy();
                            echo '
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
    <title>OTP Verification</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
      .verify{
        background-color: #cccc;
        padding: 60px;
        margin: 10%;
        text-align: center;
      }
input[type="number"]{
    padding: 12px;
    margin: 3px;
    font-size: 16px;

}

input[type="submit"]{
    padding: 12px;
    margin: 3px;
    width: 100px;
    font-size: 16px;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
p{
    font-weight:bolder;
    color: blue;
    padding:6px;
}
    </style>
</head>
<body>
<center>
    <div class="verify">
        <p>Hello!  <?php echo $first." ".$last; ?></p>
        <form action="./verify.php" method="post">
            <h1>Enter OTP</h1>
            <input type="number" name="otp" >
            <br>
            <input type="submit" value="Verify">
        </form>
    </div>
</center>
</body>
</html>