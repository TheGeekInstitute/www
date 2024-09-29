<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            height:50px;
            width:50px;
            margin:5px;
            background-color:red;
            display:inline-block;
        }
    </style>
</head>
<body>


<?php
for($i=1 ; $i<=500 ; $i++){
    echo '
    <div class="box">'.$i.'</div>
    ';
}

?>

</body>
</html>