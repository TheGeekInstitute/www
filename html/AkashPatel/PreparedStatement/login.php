

<?php
session_start();
define("abcd",true);

$error=false;
$msg="";

require("db.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(isset($_POST['login']) && !empty($_POST['login'])){

        if(strlen($_POST['login'])>=4 || filter_var($_POST['login'],FILTER_VALIDATE_EMAIL)){

            $login=mysqli_real_escape_string($connection,input_filter($_POST['login']));
            
            if(isset($_POST['password']) && !empty($_POST['password'])){

                $password=$_POST['password'];

                $sql="SELECT `user_id`, `username`, `email`, `password` FROM `user_table` WHERE `username`=? OR `email`=?";

                $check_stmt=$connection->prepare($sql);
                $check_stmt->bind_param("ss",$login,$login);
                $check_stmt->bind_result($db_user_id,$db_username,$db_email,$db_password);
                $check_stmt->execute();
                $check_stmt->store_result();
                if($check_stmt->num_rows==1){
                    $check_stmt->fetch();
                    
                    if(md5($password)==$db_password){
                        $_SESSION['auth']=true;
                        $_SESSION['user_id']=$db_user_id;
                        header("location:main.php");
                    }
                    else{
                        $error=true;
                        $msg="Incorrect Password";
                    }

                  


                }
                else{
                    $error=true;
                    $msg="User not Found";
                }
                $check_stmt->close();



                

                

            }
            else{
                $error=true;
                $msg="Please Enter Password";
            }



        }
        else{
            $error=true;
            $msg= "Invalid Username/Email";
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
    <title>Signup</title>
</head>
<body>
    <form action="" method="POST">
        Username/Email :
        <input type="text" name="login" >

        <br><br>
        Password :
        <input type="password" name="password" >

        <br><br>
        <input type="submit" value="Login">

    </form>

    <br><br>

    <p><?php 
        if($error==true){
            echo $msg;
        }
    
    ?></p>


    <br><br>

    <a href="./login">Login Here</a>
</body>
</html>