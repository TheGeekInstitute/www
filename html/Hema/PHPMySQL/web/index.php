<?php
$conn=mysqli_connect("localhost","root","toor","hema");

$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $fullname=$_POST['fullname'];

        if(isset($_POST['username']) && !empty($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email=$_POST['email'];

                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password=$_POST['password'];
                    $sql="SELECT  `username`, `email`FROM `signup` WHERE `username`='$username' OR `email`='$email'";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        if(mysqli_num_rows($query)>0){
                            $data=mysqli_fetch_assoc($query);
                            if($data['username']==$username){
                                $msg="Username Already Taken";
                            }
                            else{
                                $msg="Email Already Registered";
                            }

                        }
                        else{
                            //Insert
                            $sql="INSERT INTO `signup`(`fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";
                            $query=mysqli_query($conn,$sql);
                            if($query){
                                $msg="Registration Successfully";
                            }
                            else{
                                $msg="Server Busy";
                            }

                        }

                    }else{
                        $msg="Server Busy";
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
            $msg="Please Enter Username";
        }
    }
    else{
        $msg="Please Enter Full Name";
    }
}

mysqli_close($conn);

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
            box-sizing: border-box;
        }

        .container{
          
            text-align: center;
            padding: 5px;
            width: 270px;
            margin: 150px auto;
            border-radius: 10px;
        }
        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form label{
            display: block;
          
            width: 250px;
            text-align: left;
            font-weight: 900;
            font-size: large;
            margin-block: 5px;
        }

        .container form input{
            border: 1px solid black;
            outline-style: none;
            width: 250px;
            padding: 2px 5px;
            height: 35px;
            margin-block: 5px;
            font-size: large;
        }

        .container .msg{
         
            height: 30px;
            text-align: center;
        }

        .container .msg p{
            line-height: 30px;
            font-size: large;
        }

        .container form input[type="submit"]{
            background-color: royalblue;
            color: white;
            width: 100px;
        }


    </style>
</head>
<body>
    
    <div class="container">
        <h1>Signup</h1>

        <div class="msg">
            <p><?php echo $msg ; ?></p>
        </div>

        <form action="" method="post">
            <label for="">Full Name</label>
            <input type="text" name="fullname">
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Email</label>
            <input type="email" name="email">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Signup">
        </form>

        <a href="./login.php">Login</a>
    </div>

</body>
</html>