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
            box-sizing: border-box;
        }

        .container{
            text-align: center;
        }

        .box{
            height: 250px;
            width: 170px;
            background-color: red;
            border: 1px solid black;
            margin: 10px;
            display:inline-block;
        }
    </style>

</head>
<body>
 <div class="container">
    <?php
function table($num){
    $data="";
    for($i=1; $i<=10 ; $i++){
        $data .= $num . " x " . $i . " = " . $num*$i . "<br>";
    }

    return $data;
}


for($a=1 ; $a<=100 ; $a++){
    echo '
    <div class="box">
        '.table($a).'
    </div>
    
    ';
}

?>   
</body>
</html>