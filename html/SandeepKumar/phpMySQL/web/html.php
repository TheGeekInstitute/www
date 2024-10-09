<?php
$msg="";
$conn=mysqli_connect("localhost","root","toor","SANDEEEP");





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>
        <style>
            .container{
                border: 2px solid black;
            }
         .container .form{
             padding: 20px;
             margin: 150px 150px;
             

            }
        </style>
    </title>
</head>
<body>
    
    <div class="container">
        <form method="POST"></form>
        <h1>Student form</h1>
        <input type="number" class="form" placeholder="Roll no." name="roll_no" >
        <br><br>
        <input type="text" class="form" placeholder="Fullname" name="fullname">
        <br><br>
        <input type="text" class="form" placeholder="Username" name="username">
        <br><br>
        <input type="email" class="form" placeholder="Email" name="email">
        <br><br>
        <input type="password" class="form" placeholder="Password" name="password">
       
    </form>
    </div>
</body>
</html>