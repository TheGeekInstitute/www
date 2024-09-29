<?php
$conn=mysqli_connect("localhost","root","toor","dataHema");

$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST["username"]) && !empty($_POST["username"])){
        $username=$_POST["username"];


    if(isset($_POST["fullname"]) && !empty($_POST["fullname"])){
            $fullname=$_POST["fullname"];


    if(isset($_POST["password"]) && !empty($_POST["password"])){
                $password=$_POST["password"];


    if(isset($_POST["email"]) && !empty($_POST["email"])){
                    $email=$_POST["email"];


    if(isset($_POST["salary"]) && !empty($_POST["salary"])){
                        $salary=$_POST["salary"];

    if(isset($_POST["address"]) && !empty($_POST["address"])){
                            $address=$_POST["address"];



                if(isset($_POST["password"]) && !empty($_POST["password"])){
                    $password=$_POST["password"];   
                    $sql="SELECT `User Name`, `Full Name`, `Password`, `Email Id`, `Salary`, `address` FROM `student` WHERE `User Name`='$username' OR `Email Id`='$email'";
                    
                    $query=mysqli_query($conn,$sql);

                    if($query){
                        if(mysqli_num_rows($query)>0){
                            $data=mysqli_fetch_assoc($query);
                            if($data=[$username]==$username){
                               $msg="username Alredy teken";
                            }
                            else{
                                $msg="email alredy registered";
                            }
                        }

                       
                        $sql="INSERT INTO `student`(`User Name`, `Full Name`, `Password`, `Email Id`, `Salary`, `address`)  VALUES ('$username','$fullname','$password','$email','$salary','$address')";
                        $query=mysqli_query($conn,$sql);

                        if($query){
                            $msg="Registration Successfully";
                        }
                        else{
                            $msg="Server Busy";
                        }
                    }

            
        }
        else{
            $msg="Please Enter address";
        }
    }
    else{
        $msg="Please Enter salary";
    }
}
}
else{
    $msg="Please Enter email";
}
}

else{
    $msg="Please Enter password";
}

}  
else{
    $msg="Please Enter fullname";
}
    }
else{
    $msg="Please Enter username";
}


}

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
            border:1px solid black;
            background-color: rgba(128, 128, 128, 0.753);
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
        <h1>Sign-up</h1>

        <div class="msg">
        <?php  echo $msg; ?>
        </div>

        <form action="" method="post">
            <label for="">User Name</label>
            <input type="text" name="fullname">
            <label for="">Full name</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="password" name="password">
            <label for="">Email Id</label>
            <input type="email" name="email">
            <label for="">salary</label>
            <input type="salary" name="salary">
            <label for="">address</label>
            <input type="text" name="address">
            
            <input type="submit" value="Signup">
        </form>

        <a href="./login.php">Login</a>
    </div>
    
</body>
</html>