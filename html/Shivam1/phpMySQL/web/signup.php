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
            margin: auto;
        }

        form{
            /* border: 1px solid black; */
            height: 25rem;
            width: 20rem;
            display: flex;
            flex-direction: column;
            margin-top: calc(50% - 12.5rem);
            border-radius: 1rem;
            background-color: rgba(40, 160, 140, 0.767);
            box-shadow: 3px 4px 5px;
        }

        label{
            font-size: 20px;
            font-weight: 600;
            font-family:'Times New Roman', Times, serif;
            margin-bottom: -5px;
            margin-top: 0;
        }
        input{
            height: 2rem;
            width: 12rem;
            border-radius: 5px;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
            padding-left: 10px;
            
        }
        h1{
            text-shadow: 2px 3px 5px;
        }

        input[type=submit]{
            background-color: rgb(177, 21, 197);
            width: 8rem;
            border-radius: 15px;
            color: white;
            font-weight: 900;
            font-size: 20px;
            box-shadow: 5px 3px 4px black;
        }


    </style>

</head>
<body>
    <form action="" method="post">
        <h1>Signup</h1>
        <label for="">Full Name : </label>
        <input type="text" name="fullname">
        <label for="">Email : </label>
        <input type="email" name="email">
        <label for="">Username : </label>
        <input type="text" name="username">
        <label for="">Password : </label>
        <input type="password" name="password">
        <input type="submit" value="Signup">
    </form>

<?php
// require "db.php";
$conn=mysqli_connect("localhost",'root',"toor","Shivam");

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname'])){
        $fullname=$_POST['fullname'];
    
        if(isset($_POST['email'])){
            $email=$_POST['email'];

            if(isset($_POST['username'])){
                $username=$_POST['username'];

                if(isset($_POST['password'])){
                    $password=$_POST['password'];

                    $sql="SELECT `user_id`, `fullname`, `email`, `username`, `password` FROM `users` WHERE `username`='$username' OR `email`='$email'";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        if(mysqli_num_rows($query)==1){
                            $data=msyqli_fetch_assoc($query);
                            if($data['email']==$email){
                                echo 'Email Already Registered';
                            }
                            else{
                                echo "Username Already taken";
                            }
                        }
                        else{
                            //Insert
                          
                            $insert_sql="INSERT INTO `users`( `fullname`, `email`, `username`, `password`) VALUES ('$fullname','$email','$username','$password')";
                            $insert_query=mysqli_query($conn,$insert_sql);
                            if($insert_query){
                                 
                                    echo 'regstration Successfully';
                               
                                 
                            }
                            else{
                                echo "Server Busy, Try After Some time";

                            }
                        }
                    }
                    

                }
                else{
                    echo "Please Enter Email";
                }

            }
            else{
                echo "Please Enter Username";
            }

        }
        else{
            echo "Please Enter Email";
        }

    }
    else{
        echo "Please Enter Full Name";
    }
}


?>

</body>
</html>

