<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <style>
        img{
            border: 1px solid red;
            margin: 10px;
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Choose Image : <input type="file" name="image" id="">
        <input type="submit">
    </form>
</body>
</html>

 <?php
$con=mysqli_connect("localhost","root","toor","shukla");
if(isset($_FILES['image']) && $_FILES['image']['size']>0){
    $tmp=$_FILES['image']['tmp_name'];
    $ext=strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));
    $name=bin2hex(random_bytes(10));
    $dest=strtolower("images/".$name.".".$ext);

    if($ext=="png" || $ext =="jpg" || ext=="jepg" || $ext=="webp"){
        $sql="INSERT INTO `image`(`image`) VALUES ('$dest')";
        if(mysqli_query($con,$sql) && move_uploaded_file($tmp,$dest)){
            echo "File has Been Uploaded";
        
        }

    }
    else{
        echo "invalid Image";
    }



}

$sql="SELECT * FROM `image`";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
if($num>0){
    while($data=mysqli_fetch_assoc($query)){
        echo '
        <img src="./'.$data['image'].'" alt="aaa">
    
        ';

    }
}
else{
    echo "no Image Found";
}



// echo bin2hex(random_bytes(5));
$name="Ritu";

// echo bin2hex($name);

echo hex2bin("52697475");

?> 
