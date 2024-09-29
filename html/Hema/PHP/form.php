<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];

        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=$_POST['password'];

            
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
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            /* border: 2px solid red; */
            position: absolute;
            top: calc(50% - 12rem);
            left: calc(50% - 10rem);
            z-index: 1; 
            height: 24rem;
            width: 20rem;
            text-align: center;
            border-radius: .3rem;
            font-family: Calibri;
            color: white;
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.1);
            /* background: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Fdark-background&psig=AOvVaw339vY8fPKdx4etclc7zjRM&ust=1690009673246000&source=images&cd=vfe&opi=89978449&ved=0CA4QjRxqFwoTCKDln-qen4ADFQAAAAAdAAAAABAD"); */
            background-size: cover;
            /* background-color: aqua; */
        }

        body{
            background-color: rgba(24, 24, 24,.9);
            /* background-color: rgba(61, 60, 73, 1); */

        }
        .container .login{
            margin-top: 1rem ;
            font-size: 2rem;
            font-weight: 700;
        }

        .container form{
            display: flex;
            flex-direction: column;
            margin: 2rem 2.5rem;
        }
        .container form label{
            /* border: 1px solid red; */
            text-align: left;
            padding: 3px 0;
            font-weight: 700;
            font-size: .9rem;
            margin-top: .5rem;

        }

        .container input[type="text"], .container input[type="password"]{
            outline: transparent;
            height: 2rem;
            padding: 2px 5px;
            font-weight: 700;
            background-color: rgba(61, 60, 73, 0.7);
            border: none;
            color: white;
            border-radius: .2rem;
            margin-bottom: .5rem;
            /* background-color: transparent; */
        }

        .container form input::placeholder{
            color: white;
            opacity: 100%;
        }

        .container form input[type="submit"]{
            height: 2rem;
            padding: 2px 2px ;
            margin-top: .5rem;
            border-radius: .2rem;
            outline: transparent;
            border: none;
            font-size: .9rem;
            font-weight: 700;
        }

        .container .o-auth{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin: 0 2rem;
        }
        
        .container .o-auth a{
            /* border: 2px solid red; */
            display: block;
            color: white;
            text-decoration: none;
            padding: .5rem 1.2rem;
            background-color: rgba(255, 255, 255,.2);
            border-radius: .2rem;
        }


        .circle1{
            height: 150px;
            width: 150px;
            border-radius: 50%;
            position: absolute;
            background:linear-gradient(blue,rgb(84, 84, 209));
            top: calc(50% - 16rem);
            left: calc(50% - 15rem);
        }

        .circle2{
            height: 150px;
            width: 150px;
            border-radius: 50%;
            position: absolute;
            background:linear-gradient(orangered,orange);
            top: calc(50% + 7rem);
            left: calc(50% + 5rem);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            Login Here
        </div>
        <p><?php echo $msg ; ?></p>

        <form method="POST">
            <label>Username</label>
            <input type="text" placeholder="Email or Phone" name="username">
            <label>Password</label>
            <input type="password" placeholder="Password" name="password">
            <input type="submit" value="Log in">
        </form>

        <div class="o-auth">
            <a href="data.php?login=google">
                <i class="fa-brands fa-google"></i>
                Google
            </a>
            <a href="data.php?login=facebook">
                <i class="fa-brands fa-facebook"></i>
                Facebook
            </a>
        </div>

    </div>

    <div class="circle1"></div>
    <div class="circle2"></div>

</body>
</html>