<?php
if(isset($_FILES['image']) && $_FILES['image']['size']>0){

    $name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $dest = "Upload/".$name;


    if(move_uploaded_file($tmp_name,$dest)){
        echo "File Has been Uploaded";
    }
    else{
        echo "Can not upload file at this time";
    }

 


}


// var_dump($_FILES['image']);

?>



<form method="POST" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" value="Upload file">
</form>