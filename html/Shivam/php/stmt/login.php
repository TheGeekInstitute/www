<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

        <h1>Login Page....</h1>
        Email : <input type="text" name="login"><br><br>
        Password : <input type="password" name="password"> <br><br>
        <input type="submit"><br><br>
    </form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","toor","shivam");
if($_SERVER['REQUEST_METHOD']=='POST'){
   if(!empty($_POST['login'])){
    $login=$_POST['login'];
    if(!empty($_POST['password'])){
        $password=$_POST['password'];
        $sql="SELECT `name`, `username`, `email`, `password` FROM `users` WHERE `username`=? OR `email`=?";
        $login_stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($login_stmt,"ss",$login,$login);   
        mysqli_stmt_bind_result($login_stmt,$db_name,$db_username,$db_email,$db_password);
        mysqli_stmt_execute($login_stmt);
        mysqli_stmt_store_result($login_stmt);
        if(mysqli_stmt_num_rows($login_stmt)==1){
            mysqli_stmt_fetch($login_satmt);
            if(password_verify($password,$db_password)){
                echo "loggedin";
            }
            else{
                echo "Incorrect password";
            }
        }
        else{
            echo "incorrect username/email";
        }
        mysqli_stmt_close($login_stmt);
    }
    else{
        echo "password Should Not be empty";
    }
   }
   else{
    echo "username/email Should Not be Empty";
   }
}
?>