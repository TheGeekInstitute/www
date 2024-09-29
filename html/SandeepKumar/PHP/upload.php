<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>

</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['file']) && $_FILES['file']['size']>0){
        $file=$_FILES['file'];
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $dest="uploads/".$name;
        if(move_uploaded_file($tmp,$dest)){
            echo "File Has Been Uploaded";
        }
        else{
            echo "can not Upload File At This time Server Busy";
        }
    }
    else{
        echo "Please Choose a File";
    }
}



?>