<?php
$fullname="";
session_start();
session_regenerate_id();
if(isset($_SESSION['fullname']) && isset($_SESSION['username'])){

    $username=$_SESSION['username'];
    $fullname=$_SESSION['fullname'];


}
else{
    header("location:login.php");
}


#logout
if(isset($_GET['log'])){
    session_destroy();
    header("location:login.php");
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
    <h1>Hello,

        <?php
        echo $fullname;
        ?>

    </h1>
    <a href="./logout.php">Logout</a>
    <br><br>
    <a href="?log=1">Logout</a>

</body>
</html>