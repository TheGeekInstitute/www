<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #6D9AC4;
        }
        .box{
            height: 35rem;
            width: 20rem;
            display: flex;
            flex-direction: column;
            margin: auto;
            border-radius: 0.6rem;
            margin-top: 2rem;
            background-color:white;
            position: relative;
            z-index: 1;
            box-shadow:  2px 2px 5px black;
        }
        .box .show p{
            text-align: center;
            font-size: 1.3rem;
            padding: 0.3rem ;
            font-weight: 500;
            color: green;
        }
        .box .text h2{
            width: 7rem;
            font-size: 1.4rem;
            font-size: 200;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left: 7rem;
        }
        .box .name input{
            width: 13rem;
            padding: 5px 2px;
            outline: transparent;
            border: 2px solid black;
            background-color: transparent;
            font-size: 1rem;
            font-weight: 700;
            align-items: center;
            margin-left: 3.5rem;
            margin-top: 2rem;
            padding-left: 1rem;
        }
        .box .name label{
            margin-left: 4rem;
            display: block;
            width: 150px;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            bottom: 25px;
            left: 5px;
            z-index: -1;
            transition: all .3s;
            
        }

  
        .box .email input{
            width: 13rem;
            padding: 5px 2px;
            outline: transparent;
            border: 2px solid black;
            background-color: transparent;
            font-size: 1rem;
            font-weight: 700;
            align-items: center;
            margin-left: 3.5rem;
            margin-top: 0.4rem;
            padding-left: 1rem;
        }

        
        .box .email label{
            margin-left: 4rem;
            display: block;
            width: 150px;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            bottom: 25px;
            left: 5px;
            z-index: -1;
            transition: all .3s;
        }
        input::placeholder{
        color: transparent;
        }

        input:focus + label,
        input:not(:placeholder-shown) + label
        {
            transform: translateY(-30px);
        }
        .box .phone input{
            width: 13rem;
            padding: 5px 2px;
            outline: transparent;
            border: 2px solid black;
            background-color: transparent;
            font-size: 1rem;
            font-weight: 700;
            align-items: center;
            margin-left: 3.5rem;
            margin-top: 0.4rem;
            padding-left: 1rem;
        }

        
        .box .phone label{
            margin-left: 4rem;
            display: block;
            width: 150px;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            bottom: 25px;
            left: 5px;
            z-index: -1;
            transition: all .3s;
        }
        .box .use input{
            width: 13rem;
            padding: 5px 2px;
            outline: transparent;
            border: 2px solid black;
            background-color: transparent;
            font-size: 1rem;
            font-weight: 700;
            align-items: center;
            margin-left: 3.5rem;
            margin-top: 0.4rem;
            padding-left: 1rem;
        }

        
        .box .use label{
            margin-left: 4rem;
            display: block;
            width: 150px;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            bottom: 25px;
            left: 5px;
            z-index: -1;
            transition: all .3s;
        }
        .box .pass input{
            width: 13rem;
            padding: 5px 2px;
            outline: transparent;
            border: 2px solid black;
            background-color: transparent;
            font-size: 1rem;
            font-weight: 700;
            align-items: center;
            margin-left: 3.5rem;
            margin-top: 0.4rem;
            padding-left: 1rem;
        }

        
        .box .pass label{
            margin-left: 4rem;
            display: block;
            width: 150px;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            bottom: 25px;
            left: 5px;
            z-index: -1;
            transition: all .3s;
        }
        .box .btn button{
            width: 16rem;
            text-align: center;
            margin-left: 2rem;
            height: 2rem;
            font-size: 1.2rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 900;
            color:  white;
            background-color: #EE4408 ;
            border-radius: 0.5rem;
            outline: none;
            border: none;
            cursor: pointer;
        }
        .box .or p{
            border:  1px solid gray;
            width: 2rem;
            text-align: center;
            margin-left: 9rem;
            margin-top: 0.8rem;
            font-size: 0.8rem;
            color: gray;
            background-color: white;
            position: relative;
            z-index: 10;
        }
        .box .or hr{
            color:gray;
            width: 14rem;
            text-align: center;
            margin-left: 3rem;
            position: relative;
            bottom: 0.5rem;
        }
        .box .icon a{
            text-align: center;
            color:  #316FF6;
            font-size: 1.8rem;
            border-radius: 50%;
            margin: 1rem;
            padding: 0.3rem;
           
        }
        .box .icon a:first-child{
            color: red;
        }

        .box .icon {
            text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
    .box .log {
        display: flex;
        height: 2rem;
        align-items: center;
        width: 12rem;
        margin-left: 4rem;
        position: relative;
        bottom: 1rem;

    }
    .box .log p{
        color: rgb(80, 77, 77);
        margin-left: 2rem;
        font-size: 0.9rem;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .box .log a{
        color: rgb(80, 77, 77);
        font-size: 0.9rem;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }



        

    </style>
</head>
<body>
      <form method="post">
        
        <div class="box">
            <div class="show">
                <p></p>
            </div>
            <div class="text">
                <h2>SIGN UP</h2>
            </div>
            <div class="name">
                <input type="text" name="name" placeholder="ABCD">
                <label for="">Full Name</label>
            </div>
            <div class="email">
                <input type="email" name="email"placeholder="ABCD" >
                <label for="">Email</label>
            </div>
            <div class="phone">
                <input type="text" name="phone" placeholder="ABCD">
                <label for="">Phone Number</label>
            </div>
            <div class="use">
                <input type="text" name="username" placeholder="ABCD">
                <label for="">Username</label>
            </div>
            <div class="pass">
                <input type="password" placeholder="ABCD" name="password">
                <label for="">Password</label>
            </div>
            <div class="btn">
                <button type="submit">SIGN UP</button>
            </div>
        </form>


        <div class="or">
            <p>OR</p>
            <hr>
          </div>
          <div class="icon">
            <a href="https://www.google.com/"><ion-icon name="logo-google"></ion-icon></a>
            <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://in.linkedin.com/"><ion-icon name="logo-linkedin"></ion-icon></a>
          </div>
          <div class="log">
            <p>Already a user?</p>
            <a href="http://10.10.10.10/Shivam1/php/login.php">LOGIN</a>
          </div>
           </div>
      


           <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>