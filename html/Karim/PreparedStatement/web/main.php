<?php
session_start();
session_regenerate_id();
if(isset($_SESSION['auth']) && isset($_SESSION['fullname']) && isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $fullname=$_SESSION['fullname'];
}
else{
    session_destroy();
    header("location:login.php");
}



if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
}


?>

<h1>Hello, <?php echo $fullname; ?></h1>

<a href="?logout=1">Logout</a>