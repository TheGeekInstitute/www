<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){

        $image=$_FILES['image'];
        $tmp=$image['tmp_name'];
        $name=$image['name'];
        $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $dest="uploads/" .bin2hex(random_bytes(10)).".".$ext;
        $size=$image["size"]/(1024*1024);
        $valid_ext=["jpg","jpeg","png","avif","webp"];

        if(in_array($ext,$valid_ext));{

            if($size<2);{

            if(move_uploaded_file($tmp,$dest)){
                echo "Image Has Been Uploaded ";
            }
           else{
              echo"Can Not Uploadimage at this Time Searver Busy  ";
           }
        }
        


        }
        

        }
        else{
            echo 'File is not an Image';
        }

    }
    else{
        echo "Please Choose a File";
    }



?>




</body>
</html>