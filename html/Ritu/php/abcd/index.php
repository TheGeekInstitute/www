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
    <br><br>
</div>

<div class="content">
<div class="post">
<?php
session_start();
require("db.php");
$sql="SELECT * FROM `blog`";
$query=mysqli_query($conn,$sql);
// echo substr("lorem ispum dolor",5,10);
while($data=mysqli_fetch_assoc($query)){
    echo '
        <h2>'.substr($data['heading'],0,40).'.....</h2>
        <p>'.substr($data['post'],0,200).'....</p>
        <a href="./post.php?id='.$data['id'].'">Read More</a>    
        ';
        if(isset($_SESSION['login']) && $_SESSION['login']=true){
            echo '<a href="./edit.php?id='.$data['id'].'">Edit</a>';
        }
    }
    ?>
</div>

    

</div>


<div class="footer">
    <p>Copyright &copy; All Rights Reserved</p>
</div>
</body>
</html>