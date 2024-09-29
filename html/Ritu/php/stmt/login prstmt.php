<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login pr.stmt</title>
</head>
<body>
    <h1>Login...</h1>
    <fieldset>
        <legend>Login..</legend>
        <form method="post">
            Username/Email: <input type="text" name="username" placeholder="Please Enter Your Username/Email">
            <br><br>
            Password: <input type="text" name="password"placeholder="Please Enter Your Password ">
            <br><br>
            <input type="submit" value="login">
        </form>

    </fieldset>
    
</body>
</html>


<?php
$conn=mysqli_connect("localhost","root","toor","Ritu");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['username'])){
        $login=$_POST['username'];
          if(!empty($_POST['password'])){
            $password=$_POST['password'];
            $sql="SELECT `fullname`,`username`,`email`,`password` FROM `users` WHERE `username`=? OR `email`=?";
            $stmt=mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($stmt,"ss",$login,$login);
            mysqli_stmt_bind_result($stmt,$db_fullname,$db_username,$db_email,$db_password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)==1){
                mysqli_stmt_fetch($stmt);
                if(password_verify($password,$db_password)){
                    echo "loggedin";
                }
                else{
                    echo "incorrect Password";
                }
            }
            else{
                echo "incorrect Username/email";
            }
            
          }
          else{
            echo "Password should not be empty";
          }
    }
    else{
        echo "Username should not be empty";
    }
}
mysqli_close($conn);
?>