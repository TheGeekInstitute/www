<?php
$msg=$color="";
$error=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){
     $name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $size=$_FILES['image']['size'] / (1024*1024);
    $dest = "uploads/".bin2hex(random_bytes(10)) ."." . $ext;
    if($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "webp" || $ext == "png"){

        if($size<=1){
            if(move_uploaded_file($tmp_name,$dest)){
                $fptr= fopen("url.txt","a");
                fwrite($fptr,$dest."\n");
                fclose($fptr);

                $error=true;
                $color="green";
                $msg="Image Uploaded";

            }
            else{
                $error=true;
                $color="red";
                $msg="Server Busy";
            }
        }
        else{
            $error=true;
            $color="red";
            $msg="Image Shoud not be Grater than 2 MB";
        }

    }
    else{
        $error=true;
        $color="red";
        $msg="Invalid Image File Extension";
    }
    
 
 
    }
 }
 
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        .container{
            height: 300px;
            width: 300px;
            margin: auto;
        }
        .img{
            height: 170px;
            background-color: skyblue;
            justify-content: center;
            flex-direction: column;
            display: flex;
            align-items: center;
        }

        .image{
            height: 100px;
            width: 100px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            transition: all .3s;
            margin: 10px;
        }

        .image p{
            line-height: 100px;
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.4);
            font-size: 60px;
            font-weight: 900;
        }  div[style="background-image: url();"]{
            display:none;
        }
        .image:hover{
            transform: scale(1.12);
        }
        
        .image:hover p{
            animation: hide .3s linear 0s 1 alternate forwards;
        }
        
        .img input{
            height: 30px;
            width: 100px;
        }
        .photo{
          display: flex;
      }
        p{
            height: 50px;
           color:white;
            line-height: 50px;
            text-align: center;
            font-weight:900;
        }
        .photo img{
            height: 100px;
            max-width: 100px;
            object-fit: cover;
            margin: 10px;
        }
        img[src=""]{
            display:none;
        }
            @keyframes hide {
            from{
                opacity: 1;
            }

            to{
                opacity: 0;
                display: none;
            }

        }
    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="img">
                <input type="file" name="image">
                <input type="submit" value="upload">
            </div>
            <?php
            if($error){
                echo '
                <p style="background-color:'.$color.';">'.$msg.'</p>
                ';
            }
            ?>
        </div>
    </form>
    <div class="photo">
        <?php
    $file=fopen("url.txt","r");
     $i=1;
    while(!feof($file)){
        echo '
        <div class="image" style="background-image: url('.fgets($file).');">
        <p>'.$i.'</p>
        </div>
        ';
        $i++;
    }


    fclose($file);

        ?>
  

    </div>
</body>
</html>