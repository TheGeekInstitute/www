
<?php
session_start();
$conn=mysqli_connect("localhost","root","toor","Suruchi");
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];

        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=$_POST['password'];

            $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `users` WHERE `username`='$username' OR  `email`='$username'";


            $query=mysqli_query($conn,$sql);
            if($query){

                if(mysqli_num_rows($query)==1){
                    $data=mysqli_fetch_assoc($query);
                   
                    if($data['password']==$password){
                        $_SESSION['fullname']=$data['fullname'];
                        $_SESSION['username']=$data['username'];
                        header("location:main.php");

                    }
                    else{
                        $msg="Incorrect Password";
                    }

                }
                else{
                    $msg="USer Not Found";
                }

                

            }
            else{
                $msg="Server Busy";
            }


        }
        else{
            $msg="Please Enter password";
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
<div class="container">
        <h1>Login Form</h1>

        <?php echo $msg; ?>

        <br><br>
        <form action="" method="POST">
            <label for="">Username/Email </label>
            <input type="text" name="username">
            <br><br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="Login">
        </form>
        <a href="./index.php">Signup</a>
    </div>
</body>
</html>
