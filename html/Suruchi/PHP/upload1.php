<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="Post" enctype="MultiPart/form-data">

    <input type="file" name="file">
    <input type="Submit" value="Upload">

    </form>

    <br><br>

    <?php
     if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_FILES['file']['name'];
        $tmp=$_FILES['file']['tmp_name'];
        $dest="uploads/" .$name;

        if(move_uploaded_file($tmp,$dest)){
            echo "File has Been Uploaded";

        }
        else{
            echo "can not Upload file At This Time,Server Busy";
        }
     }
    ?>
    
</body>
</html>