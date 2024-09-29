<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
   if(isset($_FILES['image']) && $_FILES['image']['size']>0){
    $name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $dest="uploads/".$name;
    
    if(move_uploaded_file($tmp_name,$dest)){
        $fptr=fopen("url.txt","a");
        fwrite($fptr,$dest."\n");
        fclose($fptr);
        echo "Image Has Been Uploaded";
    }
    else{
        echo "Can Not Upload Image At This Time";
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
        }
        .file{
            border: 1px solid black;
            background-color:skyblue;
            height: 100px;
            width: 100%;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
        }

        .file input{
            height: 30px;
            width: 100px;
        }

        div[style="background-image: url();"]{
            display:none;
        }
        .container{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            align-content: center;
            flex-wrap: wrap;
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
        }

        .image:hover{
            transform: scale(1.25);
        }

        .image:hover p{
            animation: hide .3s linear 0s 1 alternate forwards;
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
    <form class="file" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
    <div class="container">
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