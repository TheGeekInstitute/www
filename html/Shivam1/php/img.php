<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
</head>
<style>
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .box{
            /* border: 2px solid black; */
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .box .image{
            height: 150px;
            width: 150px;
            background-size: cover;
            background-position: center;
            margin: 5px;
            cursor: pointer;
        }

        .box .image p{
            position: relative;
            font-size: 100px;
            font-weight: 900;
            height: 100%;
            width: 100%;
            line-height: 150px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.521);
        }


        .box .image:hover p{
         animation: erase .3s linear 0s 1 alternate forwards;       
        }


        @keyframes erase{
            0%{
                opacity: 1;
            }

            100%{
                opacity: 0;

            }
        }


        div[style="background-image: url();"]{
            display:none;
        }
    
</style>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" accept="image/*" name="image">
        <input type="submit">
    </form>



    <div class="box">

    <?php
    $i=1;
    $read=fopen("img.txt","r");
        while(!feof($read)){
            echo ' 
            <div class="image" style="background-image: url('.fgets($read).');">
                <p>'.$i.'</p>
            </div>';
        
        $i++;
        }
    fclose($read)

    ?>



        </div>

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
        $image = $_FILES['image'];
        $size = $_FILES['image']['size'] / (1024*1024);
        $ext = strtolower(pathinfo($image['name'],PATHINFO_EXTENSION));
        $tmp = $image['tmp_name'];
        $dest = "uploads/".bin2hex(random_bytes(10)) ."." . $ext;
        if($ext == "jpg" || $ext == "jpeg" || $ext=="png" || $ext=="webp" || $ext == "gif"){
            if($size<=2){
                if(move_uploaded_file($tmp,$dest)){   
                    $write = fopen("img.txt","a");
                    fwrite($write,$dest . "\n");
                    fclose($write);

                    header("location:img.php");
                }
                else{
                    echo "Can Not Upload Image , Server Busy";
                }
            }
            else{
                echo "Image Should not be Grater than 2 MB";
            }
        }
        else{
            echo "File is not an Image";
        }
    }
    else{
        echo "Please Choose an Image";
    }
}

?>


