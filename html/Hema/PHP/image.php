 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        img{
            height:70px;
            width:100px;
            margin:10px;
        }

        img[src=""]{
            display:none;
        }
    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_FILES['image']) && $_FILES['image']['size']>0){

    $image=$_FILES['image'];
    $name=$image['name'];
    $tmp=$image['tmp_name'];
    $size = $image['size'] / (1024 * 1024);
    $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
    $dest="uploads/".bin2hex(random_bytes(10))."." . $ext;
    $valid_ext=["jpg","png","jpeg","webp","avif","svg"];
    if(in_array($ext,$valid_ext)){
        if($size<=2){
            if(move_uploaded_file($tmp,$dest)){
                $fptr=fopen("img.txt","a");
                fwrite($fptr,$dest."\n");
                fclose($fptr);
                echo "Image Has Been Uploaded";
            }
            else{
                echo "Can not Upload Image at This Time Server Busy";
            }

        }
        else{
            echo "Image Should Not be Grater Than 2 MB";
        }

    }
    else{
        echo "Invalid Image Format";
    }
   }
   else{
    echo "Please Choose a File";
   }
}

?>


<br><br><br>

<?php

$read=fopen("img.txt","r");
    while(!feof($read)){
        echo '
        <img src="'.fgets($read).'" alt="">
        ';
    }

fclose($read);

?>



</body>
</html>
