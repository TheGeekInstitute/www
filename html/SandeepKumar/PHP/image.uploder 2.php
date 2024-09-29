<?php
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['file']) && $_FILES['file']['size']>0){
        $file=$_FILES['file'];
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $size=$file['size'] / (1024 * 1024);
        $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $dest="uploads/" . bin2hex(random_bytes(10)) . "." . $ext;
        
        $valid_ext=["jpg","png","jpeg","gif","webp"];
        
        if(in_array($ext,$valid_ext)){
       
            if($size<=2){

                if(move_uploaded_file($tmp,$dest)){
                    
                    $fptr=fopen("img.txt","a");
                    fwrite($fptr,$dest."\n");
                    fclose($fptr);

                    
                    $msg= 'Image has Been Uploaded';

                }
                else{
                    $msg= "Can not Upload Image at This Time Server Busy";
                }
                


            }
            else{
                $msg= "Image Size Should not be Grater Than 2 MB";
            }

            
        }
        else{
            $msg= "Invalid Image File Type";
        }

        
        

        
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader 2</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .container {
      
            height: 200px;
            text-align: center;
            padding: 20px;
            background-color:purple;
        }

        .container form {
            margin-top: 50px;
        }

        .container p {
            margin-top: 20px;
            font-size: large;
            font-weight: 400;
        }

        .images{
          
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .images .image{
            height: 100px;
            width: 100px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 10px;
            text-align: center;
        }

        .images .image a{
            display: block;
            height: 100px;
            width: 100px;
            line-height: 100px;
            font-size: 60px;
            color: white;
            text-decoration: none;
            font-weight: 900;
            background-color: rgba(0, 0, 0, 0.507);
            box-shadow: 0px 0px 10px black;
            opacity: 1;
            transition: all .3s ease-in-out;
        }

        .images .image:hover a{
            opacity: 0;
        }
        div[style="background-image: url();"]{
            display:none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Image Uploader 2</h1>
        <p><?php echo $msg= $msg; ?></p>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="">
            <input type="submit" value="Upload">
        </form>
    </div>


    <div class="images">



    <?php


$read=fopen("img.txt","r");
$link="";
$i=1;
while(!feof($read)){
    $link=fgets($read);
    echo '
        <div class="image" style="background-image: url('.$link.');">
                <a href="'.$link.'" target="_blank">'.$i.'</a>
        </div>
    ';

    $i++;
}

fclose($read);


    ?>




    </div>



</body>

</html>