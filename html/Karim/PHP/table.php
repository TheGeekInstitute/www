<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            padding: 10px;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-wrap:wrap;
        }

        .box{
            margin: 10px;
            border: 2px solid black;
            padding:5px;
            width:100px;
        }
    </style>
</head>
<body>
    <div class="container">

    <?php
    function table($num){
        $data="";
        for($i=1; $i<=10;$i++){
             $data .= $num . " x " . $i . " = " . $num*$i . "<br>";
        }
        return $data;
        
    }



    for($j=1 ; $j<=100 ; $j++){
    echo '<div class="box">'.table($j).'</div>';
    }


    ?>






    </div>
</body>
</html>