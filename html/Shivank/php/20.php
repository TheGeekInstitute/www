<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_FILES['image']) && $_FILES['image']['size']>0){
        
        $tmp=$_FILES['image']['tmp_name'];
        $dest="uploads/.". $_FILES['image']['name'];
        $pve=fopen("cred.txt","a");
         
        fwrite($pve,$dest . "\n" );

        fclose($pve);
        if(move_uploaded_file($tmp,$dest)){
            echo "file has been uploaded" ;
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
    <title>Document</title>
<style>
    img{
        height: 70px;
        width: 70px;
        margin : 2px;

    }
</style>


</head>
<body>


    <form action="20.php" method="post" enctype="multipart/form-data">
        File : <input type="file" name="image" >
        <input type="submit" value="upload"> <br><br><br>

        <?php
       $fptr=fopen("cred.txt","r");
       while(!feof($fptr)){
        echo '<img src="./'.fgets($fptr).'">';
       }
        fclose($fptr);
      

        ?>

    </form>
    
</body>
</html>