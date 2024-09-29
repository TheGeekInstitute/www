<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){


    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];

        if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];

            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $gender=$_POST['gender'];
                if(isset($_POST['email']) && !empty($_POST['email'])){
                    $email=$_POST['email'];
                    
                    if(isset($_POST['phone']) && !empty($_POST['phone'])){
                        $phone=$_POST['phone'];

                        if(isset($_POST['password']) && !empty($_POST['password'])){
                            $password = $_POST['password'];
                        }
                        else{
                            $msg="Please Enter Password";
                        }
                    }
                    else{
                        $msg="Please Enter Phone Number";
                    }
                }
                else{
                    $msg="Please Enter Email Address";
                }
 
            }
            else{
                $msg="Please Choose a gender";
            }

        }
        else{
            $msg="Please Enter Last Name";
        }

    }
    else{
        $msg="Please Enter First Name";
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
        body{
            background-color: rgb(228, 250, 242);
        }

        .container{
     
            width: 20rem;
            margin: 5rem auto;
            box-shadow: 0px 0px 50px black;
            border-radius: .3rem;
            background-image: url("https://images.pexels.com/photos/7130498/pexels-photo-7130498.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: .5rem 0;

        }
        .container h1{
            text-align: center;
            margin: 1rem 0;
            padding: .5rem;
        }

        .container form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container form input,
        .container form select
        {
            background-color: transparent;
            border: none;
            border: 1px solid black;
            border-width: 1px 1px 3px 1px;
            outline: none;
            height: 2rem;
            width: 70%;
            font-size: large;
            padding: 0 5px;
            border-radius: 2px;
            margin: .2rem 0;
        }

        .container form label{
            display: block;
            width: 70%;
            font-weight: 900;
            font-size: large;
            margin: .3rem 0;
        }

        .container form input[type="submit"]{
            background-color: royalblue;
            color: white;
            width: 10rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Regstration Form</h1>
        <p style="text-align:center;"><?php echo $msg; ?></p>
        <form action="" method="POST">
            <label>First Name</label>
            <input type="text" name="firstname">
            <label>Last Name</label>
            <input type="text" name="lastname">
            <label>Gender</label>
            <select name="gender" >
                <option value="">Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
            <label>Email</label>
            <input type="email" name="email">
            <label>Phone</label>
            <input type="number" name="phone">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit">
        </form>
    </div>
</body>
</html>