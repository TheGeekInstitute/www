<?php
// echo "<pre>";
// print_r($_SERVER);
// echo bin2hex(random_bytes(10));
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(!empty($_FILES['image'])&& $_FILES['image']['size']>0){
        $tmp=$_FILES['image']['tmp_name'];
        $name=bin2hex(random_bytes(10));
        $ext=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $dest="uploads/".$name . "." .$ext;
        $pointer=fopen('data.txt',"a");
        fwrite($pointer,$dest."\n");
        fclose($pointer);
        if(move_uploaded_file($tmp,$dest)){
            echo "Files has been uploded";
            // echo  "<br>"."SIZE".$_FILES['image']['size'];
            // echo  "<br>".$_FILES['image']['tmp_name'];
        }

    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi file uploded....</title>
    <style>
    img{
        height: 70px;
        width: 100px;
        border: 1px solid blue;
    }
</style>
</head>
<body>
    <form method="POST" enctype=multipart/form-data>
    FILE NAME : <input type="text" name="file">
        <input type="file" name="image"> <br> <br>
        <input type="submit" value="Uplode"> <br> <br>
    </form>
    <br><br><br>

<?php

$pointer=fopen("data.txt","r");
while(!feof($pointer)){
    echo '<img src="./'.fgets($pointer).'">';
}
fclose($pointer);



?>
</body>
</html>
