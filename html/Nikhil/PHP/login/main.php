<?php
session_start();
session_regenerate_id();
if(isset($_SESSION['login']) && isset($_SESSION['fullname']) && $_SESSION['login']==true){
    $name=$_SESSION['fullname'];
}
else{
    
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
    <h1> Hi, 
        <?php
      echo  $name;
        ?>
    </h1>

<a href="./logout.php">Logout</a>
</body>
</html>