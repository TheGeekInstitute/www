
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-wrap:wrap;
        }

        .container .box{
            border:1px solid black;
            height:180px;
            width:130px;
        }
    </style>
</head>
<body>
    <div class="container">

<?php

function table($num){
    $data="";
    if(!empty($num) && is_int($num)){
        for($i=1; $i<=10 ; $i++){
            $data .= $num . " x " . $i . " = " . $num*$i . "<br>"; 
        }    
    }

    return $data;
}


// echo table(10);



for($i=1; $i<=20 ; $i++){
    echo '
    <div class="box">
        '.table($i).'    
    </div>

    ';
}

?>

    </div>
</body>
</html>
