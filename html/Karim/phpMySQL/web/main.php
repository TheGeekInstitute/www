<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['fullname'])){
    $username=$_SESSION['username'];
    $fullname=$_SESSION['fullname'];
}
else{
    header("location:login.php");
}



if(isset($_GET['logout'])){
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

<h1>
    Hello , 
    <?php
    echo $fullname;
    ?>
</h1>



<a href="?logout=1">Logout</a>
</body>
</html>