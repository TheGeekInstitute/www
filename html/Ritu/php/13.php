<!DOCTYPE html>
<html>
<body>

<form action="./13.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="image" id="fileToUpload">
  <br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<!--

Array ( [name] => 000000.png [type] => image/png [tmp_name] => /tmp/phpQJsxin [error] => 0 [size] => 13004 )

-->

<?php
if(isset($_FILES['image'])){
    $name=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    $dest="images/".$name;
    // echo $dest;
    if(move_uploaded_file($tmp,$dest)){
        echo "file Has Been Uploaded";
    }
    else{
        echo "failed";
    }

}

?>