<?php
$msg="";
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];

        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=$_POST['password'];

            if($username=="admin"){
                if($password=="pass123"){
                    $_SESSION['username']=$username;
                    header("location:main.php");


                }
                else{
                    $msg="Incorrect password";
                }
            }
            else{
                $msg="Invalid username";
            }


        }
        else{
            $msg="Password Name Sholud not be empty";
        }

    }
    else{
        $msg="Username Name Sholud not be empty";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }

        .container {

            width: 300px;
            margin: 150px auto;
            text-align: center;
            background-image: url(https://img.freepik.com/free-photo/vivid-blurred-colorful-wallpaper-background_58702-3798.jpg?t=st=1710335949~exp=1710336549~hmac=a5f5979730077064f2b97fe8f99753c53e9cad8a5e68e4a432b28a2063c7ea86);
            

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px 0;
            border-radius: 10px;
            box-shadow: 0px 0px 10px orange;
        }

        .container h1 {
            font-size: 40px;
            text-shadow: 0px 0px 4px aqua ;
            margin-bottom: 10px;
        }

        .container form input {
            outline: none;
            border: none;
            border: 2px solid black;
            height: 35px;
            width: 90%;
            border-width: 1px 1px 4px 1px;
            border-radius: 3px;
            font-size: large;
            padding: 0 5px;
            margin: 7px 0;
            color: black;
            background-color: transparent;
        }

        .container form label {
            display: block;

            width: 90%;
            margin: auto;
            text-align: left;
            font-size: x-large;

        }

        .container form #btn {
            background-color: rgb(41, 85, 214);
            color: white;
            width: 120px;

        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Login</h1>
        <p><?php  echo $msg; ?></p>
        <form action="" method="post">
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" id="btn" value="Login">


       

        </form>
    </div>

</body>

</html>