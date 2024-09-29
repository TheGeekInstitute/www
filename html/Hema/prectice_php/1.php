<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
            margin: 0;
            padding: 0;
        
        }
        .box{
            /* border:2px solid red; */
            height:230px;
            width:200px;
            margin:50px;
            background-color:pink;
            color:black;
            padding:10px;
        }
        </style>
</head>
<body>
<?php

// var_dump($_REQUEST);




echo "<pre>";
?>
<div class="box">
<form action="2.php" method="POST">
   <input type="text" name="firstname">
   <input type="text" name="lastname">
   <input type="submit">
</form>
</div>


</body>
</html>