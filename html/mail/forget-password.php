<?php
define('MAIL',true);
require('db.php');
session_start();
session_regenerate_id();
$token=bin2hex(random_bytes(16));
$updatepass=false;
// $dbemail=$dbname="";
$mailed_from="no-reply@m3mail.local";
$subject="Forget Password";
if(isset($_POST['email'])){
    $email=mysqli_real_escape_string($conn,input_filter($_POST['email']));
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $sql="SELECT `email`,`name` FROM `users` WHERE `email`=?;";
        $forget_stmt=$conn->prepare($sql);
        $forget_stmt->bind_param("s",$email);
        $forget_stmt->bind_result($dbemail,$dbname);
        $forget_stmt->execute();
        $forget_stmt->store_result();
        if($forget_stmt->num_rows==1){
            $forget_stmt->fetch();
            $forget_stmt->close();
            $mail="Hi, ". $dbname . " Open Link in your Browser in order to reset your password : ". "http://m3mail.local/forget-password.php?email=".$email."&token=".$token;
            $sql="INSERT INTO `token`(`token`) VALUES ('$token');";
            if($conn->query($sql)){
                $sql1="INSERT INTO `inbox`(`email`, `mailed_from`, `subject`, `mail`) VALUES (?,?,?,?);";
                $inbox_stmt=$conn->prepare($sql1);
                $inbox_stmt->bind_param("ssss",$email,$mailed_from,$subject,$mail);
                $inbox_stmt->execute();
                echo '<script>
                alert("Reset Password Link has Been Sended to your Email '.$email.'");
                </script>';
            }

        }
        else{
            echo '
            <script>
                alert("Account Not Found !");
            </script>
            ';
        }
    }
    else{
        echo '
        <script>
            alert("Invalid Email !");
        </script>
        ';
    }
}


if(isset($_GET['email']) && isset($_GET['token']) && !empty($_GET['email']) && !empty($_GET['token'])){
    $email=mysqli_real_escape_string($conn,input_filter($_GET['email']));
    $token=mysqli_real_escape_string($conn,input_filter($_GET['token']));
    $sql="SELECT `token` FROM `token` WHERE `token`=?;";
    $sql1="SELECT `email` FROM `users` WHERE `email`=?;";
    $token_stmt=$conn->prepare($sql);
    $token_stmt->bind_param("s",$token);
    $token_stmt->execute();
    $token_stmt->store_result();
    if($token_stmt->num_rows==1){
        $token_stmt->close();
        $email_stmt=$conn->prepare($sql1);
        $email_stmt->bind_param("s",$email);
        $email_stmt->bind_result($dbemail);
        $email_stmt->execute();
        $email_stmt->store_result();
        if($email_stmt->num_rows==1){
            $email_stmt->fetch();
            $email_stmt->close();
            $updatepass=true;
        }
    }
}

//updating pass

if(isset($_POST['newpass']) && isset($_POST['cnewpass']) && isset($_POST['nemail'])){
    if($_POST['newpass']==$_POST['cnewpass']){
        $pass=password_hash(mysqli_real_escape_string($conn,input_filter($_POST['newpass'])),PASSWORD_BCRYPT);
        $email=mysqli_real_escape_string($conn,input_filter($_POST['nemail']));
        $sql="UPDATE `users` SET `password`=? WHERE `email`=?;";
        $update_stmt=$conn->prepare($sql);
        $update_stmt->bind_param("ss",$pass,$email);
        $update_stmt->execute();
        $update_stmt->store_result();
        if($update_stmt->affected_rows>0){
            echo '
            <script>
                alert("Password Has Been Changed !");
            </script>
            ';
        }
    }
    else{
        echo '
        <script>
            alert("Please Enter Same Password in Both Fields !");
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
    <title>M3-Mail | Forget-Password</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="images/email.png" type="image/x-icon">
</head>

<body>
    <div class="m3-mail">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="container">
            <h1>Forget Password</h1>
<?php 
if($updatepass==true){
    echo '
    <input type="hidden" name="nemail" value="'.$dbemail.'">
    <input type="text" name="newpass">
    <label><span>New Password</span></label>    
    <input type="text" name="cnewpass">
    <label><span>Confirm New Password</span></label>
    <button type="submit">UPDATE</button>
    ';
}
else{
    echo '
    <input type="text" name="email">
    <label><span>Email</span></label>
    <button type="submit">GO</button>
    ';
}


?>
            <p>Don't have an account? <a href="./login.php">Login</a></p>
            <pre>Powered By M3-Mail</pre>
          </div>
</form>
    </div>
</body>

</html>