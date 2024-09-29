<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        Name : <input type="text" name="name"><br><br>
        <input type="file" name="image"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>


<?php
if(isset($_FILES['image'])){
   if(isset($_POST['name']) && !empty($_POST['name'])){
    $ext=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $name=$_POST['name']. "." . $ext;
   }
   else{
   $name=$_FILES['image']['name'];
  
   }
    $tmp=$_FILES['image']['tmp_name'];
   $dest="images/".$name;
   if(move_uploaded_file($tmp,$dest)){
    echo 'File has been Uploaded <a href="'.$dest.'">Click Here</a>';
   }


}


?>


