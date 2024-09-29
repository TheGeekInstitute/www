<?php

$msg="";


$conn=mysqli_connect("localhost","root","toor","Nikhil");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fname']) && !empty($_POST['fname'])){
        $fname=$_POST['fname'];
        if(isset($_POST['lname']) && !empty($_POST['lname'])){
            $lname=$_POST['lname'];
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email=$_POST['email'];
                if(isset($_POST['phone']) && !empty($_POST['phone'])){
                    $phone=$_POST['phone'];
                    if(isset($_POST['username']) && !empty($_POST['username'])){
                        $username=$_POST['username'];
                        if(isset($_POST['password']) && !empty($_POST['password'])){
                            $password=$_POST['password'];

                            $sql="SELECT `firstname`, `lastname`, `email`, `phone`, `username`, `password` FROM `users` WHERE `email`='$email' OR `phone`='$phone' OR `username`='$username'";

                            $query=mysqli_query($conn,$sql);
                            if($query){
                                if(mysqli_num_rows($query)==1){
                                    $data=mysqli_fetch_assoc($query);
                                    if($data['email']==$email){
                                        $msg="Email Already Registered";
                                    }
                                    else if($data['username']==$username){
                                        $msg="Username Already Taken";
                                    }
                                    else{   
                                        $msg="Phone Number Already Registered";
                                    }
                                }
                                else{
                                    //insert

                                    $sql="INSERT INTO `users`(`firstname`, `lastname`, `email`, `phone`, `username`, `password`) VALUES ('$fname','$lname','$email','$phone','$username','$password')";
                                    $query=mysqli_query($conn,$sql);
                                    if($query){
                                        $msg='<p style="color:lightgreen;">Regstration Successfully!!!!</p>';

                                    }
                                    else{
                                        $msg="Server Busy !!! Please Tragy After Some Time";

                                    }

                                }
                            }
                            else{
                                $msg="Server Busy !!! Please Tragy After Some Time";
                            }
                            

                        }
                        else{
                            $msg= "Enter Your Password";
                        }
                    }
                    else{
                        $msg= " enter Username";
                    }
                }
                else{
                    $msg= "Enter Your Phone Number";
                }
            }
            else{
                $msg= "Enter Your Email";
            }
        }
        else{
            $msg= "enter Your Last Name";
        }
    }
    else{
        $msg= "Enter Your First Name";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        .box{
            border: 1px solid gray;
            height: 25rem;
            width: 27rem;
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
            text-align: center;
            border-radius: 1rem;
            
        }
        .box h1{
            color: white;
            font-size: 2.5rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 900;
        }
        .box .name input{
            height: 2.5rem;
            width: 12rem;
            outline: none;
            background-color: transparent;
            border-radius: 2rem;
            padding-left: 2rem;
            border: 1px solid gray;
            color:white;
            font-size:large;
        }
    .box .name input::placeholder{
        color: #fff;
        font-size: 1rem;
        font-weight: 900;

    }
    .box .dast input{
        height: 2.5rem;
            width: 12rem;
            outline: none;
            background-color: transparent;
            border-radius: 2rem;
            padding-left: 2rem;
            border: 1px solid gray;
    }
    .box .log input{
        height: 2.5rem;
            width: 12rem;
            outline: none;
            background-color: transparent;
            border-radius: 2rem;
            padding-left: 2rem;
            border: 1px solid gray;
    }
    .box .dast input::placeholder{
        color: #fff;
        font-size: 1rem;
        font-weight: 900;

    }
    .box .log input::placeholder{
        color: #fff;
        font-size: 1rem;
        font-weight: 900;

    }
    .box .sign{
        /* border: 1px solid red; */
        /* display: flex; */
        /* justify-content: center; */
        flex-direction: column;
        margin: 1rem;
    }
    .box .sign button{
        width: 20rem;
        text-align: center;
        align-items: center;
        height: 2.5rem;
            width: 20rem;
            border-radius: 2rem;
            color: white;
            outline: none;
            border: 1px solid gray;
            cursor: pointer;
            background-color: rgba(0, 0, 255, 0.773);
            font-weight: 900;

    }
    .box  .log a{
        border: 1px solid gray;
       display: block;
       width: 20rem;
       height: 2.5rem;
       color: rgba(0, 0, 255, 0.773);
       background-color: white;
       outline: none;
       border-radius: 2rem;
       align-items: center;
       text-align: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 900;
        margin: auto;

            
    }

    input{
        font-size:large;
        color:white;
    }

    body{
        background-image: url("https://img.freepik.com/premium-vector/network-connection-background-abstract-style_23-2148875738.jpg?size=626&ext=jpg&ga=GA1.1.632798143.1705795200&semt=ais");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
    }
    .show{
        /* border:  1px solid red; */
        color:  red;
        font-size: 1.3rem;
        padding: 0.4rem;
        text-align: center;
        align-items: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-weight: 900;

    }
    </style>
</head>
<body>
    <form method="post">
    <div class="box">
        <h1>Sigup</h1>
        <div class="name">
        <input type="text" placeholder="First Name" name="fname">
        <input type="text" placeholder="Last Name" name="lname">
    </div>
        <div class="dast">
            <input type="email" placeholder="Email" name="email">
            <input type="text" placeholder="Phone" name="phone">
        </div>
        <div class="log">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
        </div>
        <div class="sign">
        <button type="submit">Signin</button>
        <!-- <a href="#">Login</a> -->
    </div>

    <div class="show">
    <?php  echo $msg; ?>
    </div>
    or
    <div class="log">
    <a href="http://10.10.10.10/Nikhil/phpMySQL/5.php">Login</a>
</div>
    
    </div>
</form>
</body>
</html>