<?php
session_start();
$_SESSION['username']="";
$mes="";

$conn=mysqli_connect("localhost","root","toor","Nikhil");

if($_SERVER['REQUEST_METHOD']== "POST"){
    if(isset($_POST ['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];
        if(isset($_POST['password']) && !empty($_POST['password'])){
            $password=$_POST['password'];
            $sql="SELECT `Full Name`, `Email`, `Phone`, `Username`, `Password` FROM `New User` WHERE `Username`='$username' OR `Email`='$username' OR `Phone`='$username'";

            $query=mysqli_query($conn,$sql);
            if(mysqli_num_rows($query)==1){
                $_SESSION['username']=$username;
                $data=mysqli_fetch_assoc($query);

                if(password_verify($password,$data['Password'])){
                    $_SESSION['email']=$data['Email'];
                    header("location:home.php");
                   
                }
                else{
                    $mes="Incorrect Password";
                }

            }
            else{
                $mes="Incorrect Username";
            }
       

        }
        else{
            $mes="Enter Password";
        }
    }
    else{
        $mes="Enter Username";
    }
}





mysqli_close($conn);
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
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
            /* border: 1px solid red; */
            height: 23rem;
            width: 20rem;
            display: flex;
            flex-direction: column;
            margin: auto;
            border-radius: 0.6rem;
            margin-top: 2rem;
            /* justify-content: center; */
            background-color:white;
            position: relative;
            z-index: 1;
            box-shadow:  2px 2px 5px black;
        }
        .box .show p{
            /* border: 1px solid black; */
            text-align: center;
            font-size: 1.3rem;
            padding: 0.3rem ;
            font-weight: 500;
        }
        .box .text h2{
            /* border: 1px solid blue; */
            width: 7rem;
            font-size: 1.4rem;
            font-size: 200;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left: 0.5rem;
        }
        .box .user input{
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
        .box .user label{
            margin-left: 4rem;
            display: block;
            width: 150px;
            font-weight: 700;
            font-size: 16px;
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
            /* border: 1px solid red; */
            /* position: relative; */
            /* bottom: 4rem; */
            /* left: 5rem; */
            margin-left: 4rem;
            display: block;
            width: 150px;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            bottom: 25px;
            left: 5px;
            z-index: -1;
            /* opacity: 100%; */
            /* visibility: hidden; */
            transition: all .3s;
        }
        .box .btn button{
            /* border:  1px solid red; */
            width: 16rem;
            text-align: center;
            margin-left: 2rem;
            height: 2rem;
            font-size: 1.2rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 900;
            color:  white;
            background-color: #EE5684 ;
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
            /* border: 1px solid red; */
            text-align: center;
            color:  #316FF6;
            font-size: 1.8rem;
            /* line-height: 2rem; */
            border-radius: 50%;
            margin: 1rem;
            padding: 0.3rem;
           
        }
        .box .icon a:first-child{
            color: red;
        }

        .box .icon {
            /* border:  1px solid green; */
            text-align: center;
            /* height: 3rem; */
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
    .box .log {
        /* border:  1px solid red; */
        display: flex;
        /* justify-content: space-evenly; */
        height: 2rem;
        /* text-align: center; */
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
        /* margin-right: rem; */
        font-size: 0.9rem;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
        
    </style>
</head>
<body>
    <form method="post">
        <div class="box">
            <div class="show">
                <p><?php echo $mes;   ?></p>
            </div>
            <div class="text">
                <h2>Log In</h2>
            </div>
            <div class="user">
                <input type="text" placeholder="Name" name="username" value="<?php echo $_SESSION['username'] ; ?>">
                <label for="">Username Email</label>
            </div>
            <div class="pass">
                <input type="password" placeholder="pass" name="password">
                <label for="">Password</label>
            </div>
            <div class="btn">
                <button type="submit">LOG IN</button>
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
            <a href="http://10.10.10.10/Nikhil/phpMySQL/signup.php">SIGNUP</a>
          </div>
           </div>
      
        </div>
    






    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>