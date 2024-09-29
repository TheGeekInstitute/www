

<?php
define("Dhruv",true);
$error=false;
$msg="";

require("database.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        if(strlen($_POST['username'])>=5 && strlen($_POST['username'])<=10 ){

            $username= mysqli_real_escape_string($connection,input_filter($_POST['username']));

            if(isset($_POST['email']) && !empty($_POST['email'])){

                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) && strlen($_POST['email'])<=30){
                    $email= mysqli_real_escape_string($connection,input_filter($_POST['email']));
                    if(isset($_POST['password']) && !empty($_POST['password'])){
                        if(strlen($_POST['password'])>=4 && strlen($_POST['password'])<=16){
                            $password=password_hash(mysqli_real_escape_string($connection,$_POST['password']),PASSWORD_BCRYPT);
                            //Signup Process
                            $check_sql="SELECT  `username`, `email` FROM `user_table` WHERE `username`=? OR `email`=?";
                            $check_stmt=$connection->prepare($check_sql);
                            $check_stmt->bind_param("ss",$username,$email);

                            $check_stmt->bind_result($db_username,$db_email);
                            $check_stmt->execute();
                            $check_stmt->store_result();
                            if($check_stmt->num_rows==1){
                                $check_stmt->fetch();
                                if($db_username==$username){
                                    $error=true;
                                    $msg="username Already Taken";
                                }
                                else{
                                    $error=true;
                                    $msg="Email Alreday Register";
                                }

                            }
                            else{
                                //Insert Query

                                $insert_sql="INSERT INTO `user_table`(`username`, `email`, `password`) VALUES (?,?,?)";
                                $insert_stmt=$connection->prepare($insert_sql);
                                $insert_stmt->bind_param("sss",$username,$email,$password);
                                $insert_stmt->execute();
                                $insert_stmt->store_result();
                                if($insert_stmt->affected_rows==1){
                                    $error=true;
                                    $msg="Regstration Completed";
                                }
                                else{
                                    $error=true;
                                    $msg="Server Busy";
                                }
                                $insert_stmt->close();


                            }


                         $check_stmt->close();
                 




                        }
                        else{
                            $error=true;
                            $msg="password Should be min 4 and max 16 chars";
                        }


                    }
                    else{
                        $error=true;
                        $msg='Please Enter Password';
                    }



                }
                else{
                    $error=true;
                    $msg= "Invalid Email Address";
                }

            }
            else{
                $error=true;
                $msg="Please Enter Email";
            }
         

           

        }
        else{
            $error=true;
        $msg="username should be min 5 and max 10 char";
        }


    }
    else{
        $error=true;
        $msg="Please Enter Username";
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
        if($error==true){
            echo $msg;
        }
    
    ?></p>


    <br><br>

    <a href="./login">Login Here</a>
</body>
</html>