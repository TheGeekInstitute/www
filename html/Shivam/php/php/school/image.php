<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Choose file : <input type="file" name="image">
        <input type="submit" >
    </form>
    
</body>
</html>

<?php

$con=mysqli_connect("localhost","root","toor","shukla");
if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
    $tmp=$_FILES['image']['tmp_name'];
    $ext=strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));
    $name=bin2hex(random_bytes(10));
    $dest="image/".$name .".".$ext;
    

if($ext== "png" || $ext=="jpg" || $ext== "jepg" || $ext== " web"){
    $sql="INSERT INTO `image`(`image`) VALUES ($dest)";
    if(mysqli_query($con,$sql) && move_uploaded_file($tmp,$dest)){
        echo "File has been uploded";
    }
    else{
        echo " Invalid file";
    }
}
$sql="SELECT * FROM `image`";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
if($num >0){
    while($data=mysqli_fetch_assoc($query)){
        echo'
        <img src="./'.$data['image'] .'"alt="aaa">';
    }
    
}
else{
    echo " No image Found";
}
}

?>