<?php
require("filter.php");
require("db.php");
$msg="";
session_start();
session_regenerate_id();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=input_filter($_POST['username']);
        

        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=input_filter($_POST['password']);

            $sql="SELECT `user_id`, `username`, `password` FROM `users` WHERE `username`=?";
            $stmt=mysqli_prepare($conn,$sql);
            $stmt->bind_param("s",$username);
            $stmt->bind_result($db_user_id,$db_username,$db_password);
            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows==1){
                $stmt->fetch();
                if($db_password==$password){
                    $_SESSION['username']=$db_username;
                    $_SESSION['is_login']=true;
                    header("location:create.php");
                    die();
                }
                else{
                    $msg="Incorrect Password";
                }
            }
            else{
                $msg="User Not Found";
            }

        }
        else{
            $msg="Please Enter Password";
        }
    }
    else{
        $msg="Please Enter Username";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box  ;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .container{
       
            text-align: center;
            max-width: 400px;
            margin-inline: auto;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .container h1{
            margin: 20px auto;
            text-align: center;
            color: royalblue;
        }

        .container form label{
            font-size: large;
            
            width: 80%;
            text-align: left;
            margin: 5px 0;
        }

        .container form input{
            border: 1px solid black;
            border-width: 1px 1px 3px 1px;
            padding: 2px 5px;
            width: 80%;
            height: 45px;
            margin-bottom: 20px;
            font-size: large;
            outline: transparent;
            border-radius: 3px;
        }

        .container form input[type="submit"]{
            background-color: royalblue;
            color: white;
            width: 120px;
            border-radius: 5px;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover{
            background-color: blue;
        }
    </style>

</head>
<body>
    
    <div class="container">
        <h1>Login Page</h1>
        <p><?php echo $msg; ?></p>

        <form action="" method="POST">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="example.gmail.com">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="********">
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>