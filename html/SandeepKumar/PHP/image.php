<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        img{
            height:100px;
            with:100px;
            margin:5px;
        }

        img[src=""]{
            display:none;
        }
    </style>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>



<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['file']) && $_FILES['file']['size']>0){
        $file=$_FILES['file'];
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $size=$file['size'] / (1024 * 1024);
        $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $dest="uploads/" . bin2hex(random_bytes(10)) . "." . $ext;

        $valid_ext=["jpg","png","jpeg","gif","webp"];

        if(in_array($ext,$valid_ext)){

            if($size<=2){

                if(move_uploaded_file($tmp,$dest)){
                    
                    $fptr=fopen("img.txt","a");
                    fwrite($fptr,$dest."\n");
                    fclose($fptr);

                    
                    echo 'Image has Been Uploaded';

                }
                else{
                    echo "Can not Upload Image at This Time Server Busy";
                }
                


            }
            else{
                echo "Image Size Should not be Grater Than 2 MB";
            }

            
        }
        else{
            echo "Invalid Image File Type";
        }

        
        

        
    }
}

echo "<br><br><br>";

$read=fopen("img.txt","r");

while(!feof($read)){
    echo '<img src="'.fgets($read).'" alt="adas">';
}

fclose($read);









?>








</body>
</html>