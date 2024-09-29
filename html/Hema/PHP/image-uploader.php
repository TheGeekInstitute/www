<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
    </form>

   <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_FILES['image']) && $_FILES['image']['size']>0){
            $image=$_FILES['image'];
            $tmp=$image['tmp_name'];
            $ext=strtolower(pathinfo($image['name'],PATHINFO_EXTENSION));
            $size = $image['size'] / (1024*1024);
            $dest="uploads/".bin2hex(random_bytes(10)).".".$ext;
            $valid_ext=["jpg","png","jpeg","webp","gif","avif","svg"];

            if(in_array($ext,$valid_ext)){
                if($size<=2){
                    if(move_uploaded_file($tmp,$dest)){
                        echo "Image Has Been Uploaded";
                    }
                    else{
                        echo "Can not Upload File At This Time Server Busy";
                    }
                }
                else{
                    echo "Image Should not Be Grater Than 2 MB";
                }
            }
            else{
                echo "File is Not an Image";
            }
        }
    }
    


   ?>



</body>
</html>