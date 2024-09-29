<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
        $image=$_FILES['image'];
        $name=$image['name'];
        $tmp=$image['tmp_name'];
        $ext=pathinfo($name,PATHINFO_EXTENSION);
        $size= $image['size'] / (1024 * 1024);
        $dest = "uploads/". bin2hex(random_bytes(10)) . "." .$ext;

        
        

        $image_ext=["jpg","jpeg","png","webp","gif","avif"];

        if(in_array($ext,$image_ext)){
            if($size<=2){

                if(move_uploaded_file($tmp,$dest)){
                    echo 'Image Has Been Uploaded';
                }
                else{
                    echo "Can not Upload Image At This time";
                }

            }
            else{
                echo "Image should not be grater than 2 MB";
            }
        }
        else{
            echo "File is not an Image";
        }

  


 
    
    }
    else{
        echo "Please Choose a File";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>
</body>
</html>