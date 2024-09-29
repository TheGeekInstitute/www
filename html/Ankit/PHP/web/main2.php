<?php
session_start();
if( isset($_SESSION['firstname']) && isset($_SESSION['lastname'])){
    echo "HELLO Wellcome." . $_SESSION['firstname'] . $_SESSION['lastname'];
}

    else{
        header("location:login2.php");
    }
    if(isset($_GET['logout'])){
        session_destroy();
        header("location:login2.php");
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            background-color:lightgreen;
        }
        .box{
            
            border-radius:10px;
            border:2px solid black;
            text-align:center;
            background-color:cyan;
            padding:10px;
            margin-top:100px;
        }
        p{
            font-family:cursive;
            
        }
        h1{
            text-decoration:underline;
            font-family:cursive;

        }
        a{
            border:2px solid black;
            color:black;
            padding:10px;
            background-image:linear-gradient(blue,red,yellow,cyan);
            border-radius:10px;
            text-decoration:none;
            font-family:cursive;
           


        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Lorem The Killer  </h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem dolorem cupiditate cumque nulla ad esse, nostrum sequi repellendus nam magnam impedit voluptas placeat amet quod architecto eaque labore debitis nihil.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem dolorem cupiditate cumque nulla ad esse, nostrum sequi repellendus nam magnam impedit voluptas placeat amet quod architecto eaque labore debitis nihil.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem dolorem cupiditate cumque nulla ad esse, nostrum sequi repellendus nam magnam impedit voluptas placeat amet quod architecto eaque labore debitis nihil.
        </p>
        <a href="?logout=1">LOGOUT</a>
    </div>
    
</body>
</html>