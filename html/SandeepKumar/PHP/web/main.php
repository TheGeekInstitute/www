<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    $username=$_SESSION['username'];

    echo '<h1>Hi, ' . $username . '</h1> <br>';
    echo '<a href="?logout=1">Logout</a>';

}
else{
    header("location:index.php");

}

if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");

}



?>