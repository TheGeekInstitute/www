<?php
$show=false;
$msg="";
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
                    $show=true;
                    $msg="Image Uploaded";
                }

        }
        else{
            $show=true;
            $msg= "Image Should not be Grater Than 1 MB";
        }
    }
    else{
        $show=true;
        $msg="File is not an Image";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image upload</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }
    .main{
        /* border: 1px solid black; */
        height: 40vh;
        width: 50vw;
        margin-left: 25vw;
        margin-top: 10px;
       text-align: center;
        /* padding-top: 1rem; */
        background-color:blue;
        border-radius: 10px;
        color:white;
        box-shadow: 2px 2px 4px black;
       
        
    }
    .main form{
        margin-bottom:8rem;
    }
    .main h1{
        font-size:2rem;
        color:white;
        background-color:orangered;
        border-radius:5px 5px;
        

    }
    input[type=file]{
        /* border: 1px solid red; */
        font-size: large;
        color: white;
        /* margin-right: 5vw; */
        margin-top:10vh;
        background: black;
        border-radius: 5px;
        align-items: center;
     
       
    }
    input[type=file]::file-selector-button,
        input[type=file]::-webkit-file-upload-button
        {
            background-color:darkorange;
            border: 3px solid white;
            color:rgb(204, 255, 0)(94, 255, 0);
        }
        input[type=submit]{
            font-size:x-large;
            font-wieght:900;
            width:50vw;
            height:7vh;
            position:relative;
            top:12.5vh;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: orangered;
            color: white;
        }
        input[type=submit]:active{
            background-color: yellow;
            color: red;
        }
        .box{
          
            margin-top:5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
          
          
            
            
        }

        .box .image{
            /* border: 2px solid green; */
            width: 10rem;
            height: 10rem;
            
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin: 5px;
            transition: all .3s;
            border:5px groove aqua;
        }


        .box .image p{
            position:relative;
            /* top: -10rem; */
            font-size: 5rem;
            line-height:9.5rem;
            text-align: center;
            /* border: 2px solid red; */
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(2px);
            cursor: pointer;
        }
        .main form .msg{
            background-color: teal;
            color: white;
            /* padding: 10px; */
        }

        .box .image:hover p{
            animation: hide .3s ease 0s 1 alternate forwards;
        }
        .box .image:hover{
            transform: scale(1.05);
        }


        @keyframes hide{
            0%{
               opacity: 100%;
            }

            25%{
                opacity: 75%;
            }

            50%{
                opacity: 50%;
            }

            75%{
                opacity: 25%;
            }
            100%{
                opacity: 0%;
                display: none;
            }
        }

        .image[style="background-image: url();"]{
            display:none;
            }
         
</style>
</head>
<body>
    <div class="main">
        <h1>Select Your Image</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Upload">

            <?php
                if($show==true){
                    echo '
                    <p class="msg">'.$msg.'</p>
                    
                    ';
                }
                ?>
            
            
                    </form>

                    </div>
<div class="box">

        <?php
$i=1;
        $read_mode=fopen("data.txt","r");
while(!feof($read_mode)){
    echo '
  
        <div class="image" style="background-image: url('.fgets($read_mode).');">
            
            <p>'.$i.'</p>
        </div>
     ';
     $i++;
}
fclose($read_mode);
?>
</div>

    
</body>
</html>



