<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="Submit" value="Upload">

    </form>

    <br><br>


    <?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_FILES['file']['name'];
        $tmp=$_FILES['file']['tmp_name'];
        $ext =pathinfo($name,PATHINFO_EXTENSION);
        $dest="uploads/".bin2hex(random_bytes(10))."." . $ext;
        $Size=$_FILES['file']['size'] / (1024 * 1024);
        $valid_ext=["jpg","png","jpeg","gid","webp"];

        if(in_array ($ext,$valid_ext)){
            if($Size<=5){

                if(move_uploaded_file($tmp,$dest)){
                    echo "file has been Uploaded";
                    echo '<br> <a href='.$dest.'>Open Image</a> ';

                }
                else{
                    echo "can not Upload file at this time server busy";
                }
            }
            else{
                echo "image should not be grater than 5 MB";
            }
        }
        else{
            echo "file is not an image";
        }
    }

    ?>
    
</body>
</html>