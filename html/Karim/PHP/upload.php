<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
        $image=$_FILES['image'];
        $name=$image['name'];
        $tmp=$image['tmp_name'];
        $dest="uploads/".$name;

        if(move_uploaded_file($tmp,$dest)){
            echo "File has Been Uploaded";
        }
        else{
            echo "Can Not Upload File at This time";
        }
    
    }
    else{
        echo "Please Choose a File";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>
</body>
</html>