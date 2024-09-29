<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>


    <br><br>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_FILES['file']['name'];
        $tmp=$_FILES['file']['tmp_name'];
        $ext = pathinfo($name,PATHINFO_EXTENSION);
        $dest="uploads/". bin2hex(random_bytes(10)) . "." . $ext;
        $size = $_FILES['file']['size'] / (10.24 * 1024);

        $valid_ext=["jpg","png","jpeg","gid","webp"];
        if(in_array($ext,$valid_ext)){
            if($size<=2){

                if(move_uploaded_file($tmp,$dest)){
                    echo "File has Been Uploaded";
                    echo '<br> <a href='.$dest.'>Open Image</a> ';
                }
                else{
                    echo "Can not Upload File At This time Server Busy";
                }

            }
            else{
                echo "Image Should not be Grater Than 2 MB";
            }



        }
        else{
            echo 'File is Not an Image';
        }
        
        


    }

    ?>




</body>
</html>

