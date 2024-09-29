<?php
$msg="";
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
        background-color:gray;
        color:black;
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

        <input type="Email" name="email"><br>


        <label>Password </label>

        <input type="password" name="password"><br>

        <input a href="sign.php" type="submit" value="Sign up">

        <a href="login2.php">Login</a>
            
    </fieldset>


       </form>
        
       

    </div>
</body>
</html>