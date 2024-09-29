<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_FILES['image'])&& $_FILES['image']['size']>0){
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $ext=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
            $name=$_POST['name']. "." . $ext;
           }
           else{
           $name=$_FILES['image']['name'];
           }
          
        $tmp=$_FILES['image']['tmp_name'];
        $dest="images/". $_FILES['image']['name'];
        $pointer=fopen("data.txt","a");
        fwrite($pointer,$dest ."\n");
        fclose($pointer);
        if(move_uploaded_file($tmp,$dest)){
            echo "File Has been Uploaded";
        }


    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diasplay Image</title>
    <style>
    img{
        height: 100PX;
        width: 150px;
        border: 2px solid blue;
    }  


    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    Name : <input type="text" name="name"><br><br>
        <input type="file" name="image">
        <br><br>
        <input type="submit" value="upoad">
        <hr>
        <b>Live Preview</b>
        <br><br>
        
 <?php
$fptr=fopen("data.txt","r");
    while(!feof($fptr)){
       echo '<img src="./'.fgets($fptr).'">'; 
    }
    fclose($fptr);

?>
</form  >
    
</body>
</html>
