<?php
$error=false;
$msg="";
$color="";
$conn=mysqli_connect("localhost","root","toor","Karim");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        if(strlen($_POST['fullname'])>=5 && strlen($_POST['fullname'])<=60){
            $fullname=$_POST['fullname'];

            if(isset($_POST['username']) && !empty($_POST['username'])){
                if(strlen($_POST['username'])>=5 && strlen($_POST['username'])<=10){
                    
                    $username=$_POST['username'];

                    if(isset($_POST['email']) && !empty($_POST['email'])){
                        if(strlen($_POST['email'])>=10 && strlen($_POST['email'])<=100 && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

                            $email=$_POST['email'];

                            if(isset($_POST['password']) && !empty($_POST['password'])){

                                if(strlen($_POST['password'])>=4 && strlen($_POST['fullname'])<=20){

                                    $password=$_POST['password'];

                                    //database
                                    $sql="SELECT `user_id`, `fullname`, `username`, `email`, `password` FROM `users` WHERE `username`='$username' OR `email`='$email'";
                                    $query=mysqli_query($conn,$sql);
                                    if($query){
                                        if(mysqli_num_rows($query)>0){
                                            $data=mysqli_fetch_assoc($query);
                                            if($data['username']==$username){
                                                $error=true;
                                                $color="red";
                                                $msg="Username Already Taken";
                                            }
                                            else{
                                                $error=true;
                                                $color="red";
                                                $msg="Email Already Registered";
                                            }
                                        }
                                        else{
                                            //Insert
                                            $sql="INSERT INTO `users`( `fullname`, `username`, `email`, `password`) VALUES ('$fullname','$username','$email','$password')";
                                            $query=mysqli_query($conn,$sql);
                                            if($query){
                                                $error=true;
                                                $color="green";
                                                $msg="Regstration Completed";
                                            }

                                        }
                                    }

                                }
                                else{
                                    $error=true;
                                    $color="red";
                                    $msg="password Should Be min 4 and max 20 chars";
                                }

                            }
                            else{
                                $error=true;
                                $color="red";
                                $msg="Please Password";
                            }
                        }
                        else{
                            $error=true;
                            $color="red";
                            $msg="Invalid Email";
                        }
                    }
                    else{
                        $error=true;
                        $color="red";
                        $msg="Please Enter Email";
                    }


                }
                else{
                    $error=true;
                    $color="red";
                    $msg="Invalid Username";
                }

            }
            else{
                $error=true;
                $color="red";
                $msg="Please Enter Username";
            }

        }
        else{
            $error=true;
            $color="red";
            $msg="Invalid Full Name";
        }

    }
    else{
        $error=true;
        $color="red";
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
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            border: 2px solid black;
            width:20rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 150px auto;
            padding: 5px;
            border-radius: 10px;
        }

        .container p{
            font-size:  x-large;
            margin: 7px 0;
          
        }

        .container h1{
            margin:10px 0;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }



        .container form input{
            border: none;
            border: 1px solid black;
            border-width: 1px 1px 3px 1px;
            padding: 3px;
            font-size: large;
            width: 15rem;
            margin: 5px 0;
            outline: none;
        }

        .container form label{
            display: block;
            width: 15rem;
            font-size: large;
            /* margin: 5px 0; */
            font-weight: 900;
        }

        .container form input[type="submit"]{
            width: 10rem;
            background-color: royalblue;
            color: white;
            cursor: pointer;
            padding: 7px 0;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Regstration Form</h1>
        <?php
        if($error){
            echo '
            <p style="color:'.$color.';">'.$msg.'</p>
            ';
        }
        ?>
        <form action="" method="POST">
            <label for="">Full Name</label>
            <input type="text" name="fullname">
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Email</label>
            <input type="email" name="email">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Signup">
            <a href="./login.php">Login</a>
        </form>
    </div>

</body>
</html>