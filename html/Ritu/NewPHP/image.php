<?php
$show=false;
$msg="";
if(isset($_FILES['image']) && $_FILES['image']['size']>0){
    $tmp_name=$_FILES['image']['tmp_name'];
    $size=$_FILES['image']['size'] / (1024*1024);
    $name=$_FILES['image']['name'];
    $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
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
        $msg= "File is not an Image";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container form{
            height: 10rem;
            /* border: 1px solid red; */
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            background-color: aquamarine;
        }
        .container form input{
            margin: 1rem 0;
            width:10rem;
            padding: .3rem .5rem;
            /* border: 1px solid grey; */
            border: none;
            border-radius: 3px;
            background-color: orangered;
            color: white;
            font-weight: 900;
        }

        .container form input::-webkit-file-upload-button{
            padding: .3rem .5rem;
            /* width: 30rem; */
            /* border: 1px solid grey; */
            border: none;

            border-radius: 3px;
            background-color: orangered;
            color: white;
            font-weight: 900;

        }

        .container form .msg{
            color: black;
            font-weight: 900;
        }

        .box{
            /* border: 2px solid red; */
            margin:10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            /* flex-direction: row; */
            align-content: space-evenly;
            
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
            border : 1px solid grey;
        }


        .box .image p{
            position:relative;
            /* top: -10rem; */
            font-size: 5rem;
            line-height:10rem;
            text-align: center;
            /* border: 2px solid red; */
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(2px);
            cursor: pointer;
        }

        .container .box .image:hover p{
            animation: hide .3s ease 0s 1 alternate forwards;
        }
        .container .box .image:hover{
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
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
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

<?php
$i=1;
        $read_mode=fopen("data.txt","r");
while(!feof($read_mode)){
    echo '
  
    <div class="box">
        <div class="image" style="background-image: url('.fgets($read_mode).');">
            
            <p>'.$i.'</p>
        </div>
     ';
     $i++;
}
fclose($read_mode);
?>
        </div>

    </div>
</body>
</html>