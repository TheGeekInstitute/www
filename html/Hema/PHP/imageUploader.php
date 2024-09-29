<?php
$error=false;
$color=$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
        $image=$_FILES['image'];
        $image=$_FILES['image'];
        $tmp=$image['tmp_name'];
        $ext=strtolower(pathinfo($image['name'],PATHINFO_EXTENSION));
        $size = $image['size'] / (1024*1024);
        $dest="images/".bin2hex(random_bytes(10)).".".$ext;
        $valid_ext=["jpg","png","jpeg","webp","gif","avif","svg"];

        if(in_array($ext,$valid_ext)){
            if($size<=2){
                if(move_uploaded_file($tmp,$dest)){
                    
                    $fptr=fopen("image.txt","a");
                    fwrite($fptr,$dest."\n");
                    fclose($fptr);

                    
                    $error=true;
                    $color="green";
                    $msg= "Image Has Been Uploaded";
                }
                else{
                    $error=true;
                    $color="red";
                    $msg= "Can not Upload File At This Time Server Busy";
                }
            }
            else{
                $error=true;
                $color="red";
                $msg="Image Should not Be Grater Than 2 MB";
            }
        }
        else{
            $error=true;
            $color="red";
            $msg= "File is Not an Image";
        }
    }

    
    else{
        $error=true;
        $color="red";
        $msg="Please Choose an Image";
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
        text-decoration: none;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .wrapper{
     
        height: 15rem;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        padding: 1rem 0;
        background-color: darkcyan;
        color: white;
    }

    .wrapper h1{
        font-size: 50px;
        text-shadow: 0px 0px 5px black;
    }

    .wrapper p{
        font-size: xx-large;
        
        padding:.3rem .5rem;
        border-radius: .3rem;
    }

    .wrapper form input::-webkit-file-upload-button,
    .wrapper form input::file-selector-button,
    .wrapper form input[type="submit"]
    
    {
        background-color: orangered;
        height: 2.5rem;
        width: 7rem;
        border: none;
        color: white;
        font-size: large;
        font-weight: 700;
        border-radius: .5rem;
        cursor: pointer;
    }

    .container{
        
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .container .image{
        height: 100px;
        width: 100px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin: 1rem;
        border-radius: .5rem;
    }

    .container .image a{
        display: block;
        border-radius: .5rem;
        text-align: center;
        line-height: 100px;
        height: 100%;
        width: 100%;
        color: white;
        font-size: 5rem;
        font-weight: 900;
       background-color: rgba(0, 0, 0, 0.603);
       transition: all .3s linear;
    }

    .container .image:hover a{
        opacity: 0;
    }

    div[style="background-image: url();"]{
        display:none;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <h1>Image Uploader</h1>
        <?php
        if($error){
            echo '
            <p class="msg" style="background-color: '.$color.';">'.$msg.'</p>
            ';
        }

        ?>
        
        <form enctype="multipart/form-data" method="POST">
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>
    </div>

    <div class="container">
        <?php
        $fptr1=fopen("image.txt","r");
        $i=1;
        while(!feof($fptr1)){
            $path=fgets($fptr1);

            echo '
            <div class="image" style="background-image: url('.$path.');">
                <a href="'.$path.'" target="_blank">'.$i.'</a>
            </div>
            ';
            $i++;
        }
        fclose($fptr1);

        ?>

    </div>
</body>
</html>