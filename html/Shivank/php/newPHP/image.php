<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_FILES['image']) && $_FILES['image']['size']>0){
    $name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $dest="uploads/".$name;
    
    if(move_uploaded_file($tmp_name,$dest)){
        $fptr=fopen("url.txt","a");
        fwrite($fptr,$dest."\n");
        fclose($fptr);
        echo "Image Has Been Uploaded";
    }
    else{
        echo "Can Not Upload Image At This Time";
    }


   }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <style>
        .image{
            padding: 10px;
        }

        .image img{
            height: 100px;
            max-width: 100px;
            object-fit: cover;
            margin: 10px;
        }

        img[src=""]{
            display:none;
        }
    </style>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
    </form>

    <div class="image">
        <?php
    $file=fopen("url.txt","r");

    while(!feof($file)){
        echo '
        <img src="'.fgets($file).'" alt="Image">
        ';
    }


    fclose($file);

        ?>
  

    </div>
</body>
</html>