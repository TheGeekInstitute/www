<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload img</title>

    <style>

        *{
            margin: 0;
            padding: 0;
        }
    
    </style>
</head>
<body>
    
<form action="" Method="POST" enctype="maltipart/form-data">
    <input type="File" name="image">
    <input type="submit" value="Upload">
</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image'])&& $_FILES['image']['size']>0){
        $image = $_FILES['image'];
        $name = $_image['name'];
        $tmp = $_image['tmp'];
        $size = $_image['size']/1024*1024;
        $ext= strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $dest='upload/'.bin2hex(random_bytes(10))."." .$ext;
        $valid_ext=["jpg","png"."jpeg","webp","avif","avg"];
        if(in_array($_ext,$valid_ext)){
            if($size<=2){
                if(move_uploaded_file($_tmp,$_dest)){
                    $ftpr=fopen("image.text","a");
                    fwrite($_fptr,$_dest."/n");
                    fclose($ftpr);
                    echo "image has been uploaded";
                }
                else{
                    echo "Can not Upload Image server busy";
                }
                echo "image should not be Greter than 2 MB";
            }
        }
    }
}



?>
