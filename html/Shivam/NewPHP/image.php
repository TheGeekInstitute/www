<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>
</body>
</html>


<?php

echo "<pre>";

// var_dump($_FILES["image"]["name"]);

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
        var_dump($_FILES['image']);
    }
    else{
        echo "Please Select a Image";
    }
}


?>