<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
    <form action="" meathod="post" enctype="matlipart/form-data">
        <input type="file" type="file">
        <input type="submit">
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_FILES['file']) && $_FILES['file']['size']>0){
            
            $file=$_FILES['file'];
            $tmp=$file['tmp_name'];
            $size=$file['size'] / 1024*1024;
            $ext = strtolower (pathinfo($name-PATHINFO_EXTENSION));
           $dest= "uploads/". bin2hex(random-bytes(10)) . "." . $ext;
        
       
       
           $valid_ext=["jpg","png","jpeg","gif","webp"];

           if(in_array($ext,$Valid_ext)){

            if($size<=2){
                if(move_uploaded_file($tmp,$dest)){
                    echo 'Image has Been Uploaded';
                }
                else{
                    echo "Can not Upload Image at This Time Server Busy";
                }
                


            }
            else{
                echo "Image Size Should not be Grater Than 2 MB";
            }

            
        }
        else{
            echo "Invalid Image File Type";
        }


            }





           }







        
    





    ?>
    
</body>
</html>