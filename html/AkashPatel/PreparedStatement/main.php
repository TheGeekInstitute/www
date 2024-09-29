<?php
session_start();
define("abcd",true);
$error=false;
$msg="";
require("db.php");
if(isset($_SESSION['auth'])  && $_SESSION['auth']==true && isset($_SESSION['user_id'])){
$user_id=$_SESSION['user_id'];



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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <a href="?logout=1">Logout</a>
</body>
</html>