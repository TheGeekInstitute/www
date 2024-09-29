<?php
define('MAIL',true);
session_start();
session_regenerate_id();
require('db.php');
if(isset($_POST['email']) && isset($_POST['password'])){
    if(!empty($_POST['email'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $email=mysqli_real_escape_string($conn,input_filter($_POST['email']));
            if(!empty($_POST['password'])){
                $password=mysqli_real_escape_string($conn,$_POST['password']);
                $sql="SELECT `name`,`email`,`password` FROM `users` WHERE `email`=?;";
                $login_stmt=$conn->prepare($sql);
                $login_stmt->bind_param("s",$email);
                $login_stmt->bind_result($dbname,$dbemail,$dbhash);
                $login_stmt->execute();
                $login_stmt->store_result();
                if($login_stmt->num_rows==1){
                    $login_stmt->fetch();
                    if(password_verify($password,$dbhash)){
                        $login_stmt->close();
                        $_SESSION['name']=$dbname;
                        $_SESSION['email']=$dbemail;
                        $_SESSION['login']=true;
                        header("location:inbox.php");
                    }
                    else{
                        echo '
                        <script>
                            alert("Incorrect Password !");
                        </script>
                        ';
                    }
                }
                else{
                    echo '
                    <script>
                        alert("Email Address Not Found !");
                    </script>
                    ';
                }
            }
            else{
                echo '
                <script>
                    alert("password Should Not be Empty !");
                </script>
                ';
            }
        }
        else{
            echo '
            <script>
                alert("Invalid Email Address !");
            </script>
            ';
        }
    }
    else{
        echo '
        <script>
            alert("Email Should Not be Empty !");
        </script>
        ';
    }
}
if(isset($_GET['logout'])==1){
    // session_unset('name');
    // session_unset('email');
    // session_unset('login');
    session_destroy();
    
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3-Mail | Login-Account</title>
    <link rel="shortcut icon" href="images/email.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="m3-mail">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="container">
            <h1>Login Account</h1>
            <input type="text" name="email">
            <label><span>Email</span></label>
            <input type="password" name="password">
            <label><span>Password</span></label>
            <button type="submit">GO</button>
            <p>Forget Password? <a href="forget-password.php">Click</a></p>
            <pre>Powered By M3-Mail</pre>
          </div>
          <from>  
    </div>
</body>

</html>