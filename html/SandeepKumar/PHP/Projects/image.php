<?php
$msg="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    IF($_FILES['image'] && $_FILES['image']['size']>0){
      $image=$_FILES['image'];
      $name=$image['name'];
      $tmp=$image['tmp_name'];
      $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
      $size=round($image['size'] / (1024 * 1024));
      $dest="uploads/".bin2hex(random_bytes(10)).".".$ext;
  
      if($ext =="jpg" || $ext=="png" || $ext=="jpeg" || $ext =="gif" || $ext=="webp"){
  
        if($size<=2){
  
          if(move_uploaded_file($tmp,$dest)){
            
            $write=fopen("img.txt","a");
            fwrite($write,$dest."\n");
            fclose($write);
            $msg= "File has Been Uploaded";


          }
          else{
            $msg= "Can not Upload File At This time, Server Busy!...";
          }
          
  
        }
        else{
          $msg= "Image Sholud Not Be Grater Than 2 MB";
        }
  
      }
      else{
        $msg= "Invalid Image Format";
      }
  
      
  
  
  }
  else{
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
        }

        .form{
          background-color: aquamarine;
            height: 10rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
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
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .container .box p{
            font-size: 80px;
            font-weight: 900;
            color: black;
            height: 100%;
            width: 100%;
            background-color: rgba(259, 285, 225, 0.6);
            border:2px solid black;
            backdrop-filter: blur(5px);

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
        <p><?php  echo $msg ; ?></p>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image" >
            <input type="submit" value="upload">
        </form>
    </div>

    <div class="container">
        <?php
        $i=1;
        $read = fopen("img.txt","r");
            while(!feof($read)){
                echo ' 
                <div class="box" style="background-image: url('.fgets($read).');">
                        <p>'.$i.'</p>
                    </div>
                ';
                $i++;
            }
        fclose($read);


        ?>

    </div>
</body>
</html>