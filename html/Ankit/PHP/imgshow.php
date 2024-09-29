<?php
$error=false;
$color=$msg="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_FILES['image']) && $_FILES['image']['size']>0){

        $image=$_FILES['image'];
        $tmp=$image['tmp_name'];
        $name=$image['name'];
        $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $dest="images/".bin2hex(random_bytes(10)).".".$ext;
        $size=$image['size']/(1024*1024);
        $valid_ext=["jpg","png","jpeg","avif","webp"];
     
        if(in_array($ext,$valid_ext)){
            if($size<=2){

                if(move_uploaded_file($tmp,$dest)){
                    $fptr=fopen("img.txt","a");
                   
                    fwrite($fptr,$dest."\n");
                    fclose($fptr);
                    $error=true;
                    $color="green";
                    $msg= 'Image Has Been Uploaded';
                }
                else{
                    $error=true;
                    $color="red";
                    $msg= "Can not Upload Image";
                }

            }
            else{
                $error=true;
                $color="red";
                $msg= "Image should not be grater than 2 MB";
            }

        }
        else{
            $error=true;
            $color="red";
            $msg= 'File is not an Image';
        }

    }
    else{
        $error=true;
        $color="red";
        $msg="Please Choose a File";
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
            box-sizing: border-box  ;
            text-decoration: none;
        }

        body{
            background-color: antiquewhite;
        }

        .box{
           padding-top: 2rem;
      
            height: 500px;
            text-align: center;
            background-color:cyan;
        }

        .box p{
            font-size: large;
            color: black;
            font-family:cursive;
            font-weight: 900;
           
            width: 300px;
            margin: auto;
            padding: 5px;
            color: white;
            /* margin-top: 2rem; */
        }

        .box form{
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form input::-webkit-file-upload-button,
        .box form input::file-selector-button{
            background-color: orangered;
            height: 40px;
            width: 100px;
            border: none;
            border-radius: .3rem;
            color: white;
            font-size: large;
            cursor: pointer;
            font-family:cursive;
        }
        

        .box form input[type="submit"]{
            background-color: green;
            height: 40px;
            width: 100px;
            border: none;
            color: white;
            font-size: large;
            cursor: pointer;
            font-family:cursive;
        }
        


        .box2{
         
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .box2 .image{
            height: 100px;
            width: 100px;
         
            background-size: cover;
            background-repeat: no-repeat;
            background-position:center;
            margin: 10px;
            border-radius: .2rem;
        }

        .box2 .image a{
            display: block;
            color: white;
            font-size: 80px;
            text-align: center;
            font-weight: 900;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.493);
            transition: all .3s linear;
        }

        .box2 .image:hover a{
            opacity: 0;
        }

        div[style="background-image:url();"]{
            display:none;
        }
    </style>
</head>
<body>
    <div class="box">
        <?php
            if($error){
                echo '
                <p style="background-color: '.$color.';">'.$msg.'</p>
                ';
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>
    
    </div>
    <div class="box2">
<?php
$fptr=fopen("img.txt","r");
$i=1;
while(!feof($fptr)){
    $path=fgets($fptr);
echo '
<div class="image" style="background-image:url('.$path.');">
        <a href="'.$path.'" target="_blank">'.$i.'</a>
    </div>
';
$i++;
}
fclose($fptr);

?>



    </div>
</body>
</html>