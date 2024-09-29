<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Login Page....</h1>
    <form action="">
        Email/username : <input type="text" name="login"><br><br>
        Password : <input type="password" name="password"><br><br>
                   <input type="submit"><br><br><br>

    </form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","toor","shivam");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['login'])){
        $login=$_POST['login'];
        if(!empty($_POST['password'])){
            $password=$_POST['password'];
            $sql="SELECT `name`, `username`, `email`, `password` FROM `users` WHERE `username`=? OR `email`=?";
            $login_stmt=mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($login_stmt,"ssss",$login,$login);
            mysqli_stmt_bind_result($login_stmt,$db_name,$db_username,$db_email,$db_passsword);
            mysqli_stmt_execute($login_stmt);
            mysqli_stmt_store_result($login_stmt);
            if(mysqli_stmt_num_rows($login_stmt)){
                if(password_verify($password,$db_password)){
                    echo "loggedin";
            }
            else{
                echo'INcorrect Possword';
            }
            mysqli_stmt_close($login_stmt);
        }
        else{
            echo'
            <script>
            alert("Password should Not Be Empty.");
            </script>';
        }

    }
    else{
        echo'
        <script>
        alert("Username/Email should Notye Be Empty.");
        </script>';
    }
}
}
?>