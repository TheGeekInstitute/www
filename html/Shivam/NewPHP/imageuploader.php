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
                    $msg= "File Has Been Uploaded";
                }

        }
        else{
            $show=true;
            $msg="Image Should not be Grater Than 1 MB";
        }
    }
    else{
        $show=true;
        $msg= "File is not an Image";
    }


    

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image uploder</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        .box{
            height: 300px;
            width: 500px;
            margin: auto;
            /* border: 2px solid black; */
            text-align: center;
            margin-top: 10px;
            /* border-style: dotted; */
            box-shadow: 2px 2px 8px gray;
            margin-bottom: 30px;

            
        }
        h1{
            /* border: 1px solid red; */
            font-family: sans-serif;
            background: rgb(0, 140, 255);
            color: white;
        }
        .main{
            text-align: center;
            /* border: 1px solid blue; */
        }
        .main .cloud{
            height: 150px;
            border: 3px solid gray ;
            border-style: dotted;
            margin-top: 20px;
            width: 300px;
            background-color: white;
        }
        .main input[type=file]::file-selector-button,
              input[type=file]::-webkit-file-upload-button
             {
                background-color: #1dee4b;

            border: 2px solid white;
            height:30px;
            width: 100px;
            border-radius: 5px;
            margin-left: 150px;
        }
        input[type="submit"]{
            /* border: 1px solid red; */
            height: 40px;
            width: 500px;
            margin-top: 20px;
            background: rgb(0, 140, 255);
        }
        img{
            height:150px;
            width:150px;
            /* background: black; */
            border:5px groove rgb(0, 140, 255);
            background-color: gray;
            background-size: cover;
            background-blend-mode: darken;
            font-size: larger;
            transition:all .3s ;
        }
        img:hover{
            transform: scale(1.05);
            
        }




        .container{
            /* border: 1px solid red; */
            display: flex;
            width:100%;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 50px;
          
        }
        
        .container .hero{
            /* border: 2px solid black; */
            height: 150px;
            width: 150px;
            transition: all .3s;
            margin: 10px;
            background-size:cover;
            background-repeat:no-repeat;
            background-position:center;
        }

        .container .hero .para{
            margin: auto;
            text-align: center;
           line-height: 150px;
            backdrop-filter: blur(2px) saturate(300%);
            background-color: rgb(0,0,0,.5);
            color: white;
            font-weight: 900;
            font-size: 5rem;
            cursor: pointer;
            
        }

        .container .hero .para:hover{
            animation: hide .2s ease 0s 1 alternate forwards;
        
        }

        .container > .hero:hover{
            transform: scale(1.1);
        }
        .box p{
            background-color: teal;
            color: white;
            padding: 10px;
        }

        input[type="submit"]{
            outline: transparent;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:active{
           background-color: greenyellow;
        }


        @keyframes hide {
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
                opacity:25%;
            }
            100%{
                opacity: 0%;
                display: none;
            }
        }

        .hero[style="background-image: url();"]{
            display: none;
        } 
    </style>
</head>
<body>
    <div class="box">
        <h1>Upload Your Image</h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="main">
            <img src="https://www.pngarts.com/files/2/Upload-PNG-Transparent-Image.png" class="cloud" alt="">
            <input type="file" value="select image" name="image">
        </div>
        <input type="submit" value="Upload File">
        </form>
        <?php
            if($show==true){
                echo '
                <p>'.$msg.'</p>
                ';
            }
        ?>
    </div>
<div class="container">
<?php
$i=1;
$read_mode=fopen("data.txt","r");
while(!feof($read_mode)){
    echo '
    <div class="hero" style="background-image: url('.fgets($read_mode).');">
    <div class="para">
       '.$i.'
       </div>
       </div>
     ';
    $i++;
    }
fclose($read_mode);



?>

</div>
</body>
</html>
 <?php





?>