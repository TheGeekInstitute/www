<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            text-decoration: none;
            user-select: none;
            font-family:Arial, Helvetica, sans-serif;
        }
        body{
            background-color: black;
        }
        .container{
            /* border: 2px solid black; */
            background-color: white;
            margin: 200px;
            height: 300px;
            width: 270px;
            text-align: center;
            border-radius: 15px;
        }
        .container .input{
            display: flex;
            flex-direction: column;
            align-items: center;

        }
        .container .input input{
            width: 220px;
            height: 35px;
            margin: 10px;
            border-radius: 10000px;
            padding: 10px;
            border:1px solid grey;
            outline: transparent;
        }
        .container > h3:first-child{
            /* border: 1px solid red; */
            background-image: linear-gradient(45deg,blue, blueviolet);
            color: white;
            height: 50px;
            line-height: 50px;
            /* border-radius: 15px; */
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;

        }
        .abc label{
            font-size: 12px;
            
        }
        
        .btn{
            width: 220px;
            height: 35px;
            margin: 15px;
            border-radius: 1000px;
            outline: none;
            border: none;
           background-image: linear-gradient(45deg,blue, blueviolet);
           color: white;
           font-size: 18px;
           cursor: pointer;  
        }
        .btn:active{
            background-image: linear-gradient(red,red);
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Login Form </h3>
        
        <div class="input">
            <input type="text" placeholder="Email Address">
            <input type="text" placeholder="Password">
        </div>

        <div class="abc">
            <input type="checkbox" name="" id="forget">
            <label for="forget">Remember me <a href="#">&nbsp; &nbsp; Forgot password?</a></label>
        </div>
            <input type="button" value="Login" class="btn">
            <div class="signup">
                <label for="signup">Not a member? &nbsp; &nbsp;<a href="#">Signup now</a></label>
            </div>

    </div>
</body>
</html>


<?php




?>