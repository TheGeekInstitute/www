<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $fullname=$_POST['fullname'];

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email=$_POST['email'];

            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password=$_POST['password'];

                $cred = $fullname . ":" . $email . ":" . $password;
                
                $fptr=fopen("cred.txt","a");
                fwrite($fptr,$cred."\n");
                fclose($fptr);

                $msg="Regstration Completed";


            }
            else{
                $msg='Please Enter Password';
            }

        }
        else{
            $msg='Please Enter Email';
        }
    }
    else{
        $msg='Please Enter Full Name';
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
        height: 430px;
        
        border-radius:10px;
    }
    .box label{
        font-family:cursive;
    }
    .box input{
        height: 20px;
        margin-top:30px;
        m
    }
    .box fieldset{
        border-radius:10px;
    }
 </style>
</head>
<body>
    <div class="box">
        <h1>SIGN UP</h1>
        <p><?php echo $msg; ?></p>
        <form action="" method="POST">
            <fieldset>

        <label>Full Name</label>

        <input type="text" name="fullname"><br>



        <label>Email :</label>

        <input type="Email" name="email"><br>

        <label>Password :</label>

        <input type="password" name="password"><br>

        <input type="submit" value="Sign up">

            
    </fieldset>


       </form>
        
       <a href="login.php">Login</a>

    </div>
</body>
</html>