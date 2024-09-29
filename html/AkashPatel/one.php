<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-color: <?php if(isset($_GET['color']) && !empty($_GET['color'])){ echo $_GET['color']; }?> ;
}


        .one{
            background-color: red;
            height: 100px;
            width: 100px;
        }

        .two{
            background-color: green;
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>

<?php
if(isset($_GET['show']) && !empty($_GET['show'])){
    $show=$_GET['show'];

    if($show=="one"){
        echo '<div class="one"></div>';
    }
    else if($show=="two"){
        echo '<div class="two"></div>';
    }
    else{
        echo "";
    }
}


?>

<a href="one.php?color=red">Red</a>
<a href="one.php?color=green">green</a>


    
</body>
</html>