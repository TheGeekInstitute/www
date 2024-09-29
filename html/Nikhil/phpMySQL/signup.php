<?php

$mes="";
session_start();
$_SESSION['fullname']=$_SESSION['email']=$_SESSION['phone']=$_SESSION['username']="";

$conn=mysqli_connect("localhost","root","toor","Nikhil");


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];
        $_SESSION['fullname']=$name;
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email=$_POST['email'];
            $_SESSION['email']=$email;

            if(isset($_POST['phone']) && !empty($_POST['phone'])){
                if(strlen($_POST['phone'])==10){
                    $phone=$_POST['phone'];
                $_SESSION['phone']=$phone;

                    if(isset($_POST['username']) && !empty($_POST['username'])){
                        $username=$_POST['username'];
                    $_SESSION['username']=$username;

                        if(isset($_POST['password'])){
                            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                            



    $sql="SELECT `Full Name`, `Email`, `Phone`, `Username`, `Password` FROM `New User` WHERE `email`='$email' OR `phone`='$phone' OR `username`='$username'";
                                   
                        $query=mysqli_query($conn,$sql);
                        
                        if($query){
                            if(mysqli_num_rows($query)==1){
                                $data=mysqli_fetch_assoc($query);
                                if($data['Email']==$email){
                                    $mes="Email Already Registered";
                                     $_SESSION['email']="";
                                }
                                else if($data['Username']==$username){
                                    $mes="Username Already Taken";
                                }
                                else{   
                                    $mes="Phone Number Already Registered";
                                }

                            }
                            else{
                                $sql="INSERT INTO `New User`(`Full Name`, `Email`, `Phone`, `Username`, `Password`) VALUES('$name','$email','$phone','$username','$password')";
                                    $query=mysqli_query($conn,$sql);
                                    if($query){
                                        $mes="Regstration Successfully!!!!";
                                        session_destroy();
                                        header("location:tform.php");
                                    }
                                    else{
                                        $mes="Server Busy !!! Please Tragy After Some Time";

                                    }
                            }
                        }
                        else{
                            $mes="Server Busy !!! Please Tragy After Some Time";
                        }


                        }
                        else{
                            $mes="Enter Your Password";
                        }
    
                    }
                    else{
                        $mes="Enter Your Username";
                    }
                
                }
                else{
                    $mes="Invaid Phone Number";
                }

            }
            else{
                $mes="Enter Your Phone Number";
            }
        }
        else{
            $mes="Enter Your Email";
        }
    }
    else{
        $mes="Enter Your First Name";
    }
}







mysqli_close($conn);
?>



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
            /* border: 1px solid red; */
            height: 35rem;
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
            color: green;
        }
        .box .text h2{
            /* border: 1px solid blue; */
            width: 7rem;
            font-size: 1.4rem;
            font-size: 200;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left: 0.5rem;
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
            <p> <?php echo $mes;?></p>
            </div>
            <div class="text">
                <h2>SIGN UP</h2>
            </div>
            <div class="name">
                <input type="text" name="name" placeholder="ABCD" value="<?php echo $_SESSION['fullname']; ?>">
                <label for="">Full Name</label>
            </div>
            <div class="email">
                <input type="email" name="email"placeholder="ABCD" value="<?php echo $_SESSION['email']; ?>" >
                <label for="">Email</label>
            </div>
            <div class="phone">
                <input type="text" name="phone" placeholder="ABCD" value="<?php echo $_SESSION['phone']; ?>">
                <label for="">Phone Number</label>
            </div>
            <div class="use">
                <input type="text" name="username" placeholder="ABCD" value="<?php echo $_SESSION['username']; ?>">
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
            <a href="http://10.10.10.10/Nikhil/phpMySQL/login.php">LOGIN</a>
          </div>
           </div>
      


           <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>