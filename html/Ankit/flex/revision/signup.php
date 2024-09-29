<?php
session_start();
if(isset($_POST['firstname']) && isset($_SESSION['lastname'])){
    echo " hello. " . $_SESSION['firstname'] . $_SESSION['lastname'];
}
else{
    header("location:login.php");
}
if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The Lorem</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur aliquid quaerat ipsam excepturi ipsa dicta adipisci optio expedita. Optio possimus reiciendis sequi et. Nostrum voluptate quis eveniet debitis. Molestias.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo facilis aliquam voluptatum autem, totam numquam cumque facere commodi quidem ratione perspiciatis ad quos fugit nulla! Sunt eveniet magnam labore praesentium!
    </p>
    <a href="?logout=1">Logout</a>
</body>
</html>