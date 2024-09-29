<?php

$mes="";


$conn=mysqli_connect("localhost","root","toor","Nikhil");
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $user=$_POST['username'];
        if(isset($_POST['password']) && !empty($_POST['password'])){
            $pass=$_POST['password'];
            $sql="SELECT `firstname`, `lastname`, `email`, `phone`, `username`, `password` FROM `users` WHERE `username`='$user' OR `email`='$user' OR `phone`='$user'";

            $query=mysqli_query($conn,$sql);
            if($query){
                if(mysqli_num_rows($query)==1){
                    $data=mysqli_fetch_assoc($query);
                    if($data['password']==$pass){
                        $_SESSION['username']=$data['username'];
                        header("location:main.php");
                        die();
                       

                    }
                    else{
                        $mes="Incorrect password";
                    }

                }
                else{
                    $mes="user Not Found";
                }

            }
            else{
                    $mes="Server Busy";
            }


        }
        else{
            $mes="Enter Your Password";
        }
    }
    else{
        $mes= "Enter Your Username";
    }
}


mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        .box{
            border: 1px solid gray;
            width: 20rem;
            height: 23rem;
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            padding: 1.2rem;
            border-radius: 1rem;
            text-align: center;
            /* background-color: rgba(255, 0, 0, 0.137); */
            

        }
        body{
            background-image: url("https://e1.pxfuel.com/desktop-wallpaper/581/154/desktop-wallpaper-backgrounds-for-login-page-login-page.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            /* width: 100vw; */
        }
        .box form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .box h1{
            user-select: none;
            font-size: 2.5rem;
            position: relative;
            bottom: 3rem;
            color: white;
            font-weight: 900;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .box .log input{
            height: 2.2rem;
            width: 15rem;
            position: relative;
            bottom: 3rem;
            border-radius: 2rem;
            background-color: transparent;
            outline: none;
            /* border: none; */
            padding-left: 1.5rem;
            border: 1px solid gray;
            margin: 1rem;
            color: wheat;
            font-size: 1.2rem;
            padding-right: 3.4rem;
            overflow: hidden;
        }
        .box .log1 input{
            height: 2.2rem;
            width: 15rem;
            position: relative;
            bottom: 3.9rem;
            left: 0.9rem;
            border-radius: 2rem;
            background-color: transparent;
            outline: none;
            /* border: none; */
            padding-left: 1.5rem;
            border: 1px solid gray;
            /* color: blue; */
            color: white;
            font-size: 1.2rem;
            padding-right: 3.4rem;
            overflow: hidden;
        }
        .box .log1 input::placeholder{
            color: #fff;
            font-weight: 900;
        }
        .box .log input::placeholder{
            color: #fff;
            font-weight: 900;
        }
        .box button{
            height: 2.2rem;
            width: 15rem;
            position: relative;
            bottom: 3rem;
            border-radius: 2rem;
            background-color: transparent;
            outline: none;
            /* border: none; */
            padding-left: 1.5rem;
            border: 1px solid gray;
            top: 1rem;
            background-color: white;
            font-size: 1rem;
            font-weight: 900;
        }
        .box .rf{
            /* border: 1px solid red; */
            display: flex;
            justify-content: space-evenly;
            font-size: 0.9rem;
            position: relative;
            bottom: 1.5rem;
            color: wheat;
        }
        .box .log a{
            color: #fff;
            font-size: 1.5rem;
            position: relative;
            bottom: 5.9rem;
            left: 5rem;
            user-select: none;
                    
            
        }
        .box .log1 a{
            color: #fff;
            font-size: 1.5rem;
            position: relative;
            bottom: 3.5rem;
            right: 2.9rem;
            user-select: none;

        }
        .error{
            /* border: 1px solid red; */
            position: relative;
            bottom: 2.4rem;
            padding: 0.5rem 2rem;
            color:  red;
            font-size: 1.2rem;
            font-weight: 900;
            font-family: 'Times New Roman', Times, serif;


        }
        
    </style>
</head>
<body>
    <div class="box">
        <form method="post">
            <h1>Login</h1>
            <div class="log">
                <input type="text" placeholder="Username" name="username">
                <a href="#"><ion-icon name="person-circle-outline"></ion-icon></a>
            </div>
            <div class="log1">
                <input type="password" placeholder="Password" name="password">
                <a href="#"><ion-icon name="lock-closed-outline"></ion-icon></a>
            </div>
            <div class="error">
                <p><?php  echo $mes;    ?></p>
            </div>
            <label>
                <div class="rf">
                <input type="checkbox">
                Remember me
            </label>
            <a href="#">Forgot password</a>
        </div>
        
            <button type="submit">Login</button>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>