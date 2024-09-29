<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
    <style>
        img{
            height: 100px;
            width:150px;
            object-fit:cover;
            margin: 10px;
        }

        img[src=" "]{
            display:none;
        }
    </style>
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
        $size=$image['size'] / (1024 * 1024);
        $dest="uploads/".bin2hex(random_bytes(10)).".".$ext;

    
        if($ext=="jpg" || $ext=="png" || $ext=="gif" || $ext=="jpeg" || $ext=="webp"){

            if($size<=2){
                if(move_uploaded_file($tmp,$dest)){
                    $write=fopen("data.txt","a");
                    fwrite($write,$dest."\n");
                    fclose($write);


                    echo "Image has Been Uploaded";

                }
                else{
                    echo "Can not Upload Image at This Time";
                }
            }
            else{
                echo "File should not be grater than 2 MB";
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


echo "<br><br>";

$read=fopen("data.txt","r");
while(!feof($read)){
    echo '<img src="'.fgets($read).' " alt="abcd">';
}

fclose($read);





?>



</body>
</html>