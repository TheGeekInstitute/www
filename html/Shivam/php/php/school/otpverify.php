<?php
session_start();
require("database.php");
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
            $sql="SELECT * FROM `otp` WHERE `email`='$email' AND `username`='$username' ORDER BY `otp_id` DESC LIMIT 1";
            $query=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($query);
            if($num==1){
                $data=mysqli_fetch_assoc($query);
                if($data['otp']==$form_otp){
                    //not running check sql 
                    $check_sql="SELECT * FROM `users` WHERE `email`='$email' AND `username`='$username' ";
                    $check_query=mysqli_query($conn,$check_sql);
                    $data=mysqli_fetch_assoc($check_query);
                    if($data['is_verified']==1){
                        unset($_SESSION['otp']);
                        unset($_SESSION['first']);
                        unset($_SESSION['last']);
                        unset($_SESSION['email']);
                        unset($_SESSION['username']);
                        session_destroy();
                        echo '
                            <script>
                            alert("Account Verified");
                            window.location.href="login.php";
                            </script>
                            '; 
                    }
                    else{
                        $verify_sql="UPDATE `users` SET `is_verified`=1 WHERE `username`='$username' AND `email`='$email'";
                        $verify_query=mysqli_query($conn,$verify_sql);
                        if($verify_query){
                            
                        unset($_SESSION['otp']);
                        unset($_SESSION['first']);
                        unset($_SESSION['last']);
                        unset($_SESSION['email']);
                        unset($_SESSION['username']);
                        session_destroy();
                        echo '
                            <script>
                            alert("Account Verified");
                            window.location.href="login.php";
                            </script>
                            '; 

                        }
                    }


                }
                else{
                    echo '
                        <script>
                        alert("Incorrect OTP1");
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
            echo'
            <script>
            alert("Incorrect OTP2");
            </script>';
        }
        

        
    }
    
    
        
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Varification...</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .verify{
            background-color: #cccc;
            padding: 60px;
            margin: 10%;
        }
        input[type="number"]{
            padding: 15px;
            margin: 3px;
            font-size: 16px;
        }
        input[type="submit"]{
            padding: 15px;
            margin: 3px;
            width: 110px;
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
            <p><?php echo $first." ".$last; ?></p>
    <h1>Enter Your OTP</h1>
    <form action="./otpverify.php" method="POST">
    <input type="number" name="otp"><br><br>
    <input type="submit" value="Verify">
    <br><br>
    </form>
        </div>
    </center>
    
</body>
</html>