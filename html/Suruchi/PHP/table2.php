<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
        .container{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-wrap:wrap;
        }

        .container .box{
            border: 2px solid black;
            height: 190px;
            width: 150px;
            text-align: left;
            padding:5px;
            margin: 5px;
        }

        .container .box:nth-child(odd){
            background-color:cyan;
        }

        .container .box:nth-child(even){
            background-color:pink;
        }
    </style>
</head>
<body>

    <div class="container">
    
    <?php
    function table($num){
        $data="";
    
        for($i=1; $i<=10; $i++){
            $data .= $num . " x " . $i . " = " . ($num*$i) . "<br>";
        }
    
        return $data;
    }


    for($i=1; $i<=50 ; $i++){
        echo '<div class="box"> '. table($i) .' </div>';
    }




    ?>


        
    </div>
    
</body>