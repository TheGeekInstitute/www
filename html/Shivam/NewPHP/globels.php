<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="text" name="name">
        <input type="submit" value="Show">
    </form>
</body>


</html>


<?php


    // if(isset($_POST['name'])){
    //     if(!empty($_POST['name'])){
    //         echo "<h1>" . $_POST['name']. "</h1>";
    //     }
    //     else{
    //         echo "Please Enter Name";
    //     }
    
    // }
 
    if(isset($_REQUEST['name'])){
        if(!empty($_REQUEST['name'])){
            echo "<h1>" . $_REQUEST['name']. "</h1>";
        }
        else{
            echo "Please Enter Name";
        }
    
    }
 



?>