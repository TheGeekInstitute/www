<?php
$msg="";
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){


        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password=$_POST['password'];   

                $fptr=fopen("cred.txt","r");

                for($i=1 ; $i<=count(file("cred.txt")) ; $i++){
                 $cred=explode(":",fgets($fptr));
                    if($username==trim($cred[1]) && $password==trim($cred[2])){
                        $_SESSION['fullname']=$cred[0];
                        $_SESSION['username']=$cred[1];
                        header("location:main.php");

                    }
                    else{
                        $msg="Incorrect Username/Password";
                    }
                }

                fclose($fptr);


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
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">

        Username : <input type="text" name="username">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
<br>
<?php echo $msg; ?>

    <br><br>
    <a href="./index.php">Signup Here</a>
</body>
</html>