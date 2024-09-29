<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" accept="image/*" name="image">
        <input type="submit">
    </form>
</body>
</html>
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
        $image=$_FILES['image'];
        $size = $image['size'] / (1024 * 1024);
        $ext=strtolower(pathinfo($image['name'],PATHINFO_EXTENSION));
        $tmp = $image['tmp_name'];
        $dest = "uploads".bin2hex(random_bytes(10)) . "." . $ext;
        if($ext == "jpg" || $ext == "jpeg" || $ext=="png" || $ext=="webp" || $ext == "gif"){
            if($size<=2){

                if(move_uploaded_file($tmp,$dest)){
                    echo "Image Has Been Uploaded";
                }
                else{
                    echo "Can Not Upload Image , Server Busy";
                }

            }
            else{
                echo "Image Should not be Grater than 2 MB";
            }


        }
        else{
            echo "File is not an Image";
        }

    
    }
    else{
        echo "Please Choose an Image";
    }

}

?>