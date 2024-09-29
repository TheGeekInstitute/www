<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <form action="" method="POST">

        Username/Email : <input type="text" name="login">
    <br><br>
        Password : <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","toor","Shivank");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login=$_POST['login'];
        $password=$_POST['password'];
        $sql="SELECT * FROM `users` WHERE `username`='$login' OR `email`='$login'";
        $query=mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0){
            $data=mysqli_fetch_assoc($query);
            if(password_verify($password,$data['password'])){
                echo "Loggedin";
            }
            else{
        echo "Invalid Username And Password";
            }
        }
        else{
        echo "Invalid Username And Password";
        }
    }
    else{
        echo "Invalid Username And Password";
    }
}



?>