<!DOCTYPE html>
<html>
<body>

<form action="./file upload.php" method="post" enctype="multipart/form-data">
  Select a image to upload:
  <input type="file" name="image" id="fileToUpload">
  <br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>


 <?php
if(isset($_FILES['image'])){
    $name=$_FILES['image']['name'];
    $tmt=$_FILES['image']['tmt_name'];
    $dest="images/".$name;

    if(move_uploaded_file($tmt,$dest)){
        echo "File has been uploaded";
    }

    else{
     echo "failed";
    }
}



?>