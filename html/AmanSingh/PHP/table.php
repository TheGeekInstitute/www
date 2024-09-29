<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1{
            text-align: center;
        }

        .container{
            border: 2px solid black;
            background-color: bisque;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .container .box{
            height: 200px;
            width: 140px;
            background-color:aquamarine;
            margin: 5px;
            border-radius: 5px;
            box-shadow: 0px 0px 4px black;
            padding:10px;
        }
    </style>
</head>
<body>
<?php
function table($num=0){
    for($i=1; $i<=10 ; $i++ ){
        echo $num . " X " . $i . " = " . $num*$i . "<br>";
    }
}



?>


    <h1>Table</h1>
    <div class="container">
        <div class="box"><?php table(1); ?></div>
        <div class="box"><?php table(2); ?></div>
        <div class="box"><?php table(3); ?></div>
        <div class="box"><?php table(4); ?></div>
        <div class="box"><?php table(5); ?></div>
        <div class="box"><?php table(6); ?></div>
        <div class="box"><?php table(7); ?></div>
        <div class="box"><?php table(8); ?></div>
        <div class="box"><?php table(9); ?></div>
        <div class="box"><?php table(10); ?></div>
        <div class="box"><?php table(11); ?></div>
        <div class="box"><?php table(12); ?></div>
        <div class="box"><?php table(13); ?></div>
        <div class="box"><?php table(14); ?></div>
        <div class="box"><?php table(15); ?></div>
        <div class="box"><?php table(16); ?></div>
        <div class="box"><?php table(17); ?></div>
        <div class="box"><?php table(18); ?></div>
        <div class="box"><?php table(19); ?></div>
        <div class="box"><?php table(20); ?></div>

    </div>
</body>
</html>