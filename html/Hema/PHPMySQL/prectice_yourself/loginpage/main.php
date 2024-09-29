<?php
session_start();
session_regenerate_id();

if(isset($_SESSION['Full Name']) && isset($_SESSION['Full Name']) && isset($_SESSION['Email Id'])){
    $fullname=$_SESSION['Full Name'];
    $username=$_SESSION['User Name'];
    $emailid=$_SESSION['Email Id'];
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
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
<h1>Hi, <?php echo $fullname ; ?></h1>


<a href="?logout=1">Logout</a>
</body>
</html>