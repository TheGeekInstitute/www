<?php
session_start();
$edit=false;
if(isset($_SESSION['login']) && $_SESSION['login']=true){
    $edit=true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <style>
*{
    padding: 0;
    margin: 0;
}


.nav{
    background-color: black;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 7vh;
}

.nav ul li{
    display: inline;

}

.nav ul li a{
    text-decoration: none;
    color: white;
    margin: 3px;
    font-weight: 600;

}





.footer{
    background-color: black;
    color: white;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 30px;
    position: fixed;
    text-align: center;
}
.content{
    margin: 1vw;
    border: 2px solid black;
    height: 150px;
    width: 270px;
    overflow: hidden;
    background-color: beige;
    display: inline-block;
}
.content a {
    text-decoration: none;

}
content{
    margin: 20px;
}
    </style>
<body>
    <div class="nav">
    <h1 id="logo">logo</h1>
    <h2 class="heading">Geek Academy</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="./post.php">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <br><br>
    </div>
    <div class="post">
    <?php
require("admin/db.php");



if($edit){
    $edit= '<a href="http://192.168.1.4/Ritu/website/admin/editpost.php?id=">Edit</a>';
}
else{
    $edit="";
}


$sql="SELECT * FROM `blog`";
$query=mysqli_query($conn,$sql);
if($query){
    while($data=mysqli_fetch_assoc($query)){
        echo '
        <div class="content">
        <h1>'.substr($data['heading'],0,20).'</h1>
        
                <p>'.substr($data['post'],0,50).' 
                <br>    
                <a href="#">Read More</a> <br>
                <a href="http://192.168.1.4/Ritu/website/admin/editpost.php?id='.$data['id'].'">Edit</a>
                </p>
                </div>
                ';
            }
        }
        ?>
</div>

    
    
    <div class="footer">
        <p>Copyright &copy; All Rights Reserved</p>
    </div>
    </body>
    </html>
    