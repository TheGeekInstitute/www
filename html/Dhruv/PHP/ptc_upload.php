<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  IF($_FILES['image'] && $_FILES['image']['size']>10000){
    $image=$_FILES['image'];
    $name=$image['name'];
    $tmp=$image['tmp_name'];
    $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
    $size=round($image['size'] / (1024 * 1024));
    $dest="uploads/".bin2hex(random_bytes(10)).".".$ext;

    if($ext =="jpg" || $ext=="png" || $ext=="jpeg" || $ext =="gif" || $ext=="webp"){

      if($size<=2){

        if(move_uploaded_file($tmp,$dest)){
          echo "File Has Been Uploaded";
        }
        else{
          echo "Can not Upload File At This time, Server Busy!...";
        }
        

      }
      else{
        echo "Image Sholud Not Be Grater Than 2 MB";
      }

    }
    else{
      echo "Invalid Image Format";
    }

    


}

}

?>


<form method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
</form>