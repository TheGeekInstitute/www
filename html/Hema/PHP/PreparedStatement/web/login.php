<?php
$conn=mysqli_connect("localhost","root","toor","hema");
$msg="";
session_start();
session_regenerate_id();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];

        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=$_POST['password'];
            
            $sql="SELECT  `fullname`, `username`, `email`, `password` FROM `signup` WHERE `username`=? OR `email`=?";
            $login_stmt=$conn->prepare($sql);
            $login_stmt->bind_param("ss",$username,$username);
            $login_stmt->bind_result($db_fullname,$db_username,$db_email,$db_password);
            $login_stmt->execute();
            $login_stmt->store_result();
            if($login_stmt->num_rows==1){
                $login_stmt->fetch();
                if(password_verify($password,$db_password)){
                    $_SESSION['username']=$db_username;
                    $_SESSION['fullname']=$db_fullname;
                    $_SESSION['email']=$db_email;
                    header("location:main.php");
                    die();
                }
                else{
                    $msg="Incorrect password";
                }
            }
            else{
                $msg="User Not Found";
            }

         

        
        }
        else{
        $msg='Please Enter Password';
        }

    }
    else{
        $msg='Please Enter Username/Email';
    }
}


mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
          
            text-align: center;
            padding: 5px;
            width: 270px;
            margin: 150px auto;
            border-radius: 10px;
        }
        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form label{
            display: block;
          
            width: 250px;
            text-align: left;
            font-weight: 900;
            font-size: large;
            margin-block: 5px;
        }

        .container form input{
            border: 1px solid black;
            outline-style: none;
            width: 250px;
            padding: 2px 5px;
            height: 35px;
            margin-block: 5px;
            font-size: large;
        }

        .container .msg{
         
            height: 30px;
            text-align: center;
        }

        .container .msg p{
            line-height: 30px;
            font-size: large;
        }

        .container form input[type="submit"]{
            background-color: royalblue;
            color: white;
            width: 100px;
        }


    </style>
</head>
<body>
    
    <div class="container">
        <h1>Login</h1>

        <div class="msg">
            <p><?php echo $msg ; ?></p>
        </div>

        <form action="" method="post">
          
            <label for="">Username/Email</label>
            <input type="text" name="username">
        
           
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>

        <a href="./index.php">Create Account</a>
    </div>

</body>
</html>