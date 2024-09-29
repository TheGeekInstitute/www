<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){


        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email=trim($_POST['email']);

            if(isset($_POST['password']) && !empty($_POST['password'])){
             $password=trim($_POST['password']);

             $fptr=fopen("cred.txt","r");
                for($i=0; $i< count(file("cred.txt")) ; $i++){
                    $cred = explode(":",fgets($fptr));
                    if(trim($cred[1])==$email && trim($cred[2])==$password){
                        session_start();
                        $_SESSION['fullname']=$cred[0];
                        header("location:main.php");
                    }
                    else{
                        $msg='Incorrect Username/Password';
                    }

                }
             fclose($fptr);

                
             


            }
            else{
                $msg='Please Enter Password';
            }

        }
        else{
            $msg='Please Enter Email';
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
    .box{
        border:2px solid black;
        padding:20px;
        text-align:center;
        width:300px;
        margin:200px auto;
        height: 320px;
        /* padding-top:50px; */
        border-radius:10px;
    }
    .box label{
        font-family:cursive;
    }
    .box input{
        height: 20px;
        margin-top:30px;
        
    }
    .box fieldset{
        border-radius:10px;
    }
 </style>
</head>
<body>
    <div class="box">
        <h1>LOGIN</h1>
        <p><?php echo $msg; ?></p>
        <fieldset>
          <form action="" method="POST">
        <label>Email :</label>
        <input type="email" name="email"><br>
    
        <label>Password :</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
   
        </fieldset>
       
       </form>
        

       <a href="index.php">Signup</a>
    </div>

</body>
</html>