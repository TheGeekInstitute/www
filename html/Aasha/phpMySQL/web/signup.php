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
    <title>Signup</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box ;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .container{
            
            width: 300px;
            margin: 150px auto;
            text-align: center;
            background-image: url("https://cdn.pixabay.com/photo/2016/04/18/16/22/watercolour-1336856_960_720.jpg");
            background-size: cover;
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
            margin: 10px 0;
            height:25px;
            
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
        <h1>Signup</h1>
        <p><?php echo $msg; ?></p>
        <form method="post">
            <label>Full Name</label>
            <input type="text" name="fullname">

            <label>Username</label>
            <input type="text" name="username">
            <label>Email</label>
            <input type="email" name="email">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" value="Signup">
        </form>

    </div>

</body>
</html>