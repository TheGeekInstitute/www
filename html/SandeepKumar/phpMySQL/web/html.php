<?php
$msg="";
$conn=mysqli_connect("localhost","root","toor","SANDEEP");

  if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $name=$_POST['fullname'];

        if(isset($_POST['username']) && !empty($_POST['username'])){
         $username=$_POST['username'];


         if(isset($_POST['email']) && !empty($_POST['email'])){
            $email=$_POST['email'];

            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);


                $sql="SELECT `username`, `email`, `password` FROM `Students form` WHERE `username`='$username' OR `email`='$email'";


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
                        //Insert;
                        $sql="INSERT INTO `Students form`(`name`, `username`, `email`, `password`) VALUES ('$name','$username','$email','$password')";
                        $query=mysqli_query($conn,$sql);
                        if($query){
                            $msg="Registration Successfully";
                        }
                        else{
                            $msg="Can Not register At This Time <br> Server Busy";
                        }

                    }

                }
                else{
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
  $msg="Please Enter Name";
}
}
                    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>
        Student form
    </title>
    <style>
            .container{
                border: 3px solid black;
                margin: 0 300px;
                border-radius:15px;
                height:530px;
                width:350px;
                background-color: aqua;

            }

         .container .form{
             padding: 20px;
             margin:0 0 0 70px ; 
             border: 2px solid black;
             border-radius:10px;
             
            }

            .container button{
                padding:10px;
                background-color: blue;
                margin: 0 0 0 130px;
                border-radius:10px;
                
            }

            .container h1{
                margin: 0 0 0 70px;
                
                
            }
        </style>
</head>
<body>
    
    <div class="container">

    <form method="POST">
        <br>
        <h1>Student form</h1>

        <?php $msg; ?>
        

        <!-- <input type="number" class="form" placeholder="Roll no." name="roll_no" > -->
        <br><br>
        <input type="text" class="form" placeholder="Fullname" name="fullname">
        <br><br>
        <input type="text" class="form" placeholder="Username" name="username">
        <br><br>
        <input type="email" class="form" placeholder="Email" name="email">
        <br><br>
        <input type="password" class="form" placeholder="Password" name="password">

        <br><br>
        <button value="submit">Signup</button>
       
    </form>
    </div>



    


   
</body>
</html>