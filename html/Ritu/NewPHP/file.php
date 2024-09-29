<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="image">
        <input type="submit">
    </form>
    </body>
</html>

<?php

echo "<pre>";

// var_dump($_FILES['image']['name']);


$_ENV['name']="test";


var_dump($_ENV);


?>