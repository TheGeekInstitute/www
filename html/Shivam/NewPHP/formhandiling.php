<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling</title>
</head>
<body>
    <form method="Post" enctype="multipart/form-data">
        Name : <input type="text" name="name" id="">
        Age :<input type="number" name="age" maxlength="3">
         Class : <input type="text" name="class">
        <input type="submit">
    </form>
    
</body>
</html>


<?php
$name=$age=$class="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];
    
    
    if(isset($_POST['age']) && !empty($_POST['age'])){
        $age=$_POST['age'];
    
    
    
    if(isset($_POST['class']) && !empty($_POST['class'])){
        $class=$_POST['class'];
    
        echo<<<print
        Name : $name <br>
        Age  : $age  <br>
        Class : $class <br>
        print;
    
    
    }
    else{
        echo "Please Enter Your Class";
    }
    
    
    }
    else{
        echo "Please Enter Your age";
    }
    
    
    }
    else{
        echo "Please Enter Your Name";
    }
}


?>