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
        <input type="file" name="image">
        <input type="submit">
    </form>
</body>
</html>

<?php
if(isset($_FILES['image'])){
    $tmp_name=$_FILES['image']['tmp_name'];
    $name=$_FILES['image']['name'];
    $ext=pathinfo($name,PATHINFO_EXTENSION);
    $new_name=bin2hex(random_bytes(10)).".".$ext;
    $dest= "uploads/".$new_name;
    $size=$_FILES['image']['size']/(1024*1024);
    // echo $size;
    // echo $ext;
    if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext =="gif" || $ext=="webp"){
        if($size<=1){
            if(move_uploaded_file($tmp_name,$dest)){
                $fptr=fopen("data.txt","a");
                fwrite($fptr,$dest."\n");
                fclose($fptr);
                echo "file Has Been Uploaded";
            }
            else{
                echo " Failed";
            }
        }
        else{
            echo "Image Should be less than or equal to 1 mb";
        }

    }
    else{
        echo "File is not an Image";
    }

    

}

echo "<br><br>";

$read=fopen("data.txt","r");

while(!feof($read)){
   
        echo'
            <img src="'.fgets($read).'" alt="asd">
        ';
  
}

fclose($read);


?>



