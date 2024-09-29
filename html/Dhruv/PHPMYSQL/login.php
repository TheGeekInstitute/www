<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div{
        background-color: red;
        height: 500px;
        width: 500px;
        color: white;    
        text-align: center; 

    }

    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    username <input type="text" name="username">
    <br>
    password <input type="password" name="password">
    <br>
    image <input type="file" name="image">

    

    <input type="submit">
    </form>
    
</body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST['username']) && !empty($_POST['username'])){
        $name=$_POST['username'];

        
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $password=$_POST['password'];

    if(isset($_POST['image']) && !empty($_POST['image'])){  $image=$_POST['image'];
    
        if(isset($_FILES['image'])){
            $image = $_FILES['image']['username'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $dest="upload-images/".$image;
            $img = move_uploaded_file($tmp_name,$dest);

        
        $sql="INSERT INTO `Login_page`(`Username`, `password`, `image`) VALUES ('$name','$password','$img')";

        $query=mysqli_query($conn,$sql);
        if($query){
            echo "hllo world";
        }else{
            echo "not world";
        }

    }
 
    }
    else{
        echo "Please Enter Username and Password";
    }

    }
}
}


?>



