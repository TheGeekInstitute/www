<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
        $fullname=$_POST['fullname'];

        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $gender=$_POST['gender'];

            if(isset($_POST['username']) && !empty($_POST['username'])){
                $username=$_POST['username'];

                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email=$_POST['email'];

                    if(isset($_POST['password']) && !empty($_POST['password'])){
                        $password=$_POST['password'];
                    
                        $josn_data = file_get_contents("data.json");
                     
                      
                        $new_data= ["fullname"=>$fullname,"gender"=>$gender,"username"=>$username,"email"=>$email,"password"=>$password];

                        $new_json_data[]=json_decode($josn_data,true);
                        $new_json_data[]=$new_data;

                        $new_json_enc = json_encode($new_json_data,JSON_PRETTY_PRINT);

                        if(file_put_contents("data.json",$new_json_enc)){
                            $msg="Regstration Completed";
                        }
                        else{
                            echo "Server Busy";
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
            $msg="Please Choose a gender";
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
    <title>Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .container{
            /* border: 1px solid black; */
            width: 300px;
            margin: 100px auto;
            text-align: center;
            border-radius: 10px;
            background-image: url("https://images.pexels.com/photos/7130469/pexels-photo-7130469.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding:10px 5px;
            box-shadow: 0px 0px 10px black;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form label{
            font-size: large;
            display: block;
            /* border: 1px solid red; */
            width: 70%;
            text-align: left;
            margin: 5px 0;
        }

        .container form input,
        .container form select{
            width: 70%;
            outline: none;
            border: 1px solid black;
            border-width: 1px 1px 4px 1px;
            border-radius: 3px;
            padding: 3px;
            font-size: large;
            margin: 3px 0;
            background-color: transparent;
        }

        .container form #btn{
            color: white;
            background-color: royalblue;
            width: 50%;
            cursor: pointer;
        }

        .container form #btn:hover{
            background-color: cornflowerblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Regstration Form</h1>
        <p><?php  echo $msg; ?></p>
        <form action="" method="POST">
            <label for="">Full Name</label>
            <input type="text" name="fullname">
            <label for="">Gender</label>
            <select name="gender" id="">
                <option value="">Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Email</label>
            <input type="email" name="email">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" id="btn" value="Register">
        </form>
    </div>
</body>
</html>