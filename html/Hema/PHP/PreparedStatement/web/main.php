<?php
session_start();
session_regenerate_id();

if(isset($_SESSION['fullname']) && isset($_SESSION['username']) && isset($_SESSION['email'])){
    $username=$_SESSION['username'];
    $fullname=$_SESSION['fullname'];
    $email=$_SESSION['email'];
}
else{
    session_destroy();
    header("location:login.php");
    die();
}



if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
    die();
    // exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>

    <h1>Hi, <?php echo $fullname ; ?></h1>


    <a href="?logout=1">Logout</a>

</body>
</html>