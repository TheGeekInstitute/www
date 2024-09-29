<?php
$error=false;
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_POST['fullname']) && !empty($_POST['fullname'])){
    $fullname=$_POST['fullname'];

    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];

        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $gender=$_POST['gender'];
            
                
            
                
            

            

        }
        else{
            $error=true;
            $msg="Please Choose Gender";
        }

    }
    else{
        $error=true;
        $msg="Please Enter Username";
    }

   }
   else{
    $error=true;
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
        }

        .container{
            border: 1px solid black;
            width: 20rem;
            margin: 150px auto;
            text-align: center;
            padding: 10px 0;
            border-radius: 3px;
            box-shadow: 3px 3px black;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form label{
            /* border: 1px solid black; */
            display: block;
            width: 75%;
            text-align: left;
            font-size: large;
            margin: 3px 0;
        }

        .container form input,
        .container form select{
            width: 75%;
            margin: 2px 0;
            border: 1px solid black;
            padding: 2px 5px;
            height: 2rem;
            border-radius: 3px;
            outline: transparent;
            border-width: 1px 1px 3px 1px;
            box-shadow: 3px 3px black;

        }

        .container form input[type="submit"]{
            width: 10rem;
            margin-top: 10px;
            background-color: royalblue;
            color: white;
            font-size: large;
            font-weight: 900;
            cursor: pointer;
        }

        .container .error{
        
            height: 2rem;
            
        }

        .error p{
            font-size: large;
            line-height: 2rem;
            color: red;
        }
    </style>
</head>
<body>
 
    <div class="container">
        <h1>Registration Form</h1>

        <div class="error">
            <?php
            if($error==true){
                echo '
                <p>'.$msg.'</p>
                ';
            }
            ?>
        </div>

        <form action="" method="POST">
            <label for="">FullName</label>
            <input type="text" name="fullname">
            <label>Username</label>
            <input type="text" name="username">

            <label for="">Gender</label>
            <select name="gender" id="">
                <option value="">Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>

            <label>Email</label>
            <input type="email" name="email">

            <label for="">Password</label>
            <input type="password" name="password" id="">

            <input type="submit" value="Register">
        </form>
    </div>

</body>
</html>