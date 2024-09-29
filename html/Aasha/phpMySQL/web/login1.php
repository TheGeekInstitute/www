<?php
$msg="";
$conn=mysqli_connect("localhost","root","toor","Aasha");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){

    if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=$_POST['password'];

    $sql="SELECT `user_id`, `fullname`,`username`,`email`,`password` from `user` WHERE `username=``$username` OR `email`='$username'";
     $query=mysqli_query($conn,$sql);
     
    if($query){
    if(mysqli_num_rows($query)==1){
    $data=mysql_fetch_assoc($query);
    
    if($data['password']==$password){
     echo"loggedin";   
    }

    else{
        $msg = "incorrect password";
        }
 }
    else{
        $msg = "user not found";
    } 
}
    else{
        $msg="can not login At this time,server Busy";
    }
    }
    else{
        $msg="plese Enter password";
    }
    }
    else{
        $msg = "please Enter username/Email";
    }
    }
    





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *{
            margin:0%;
            padding:0%;
            box-sizing:border-box;
            font-family:carsiv;

        }
        .container{
            border:1px solid red;
            width: 300px;
            margin:150px auto;
            text-align:center;
            background-image:url("https://cdn.pixabay.com/photo/2016/04/18/16/22/watercolour-1336856_960_720.jpg");
            background-size:cover;
        
            background-position: center;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .container h1{
            color: black;
            text-transform: uppercase;
            font-family: cursive;
            text-decoration: underline;
            text-shadow: 0px 0px 2px cyan,0px 0px 5px cyan, 0px 0px 7px yellow;
        }
        .container p{
            color: white;
            font-size: large;
            margin: 15px 0;
        }
        .container form input{
            margin: 5px auto;
            width: 200px;
            height: 30px;
            padding: 0 5px;
            outline: transparent;
            border: none;
            border-style: solid;
            border-color: black;
            border-width: 1px 1px 4px 1px;
            border-radius: 3px;
            font-size: 16px;
            letter-spacing: 1px;
            background-color: rgba(255, 255, 255, 0.2);
        }
        .container form input[type="submit"]{
            background-color: royalblue;
            width: 100px;
            color: white;
            cursor: pointer;
            font-size: large;
        }
        .container form label{
            width: 200px;
            font-size: large;
            display: block;
            text-align: left;
            margin-bottom: -5px;
          
        }


        
    </style>
</head>
<body>
    <div class="container">
        <h1>login</h1>
        <p><?php echo $msg ;?></p>
        <form method="post">

        <label>username/Email</label>
        <input type="text"name="username">

        <label>password</label>
        <input type="password" name="password">
        <input type="submit" value="login">
        </form>
    </div>
    
</body>
</html>