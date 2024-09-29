<?php

session_start();
session_regenerate_id();
$msg="";
$conn=mysqli_connect("localhost","root","toor","SANDEEP");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];

        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=$_POST['password'];

            $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `users` WHERE `username`='$username' OR   `email`='$username'";



            $qurry=mysqli_query($conn,$sql);
            if($qurry){

                if(mysqli_num_rows($qurry)==1){
                    $data=mysqli_fetch_assoc($qurry);
                    if($password==$data['password']){
                        $_SESSION['fullname']=$data['fullname'];
                        $_SESSION['username']=$data['username'];
                        header("location:main.php");
                    }
                    else{
                        $msg="incorrect password";
                    }

                }
                else{
                    $msg="User Not Found";
                }
                



            }
              else{
            $msg="Server Busy";
            }


        }
        else{
            $msg="Please Enter Password";
        }
    }

           else{
                $msg="Please Enter Username or Email";
                }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="conatiner">
        
        <h1>login Form</h1>
        <?php echo $msg; ?>

        <br><br>
        <form action="" METHOD="POST">
            <label for="">Username/Email </label>
            <input type="text" name="username">
            <br><br>
            <label for="">Password</label>
            <input type="Password" name="password">
            <br><br>
            <input type="submit" value="Login">
        </form>
        <a href="./index.php">Signup</a>
    </div>
</body>
</html>
