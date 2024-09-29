<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <!-- File name :<input type="text" name="name"> <br><br> -->
        <input type="file" name="image" type="image/*"> <br><br>
        <input type="submit" value="Upload">
    </form>
    
</body>
</html>

<?php
if(isset($_FILES['image'])){
// print_r(pathinfo($_FILES['image']['name']));
// die();
$name=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$dest="uploads/".$name;

if(move_uploaded_file($tmp,$dest)){
    echo 'File Has Been Uploaded You Can See It via <a href="'.$dest.'" target_blank>Click Here</a>';
}
}


?>