<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap:wrap;
        }

        .container .box{
            border: 2px solid black;
            height: 200px;
            width: 160px;
            text-align: left;
            padding:10px;
            margin:10px;
        }

        .container .box:nth-child(odd){
            background-color: yellow;
        }

        .container .box:nth-child(even){
            background-color: greenyellow;
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


    for($a=1; $a<=20 ; $a++){
        echo '
        <div class="box">'.table($a).'</div>
        ';
    }

    ?>

        
   
    </div>
</body>
</html>