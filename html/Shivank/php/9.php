<form method="POST" action="9.php" enctype="multipart/form-data">
File : <input type="text" name="name"> <br><br>
     <input type="file" name="image" type="image/*"> <br><br>
<input type="submit" value="upload">
</form>

<?php

if(isset($_FILES['image'])){
if(isset($_POST['name']) && !empty($_POST['name'])){
    $ext=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
     $name=$_POST['name'].".".$ext;
}else
     {
      $name=$_FILES['image']['name'];

}
$tmp=$_FILES['image']['tmp_name'];
$dest="uploads/".$name;
 

if(move_uploaded_file($tmp,$dest)){
    echo 'file has been uploaded you can see than <a href="'.$dest.'" 
     target_blank>click here</a>'; 
   }

}
?>