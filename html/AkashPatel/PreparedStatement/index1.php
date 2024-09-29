

<?php
define("include",true);
require("db.php");
$error=false;
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=mysqli_real_escape_string($connection,input_filter($_POST['username']));

        if(isset($_POST['email']) && !empty($_POST['email'])){

            if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

                $email=mysqli_real_escape_string($connection,input_filter($_POST['email']));

                if(isset($_POST['password']) && !empty($_POST['password'])){

                    $password=password_hash(mysqli_real_escape_string($connection,$_POST['password']),PASSWORD_BCRYPT);
                    #//checking user exist or not
                    $sql="SELECT `username`, `email` FROM `user_table` WHERE `username`=? OR `email`=?";
                    $signup_stmt=$connection->prepare($sql);
                    $signup_stmt->bind_param("ss",$username,$email);
                    $signup_stmt->bind_result($db_username,$db_email);
                    $signup_stmt->execute();
                    $signup_stmt->store_result();
                    if($signup_stmt->num_rows==1){
                        $signup_stmt->fetch();
                        if($db_username==$username){
                            echo "Username Already taken";
                        }
                        else{
                            echo "Email Already Registered";
                        }

                    }
                    else{
                        //Insert
                        $insert_sql="INSERT INTO `user_table`( `username`, `email`, `password`) VALUES (?,?,?)";
                        $insert_stmt=$connection->prepare($insert_sql);
                        $insert_stmt->bind_param("sss",$username,$email,$password);
                        $insert_stmt->execute();
                        $insert_stmt->store_result();
                        if($insert_stmt->affected_rows==1){
                            echo "Regstration Successfully";

                            
                        }
                        else{
                            echo "Server Busy";
                        }

                        $insert_stmt->close();

                    }
                   
                    $signup_stmt->close();
                }
                else{
                    $error=true;
                    $msg="Please Enter password";
                }


            }
            else{
                $error=true;
                $msg='Invalid Email Address';
            }

        }
        else{
            $error=true;
        $msg='Please Enter username';
        }
    }
    else{
        $error=true;
        $msg='Please Enter Email';
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
        Username :
        <input type="text" name="username" >
        <br><br>
        Email :
        <input type="text" name="email">

        <br><br>
        Password :
        <input type="password" name="password" >

        <br><br>
        <input type="submit" value="Signup">

    </form>

    <br><br>

    <p><?php 
        if($error){
            echo $msg;
        }
    
    ?></p>


    <br><br>

    <a href="./login">Login Here</a>
</body>
</html>