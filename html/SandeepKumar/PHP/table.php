<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        .container{
            display:flex;
            align-items:center;
            justify-content:space-evenly;
            flex-wrap:wrap;
        }

        .box{
            border:2px solid black;
            height:220px;
            width:150px;
            margin:10px;
            padding:5px;
        }
    </style>
</head>
<body>


<div class="container">

<?php

function table($num){
    $data="";

    for($i=1; $i<=10 ; $i++){
        $data .= $num . " x " . $i . " = " . ($num*$i) . "<br>";
    }

    return $data;
}



for($i=1; $i<=1000 ; $i++){

    echo '
    <div class="box">'.table($i).'</div>
    
    ';

}






?>



</div>


</body>
</html>