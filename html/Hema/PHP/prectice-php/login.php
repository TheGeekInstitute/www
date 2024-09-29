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
            top: calc(50% - 18rem);
            left: calc(50% - 10rem);
            z-index: 1; 
            height: 20rem;
            width: 20rem;
            text-align: center;
            border-radius: 1rem;
            font-family: Calibri;
            color: white;
            backdrop-filter: blur(5px);
            background-color:rgba(0, 0, 128, 0.5);
        
            background-size: cover;
            /* background-color: aqua; */
        }

        body{
            background-color: rgba(24, 24, 24,.9);
 

        }
        .container .login{
            /* margin-top: 1rem ; */
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
            /* margin-top: .5rem; */

        }

        .container input[type="text"], .container input[type="password"]{
            outline: transparent;
            height: 2rem;
            padding: 2px 5px;
            font-weight: 700;
            background-color: rgba(61, 60, 73, .3);
            border: none;
            color: white;
            /* border-radius: .2rem; */
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
            /* border-radius: .2rem; */
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
            /* border-radius: .2rem; */
        }


      
        
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            Login Here
        </div>

        <form>
            <label>Username</label>
            <input type="text" placeholder="Email or Phone">
            <label>Password</label>
            <input type="password" placeholder="Password">
            <input type="submit" value="Log in">
        </form>

        <div class="o-auth">
            <a href="#">
                <i class="fa-brands fa-google"></i>
                Google
            </a>
            <a href="#">
                <i class="fa-brands fa-facebook"></i>
                Facebook
            </a>
        </div>

    </div>

    <?php
  if($_SERVER)

    ?>


</body>
</html>