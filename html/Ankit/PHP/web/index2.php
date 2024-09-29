<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname= $_POST['firstname'];

        if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];

            if(isset($_POST['phone']) && !empty($_POST['phone'])){
                $phone=$_POST['phone'];

                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email=$_POST['email'];

                    if(isset($_POST['password']) && !empty($_POST['password'])){
                        $password=$_POST['password'];

                        $output= $firstname . ":"  . $lastname  . ":" . $phone . ":" . $email . ":" . $password;

                        $fptr=fopen("output.txt", "a");
                        fwrite($fptr ,$output."\n");
                        fclose($fptr);

                        $msg="Registraion Completed";
            
                        
                    }
                    else{
                        $msg="Please Enter Password";
                    }
        
                    
                }
                else{
                    $msg="Please Enter Email";
                }
    
                
            }
            else{
                $msg="Please Enter Phone No";
            }

            
        }
        else{
            $msg="Please Enter Last Name";
        }
    }
    else{
        $msg="Please Enter First Name";
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

    body{
        background-color:cyan;
    }

    input{
        background-color:black;
        color:white;
        border-radius:5px;
        
    }

    h1{
        font-family:cursive;
        text-decoration:underline;
    }
    .box{
        border:2px solid black;
        padding:20px;
        text-align:center;
        width:300px;
        margin:200px auto;
        height: 480px;
         background-image:linear-gradient(45deg,red,blue,yellow,cyan);
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
        background-color:cyan;
        border:3px solid  black;
       

        
    }
    .box a{
        margin-left:30px;
        border:1px solid black;
        padding:5px;
        height:10px;
        text-align:center;
        width:50px;
        font-size:13px;
        text-decoration:none;
        border-radius:5px;
        background-color:BLACK;
        color:white;
        font-family:cursive;
    }
 </style>
</head>
<body>
    <div class="box">
        <h1>SIGN UP</h1>
        <p><?php echo $msg; ?></p>
        <form action="" method="POST">
            <fieldset>

        
            <label>First Name</label>
        <input type="text" name="firstname"><br>

        <label>Last Name</label>
        <input type="text" name="lastname">

        <label>Phone no</label>
        <input type="text" name="phone">

        <label>Email </label>

        <input type="text" name="email"><br>


        <label>Password </label>

        <input type="password" name="password"><br>

        <input type="submit" value="Sign up">

        <a href="login2.php">Login</a>

            
    </fieldset>


       </form>
        
       

    </div>
</body>
</html>