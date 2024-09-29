<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        img{
            height:100px;
            width:100px;
        }

        img[src=""]{
            display:none;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit">
    </form>
</body>
</html>
<?php
if(isset($_FILES['image']) && $_FILES['image']['size']>0){
    $tmp_name=$_FILES['image']['tmp_name'];
    $size=$_FILES['image']['size'] / (1024*1024);
    $name=$_FILES['image']['name'];
    $ext=pathinfo($name,PATHINFO_EXTENSION);
    $dest="uploads/".bin2hex(random_bytes(10)).".".$ext;
   
    if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext== "webp" || $ext=="gif"){
        if($size<1){
            
                if(move_uploaded_file($tmp_name,$dest)){
                    $write_mode=fopen("data.txt" ,"a");
                    fwrite($write_mode,$dest."\n");
                    fclose($write_mode);
                    echo "File Has Been Uploaded";
                }

        }
        else{
            echo "Image Should not be Grater Than 1 MB";
        }
    }
    else{
        echo "File is not an Image";
    }


    

}


$read_mode=fopen("data.txt","r");
while(!feof($read_mode)){
    echo '
    <img src="'.fgets($read_mode).'" alt="Image">
     ';
}
fclose($read_mode);


?>