<?php
$msg="";
$conn=mysqli_connect("localhost","root","toor","Aasha");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $fullname=$_POST['fullname'];

        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=$_POST['username'];
    
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email=$_POST['email'];
        
                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password=$_POST['password'];
                    
                    $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `users` WHERE `username`='$username' OR `email`='$email'";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                           if(mysqli_num_rows($query)==1){
                            $data=mysqli_fetch_assoc($query);
                            if($data['username']==$username){
                                 $msg="Username Already Taken.";
                            }
                            else{
                                $msg="Email Already Registered";
                            }
                           }
                           else{
                                $sql="INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";
                                $query=mysqli_query($conn,$sql);
                                if($query){
                                 $msg="Regstration Compeleted , You can Now Login";

                                }else{
                                    $msg="Server Busy !!! Try After Some Time.";

                                }
                           } 

                    }
                    else{
                    $msg="Server Busy !!! Try After Some Time.";

                    }
                    
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
        $msg="Please Username";
    }
}
else{
    $msg="Please Enter Full Name";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        .container{
            width: 300px;
            margin: 150px auto;
            text-align: center;
            background-image: url("https://img.freepik.com/premium-photo/abstract-black-textured-background-with-scratches_130265-12474.jpg");
            background-size: cover;
            background-position: center;
            padding: 10px;
            border-radius: 10px;
            
        }
         .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

         }
         .container h1{
            color: white;
            text-transform: uppercase;
            font-family: 'Courier New', Courier, monospace;
            text-decoration: underline;
            text-shadow: 0px 0px 2px rgb(116, 18, 51),
            0px 0px 5px yellow;
         }
         .container form input{
            margin: 5px;
            width: 200px;
            height: 30px;
            padding: 5px;
            outline: transparent;
            border: none;
            border-style: solid;
            border-color: black;
            border-width: 1px 1px 1px 1px;
            border-radius: 3px;
            font-size: 16px;
            letter-spacing: 1px;
            background-color:pink;

         }
         .container form input[type="submit"]{
            background-color: rgb(19, 70, 70);
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
            /* border: 1px solid red; */
            margin-bottom: -5px;
            color: white;
         }
    </style>
</head>
<body>
    <div class="container">
        <h1>signup</h1>
        <p>Invalid Username</p>

        <form>
             <label>fullname</label>
             <input type="text"name="fullname">

             <label>username</label>
             <input type="text"name="username">

             
             <label>imail</label>
             <input type="text"name="imail">


             <label>password</label>
             <input type="text"name="password">

             <input type="submit"value="signap">


        </form>
    </div>
</body>
</html>