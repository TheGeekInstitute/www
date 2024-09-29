<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image validation</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .box{
            border: 1px solid black;
            margin: auto;
            display: flex;
            justify-content: center;
            height: 200px;
            width: 600px;
            align-items: center;
            /* margin-top: calc(50% - 200px)*/
            margin-top: 50px;
            background: #2dbbdf;
            border-radius: 5px;
            box-shadow: 2px 2px 4px;
        }
        .line{
            display: flex;
        }
        label{
            border: 1px solid blue;
            background-color: blue;
            color: white;
            border-radius: 5px;
            display: flex;
            font-size: 22px;
            
        }
        input[type=file]{
            border: 1px solid blue;
            /* height: 30px; */
            font-size: large;
            margin-left: 20px;
            color: white;
            background: black;
            border-radius: 5px;

        }

        input[type=file]::file-selector-button,
        input[type=file]::-webkit-file-upload-button
        {
            background-color: orangered;
            border: 2px solid white;
        }

        input[type=submit]{
            display: flex;
            justify-content: center;
            width: 400px;
            height: 40px;
            /* border: 1px solid green; */
            border-radius: 5px;
            margin: 20px;
            margin-left: 50px;
            font-size: large;
            background: rgb(71, 255, 47);
        }
        
  


img{
        height: 90px;
        margin: 20px 10px;
        width: 100px;
        border: 1px solid blue;
    }

    </style>
</head>
<body>
    <div class="box">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="line">
                <label>Choose an Image</label>
            <input type="file" name="image">
            </div>
            <input type="submit">
        </form>
    </div>
    
    
</body>
</html>
<?php
if(isset($_FILES['image']) && $_FILES['image']['size']>0){
    $tmp_name=$_FILES['image']['tmp_name'];
    $size=$_FILES['image']['size'] / (1024*1024);
    $name=$_FILES['image']['name'];
    $ext=pathinfo($name,PATHINFO_EXTENSION);
    $dest="uploads/".bin2hex(random_bytes(10)).".".$ext;
   
    if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext== "webp" || $ext=="gif"){
        if($size<1){
            
                if(move_uploaded_file($tmp_name,$dest)){
                    $write_mode=fopen("data.txt" ,"a");
                    fwrite($write_mode,$dest."\n");
                    fclose($write_mode);
                    echo "File Has Been Uploaded";
                }

        }
        else{
            echo "Image Should not be Grater Than 1 MB";
        }
    }
    else{
        echo "File is not an Image";
    }


    

}


$read_mode=fopen("data.txt","r");
while(!feof($read_mode)){
    echo '
    <img src="'.fgets($read_mode).'" alt="Image">
     ';
}
fclose($read_mode);


?>