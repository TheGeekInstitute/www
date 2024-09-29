<?php
session_start();

$error=false;
$msg="";

$conn=mysqli_connect("localhost","root","toor","Karim");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['login']) && !empty($_POST['login'])){
        if(strlen($_POST['login'])>=4 || filter_var($_POST['login'],FILTER_VALIDATE_EMAIL)){
            $login=$_POST['login'];
            
            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password=$_POST['password'];
            
                //Check

                $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `users` WHERE `username`='$login' OR `email`='$login'";

                $query=mysqli_query($conn,$sql);
                if(mysqli_num_rows($query)==1){
                    $data=mysqli_fetch_assoc($query);
                    if($data['password']==$password){
                        $_SESSION['fullname']=$data['fullname'];
                        $_SESSION['username']=$data['username'];
                        header("location:main.php");
                        die();
                    }
                    else{
                        $error=true;
                        $msg="Incorrect Password";
                    }

                }
                else{
                    $error=true;
                    $msg="Incorrect username/email";
                }

            }
            else{
                $error=true;
                $msg="Please Enter Password";
            }
        
        }
        else{
            $error=true;
            $msg="Invalid Username/Email";
        }

    }
    else{
        $error=true;
        $msg="Please Enter Username/Email";
      
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            border: 2px solid black;
            width:20rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 150px auto;
            padding: 5px;
            border-radius: 10px;
            text-align:center;
        }

        .container p{
            font-size:  x-large;
            margin: 7px 0;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }



        .container form input{
            border: none;
            border: 1px solid black;
            border-width: 1px 1px 3px 1px;
            padding: 3px;
            font-size: large;
            width: 15rem;
            margin: 5px 0;
            outline: none;
        }

        .container form label{
            display: block;
            width: 15rem;
            font-size: large;
            /* margin: 5px 0; */
            font-weight: 900;
            text-align:left;
        }

        .container form input[type="submit"]{
            width: 10rem;
            background-color: royalblue;
            color: white;
            cursor: pointer;
            padding: 7px 0;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Login Form</h1>

        <?php
            if($error){

                echo '<p>'.$msg.'</p>';
            }
        ?>
        <form action="" method="POST">
 
            <label for="">Username/Email</label>
            <input type="text" name="login">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
            <a href="./index.php">Signup</a>
        </form>
    </div>
   
</body>
</html>