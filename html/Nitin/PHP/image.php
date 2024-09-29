
<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_FILES['image']) && $_FILES['image']['size']>0){
        $image=$_FILES['image'];
        $name=$image['name'];
        $size=$image['size'] / (1024 * 1024);
        $tmp=$image['tmp_name'];
        $ext=pathinfo($name,PATHINFO_EXTENSION);
        $dest="uploads/".bin2hex(random_bytes(10)).".".$ext;
        $valid_ext=["jpg","png","jpeg","gif","webp"];
        if($size<=2){
            if(in_array($ext,$valid_ext)){
                if(move_uploaded_file($tmp,$dest)){
                    $msg= "File has Been Uploaded";
                    $fptr=fopen("img.txt","a");
                    fwrite($fptr,$dest . "\n");
                    fclose($fptr);
                }
                else{
                    $msg= "can not Upload File At This Time";
                }
            }
            else{
                $msg= "File is Not an Image";
            }
         
        }
        else{
            $msg= "File Should not be grater than 2 MB";
        }
   } 
      
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration:none;

        }

        .form{
          background-color: skyblue;
            height: 10rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-image: url();
        }

        .form  p{
            font-size: x-large;
            margin: 5px 0;
        }

        .form form input::-webkit-file-upload-button,
        .form form input::file-selector-button,
        .form form input[type="submit"]
        {
            border: 1px solid black;
            padding: 5px;
            cursor: pointer;
        }


        .container{
           
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;

        }

        .container .box{
            height: 100px;
            width: 100px;
            margin: 5px;
            text-align: center;
            cursor: pointer;
        }

        .container .box p{
            font-size: 80px;
            font-weight: 900;
            color: black;
            height: 100%;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.3);
            border:2px solid black;
            backdrop-filter: blur(5px);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            transition: all .5s linear;
        }
 

        .container .box:hover p{
            opacity: 0;
        }

        div[style="background-image: url();"]{
            display:none;
        }

      
    </style>
</head>
<body>
    <div class="form">
        <p><?php echo $msg; ?></p>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="upload">
        </form>
    </div>

    <div class="container">
    <?php
    $read=fopen("img.txt","r");
    $i=1;
        while(!feof($read)){
            $path=fgets($read);
            echo '
            <a href="'.$path.'" target="_blank">
            <div class="box" style="background-image: url('.$path.');">
            <p>'.$i.'</p>
            </div>
            </a>
            ';

            $i++;
        }
    fclose($read);

    ?>
    
    
    


    </div>
</body>
</html>