<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
       if(isset($_FILES['image']) && $_FILES['image']['size']>0){
            $image=$_FILES['image'];
            $name=$image['name'];
            $size=$image['size'] / (1024 * 1024);
            $tmp=$image['tmp_name'];
            $dest="uploads/".$name;


            if($size<=2){
                if(move_uploaded_file($tmp,$dest)){
                    echo "File Has Been Uploaded";
                }
                else{
                    echo "Can Not Upload File At This Time";
                }
            }
            else{
                echo "File Should not be grater than 2 MB";
            }
       } 
          
    }
    
    ?>

</body>
</html>