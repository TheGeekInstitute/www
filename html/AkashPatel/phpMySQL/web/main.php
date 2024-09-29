<?php
session_start();
session_regenerate_id();
if(isset($_SESSION['username']) && isset($_SESSION['fullname'])){
    $username=$_SESSION['username'];
    $fullname=$_SESSION['fullname'];

    echo $fullname;


}
else{
    header("location:login.php");
}


if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
}



?>
<a href="?logout=1">Logout</a>