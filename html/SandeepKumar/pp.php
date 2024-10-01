<?php

$msg="";
$conn=mysqli_connect("localhost","root","toor","SANDEEP");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];

        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email=$_POST['email'];

                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

                    $sql="SELECT `username`, `email`, `password` FROM `users` WHERE `username`='$username' OR `email`='$email'";
                    
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        if(mysqli_num_rows($query)>0){
                            $data=mysqli_fetch_assoc($query);
                             if($data['username']==$username){
                                $msg="Username Already Taken";
                            }
                            else{
                                $msg="Email Already Registered";
                            }
                        }
                        else{
                        
                            $sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
                            $query=mysqli_query($conn,$sql);
                            if($query){
                                $msg="Registration Successfully";
                            }
                            else{
                                $msg="Can Not register At This Time <br> Server Busy";
                            }

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
                $msg="Please Enter Email";
            }

        }
        else{
            $msg="Please Enter Username";
        }
    }
    else{
        $msg="Please Enter Name";
    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
         
            <?php
             $msg="";
            ?>

            <h1>Signup form</h1>

            <label for="">Full name :</label>
            <input type="text" placeholder="Full name">
            <br><br>
            <label for="">Username :</label>
            <input type="text" placeholder="Username">
            <br><br>
            <label for="">Email :</label>
            <input type="text" placeholder="Email">
            <br><br>
            <label for="">Password :</label>
            <input type="password" placeholder="Password">
            <br><br>
            <br>

            <button value="submit">Signup</button>
        </form>
    </div>
</body>
</html>