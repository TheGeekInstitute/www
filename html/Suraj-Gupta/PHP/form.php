<?php
$msg = "";
$show=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["fullname"]) && !empty($_POST)["fullname"]){
        $fullname=$_POST['fullname'];

    
}



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            /* border: 2px solid black; */
            height: 500px;
            width: 300px;
            margin: 100px auto;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 30px black;
            background-image: url("https://cdn.shopify.com/s/files/1/0575/0987/1774/files/1_6df15c2e-7475-4b2e-839e-3826bc5c02f6.png?v=1653967370");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container h1{
            margin: 10px 0;
            /* margin-bottom: 20px; */
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form label{
            /* border: 1px solid black; */
            width: 240px;
            text-align: left;
            font-size: large;
            margin: 3px 0;
        }

        .container form input{
            border: 1px solid black;
            outline: none;
            border-width: 1px 1px 3px 1px;
            height: 30px;
            width: 240px;
            margin: 2px 0;
            background-color: transparent;
            font-size: large;
            padding: 0 3px;
        }

        .container form #btn{
            margin-top: 10px;
            width: 100px;
            background-color: royalblue;
            color: white;
        }

        .container .msg p{
            font-size:large;
        }

        .container .msg{
            height:40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>

        <div class="msg">
          
        </div>

        <form action="" method="post">
            <label>Full Name</label>
            <input type="text" name="fullname">
            <label>Username</label>
            <input type="text" name="username">
            <label>Email</label>
            <input type="text" name="email">
            <label>Phone</label>
            <input type="number" name="phone">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" value="Sign Up" id="btn">
        </form>
    </div>


    <fieldset>
        <legend>Logs</legend>

      


    </fieldset>


</body>
</html>