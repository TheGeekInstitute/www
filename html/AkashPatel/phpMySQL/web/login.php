<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
    <form action="" method="post">
        Username/Email : <input type="text" name="username">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
<?php
require "db.php";
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];
        
        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=$_POST['password'];
            
            $sql="SELECT `user_id`, `fullname`, `email`, `username`, `password` FROM `users` WHERE `username`='$username' OR `email`='$username'";
            $query=mysqli_query($conn,$sql);
            if($query){
                if(mysqli_num_rows($query)==1){
                    $data=mysqli_fetch_assoc($query);

                    if($data['password']==$password){
                        $_SESSION['username']=$data['username'];
                        $_SESSION['fullname']=$data['fullname'];
                        header("location:main.php");
                    }
                    else{
                        echo "Incorrect Password";
                    }
                }
                else{
                    echo "User Not Found";
                }
            }
             
        }
        else{
            echo "Please Enter Password";
        }

    }
    else{
        echo "Please Enter Username/Email";
    }
}

?>



</body>
</html>