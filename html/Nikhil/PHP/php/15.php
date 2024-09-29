<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_FILES['image']) && $_FILES['image']['size']>0){
        $tmp=$_FILES['image']['tmp_name'];
        $dest="images/". $_FILES['image']['name'];
        $pointer=fopen("data.txt","a");
        fwrite($pointer,$dest ."\n");
        fclose($pointer);
        if(move_uploaded_file($tmp,$dest)){
            echo "File Has been Uploaded";
        }


    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
<style>
    img{
        height: 70px;
        width: 100px;
        border: 1px solid red;
    }
</style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
    <br><br><br>
    <?php
    $fptr=fopen("data.txt","r");
    while(!feof($fptr)){
       echo '<img src="./'.fgets($fptr).'">'; 
    }
    fclose($fptr);
    ?>
</body>
</html>