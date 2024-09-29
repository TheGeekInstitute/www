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
        $dest="uploads/".$name;

        if(move_uploaded_file($tmp,$dest)){
            echo "File has been Uploaded";
        }
        else{
            echo "Can not Upload File at This time";
        }

    }
    else{
        echo "Please Choose a File";
    }
}


?>




</body>
</html>