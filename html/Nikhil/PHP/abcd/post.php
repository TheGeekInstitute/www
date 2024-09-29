<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ritu's Blog</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
<div class="nav">
    <h1 id="logo">Logo</h1>
    <h1 class="name">Ritu's Blog</h1>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="./post.php">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>
<?php

require("db.php");

if(isset($_GET['id']) && !empty($_GET['id']) && ctype_digit($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM `blog` WHERE `id`='$id'";
    $query=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($query);

    echo '
    <div class="data">
        <h1>'.$data['heading'].'</h1>
        <p>'.$data['post'].'</p>
    </div>
    
    
    ';
}
else{
    header("location:index.php");
}

?>
<div class="footer">
    <p>Copyright &copy; All Rights Reserved</p>
</div>

</body>
</html>