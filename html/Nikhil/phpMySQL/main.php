<?php
$conn=mysqli_connect("localhost","root","toor","Nikhil");
session_start();
if(isset($_SESSION['username'])){
$username= $_SESSION['username'];
}
else{
    header("location:5.php");
}

$sql="SELECT `firstname`, `lastname`, `email`, `phone`, `username`, `password` FROM `users` WHERE `username`='$username'";
$query=mysqli_query($conn,$sql);
if($query){
    $data=mysqli_fetch_assoc($query);
}
else{
    header("location:5.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
        }
        body{
            background-color: rgba(0, 255, 255, 0.568);
        }
        .box{
            /* border:  1px solid red; */
            align-items: center;
            margin: auto;
            display: flex;
            flex-direction: column;
            padding: 2rem 3rem;
            background-color: rgba(255, 228, 196, 0.479);
            width: 35rem;
           margin-top: 5rem;
           border-radius: 1rem 5rem;
           box-shadow:  2px 2px 2px gray;



        }
        .box .fname {
            /* border:  1px solid black; */
            display: flex;
            justify-content: space-around;
            /* width: 15rem; */
            color:  red;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            font-weight: 900;
        }
        .box .fname h4{
            color:  green;
            position: relative;
            margin-left: 1rem;
        }
        .box .lname {
            /* border:  1px solid black; */
            display: flex;
            justify-content: space-around;
            /* width: 15rem; */
            color:  red;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            font-weight: 900;
        }
        .box .lname h4{
            color:  green;
            position: relative;
            margin-left: 1rem;
        }
        .box .email {
            /* border:  1px solid black; */
            display: flex;
            justify-content: space-around;
            /* width: 15rem; */
            color:  red;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            font-weight: 900;
        }
        .box .email h4{
            color:  green;
            position: relative;
            margin-left: 1rem;
        }
        .box .Phone{
            /* border:  1px solid black; */
            display: flex;
            justify-content: space-around;
            /* width: 15rem; */
            color:  red;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            font-weight: 900;
        }
        .box .Phone h4{
            color:  green;
            position: relative;
            margin-left: 1rem;
        }
        .box .use {
            /* border:  1px solid black; */
            display: flex;
            justify-content: space-around;
            /* width: 15rem; */
            color:  red;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            font-weight: 900;
        }
        .box .use h4{
            color:  green;
            position: relative;
            margin-left: 1rem;
        }
        .box .pass {
            /* border:  1px solid black; */
            display: flex;
            justify-content: space-around;
            /* width: 15rem; */
            color:  red;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            font-weight: 900;
        }
        .box .pass h4{
            color:  green;
            position: relative;
            margin-left: 1rem;
        }
        .btn a{
            /* border: 1px solid red; */
            width: 25rem;
            display: block;
            margin: auto;
            background-color: rgba(0, 0, 255, 0.712);
            user-select: none;
            text-decoration: none;
            outline: none;
            color: white;
            text-align: center;
            height: 3rem;
            border-radius: 5rem;
            font-size: 2rem;
            margin-top: 2rem;
            font-weight: 900;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            line-height: 3rem;
            box-shadow: 2px 2px 2px gray;

            


        }
    </style>
</head>
<body>
    <nav>
        <div class="box">
            <div class="fname">
                <p>Frist Name :</p>
                <h4><?php echo $data['firstname'];  ; ?></h4>
            </div>
                <div class="lname">
                    <p>Last Name :</p>
                    <h4><?php echo $data['lastname'];  ; ?></h4>
                </div>
                <div class="email">
                    <p>Email :</p>
                    <h4><?php echo $data['email'];  ; ?></h4>
                </div>
                <div class="Phone">
                    <p>Phone :</p>
                   <h4><?php echo $data['phone'];  ; ?></h4>

                </div>
                <div class="use">
                  <p>Username :</p>
                  <h4><?php echo $data['username'];  ; ?></h4>

                </div>
                <div class="pass">
                    <p>Password :</p>
                    <h4><?php echo $data['password'] ; ?></h4>
                </div>
        </div>
    </nav>
    <div class="btn">
        <a href="./logout.php">Log Out</a>
    </div>
</body>
</html>