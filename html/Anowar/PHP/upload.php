<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
    $size = $_FILES['image']['size'] / (1024 * 1024);
    $dest = "uploads/".bin2hex(random_bytes(10)).".".$ext;

    $valid_ext=["jpg",'png','jpeg','webp','gif'];
    
    if(in_array($ext,$valid_ext)){
        if($size<=2){

            if(move_uploaded_file($tmp,$dest)){
                echo 'File has been Uploaded';
            }
            else{
                echo "can not Upload File at This time Server Busy";
            }

        }
        else{
            echo "Image Should be less than or Equal to 2 MB";
        }
    }
    else{
        echo 'File is not an Image';
    }
   
   




}
?>