<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_FILES['image']) && $_FILES['image']['size']>0){

    $image = $_FILES['image'];
    $name = $image['name'];
    $tmp = $image['tmp_name'];
    $dest = "uploads/".$name;

    if(move_uploaded_file($tmp,$dest)){
        echo "file has been Uploaded";
    }
    else{
        echo "Can Not Upload File at This time";
    }

   }
}



?>


<form method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
</form>