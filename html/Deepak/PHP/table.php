<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            
        }

        .container .box{
            border: 2px solid black;
            height: 200px;
            width: 150px;
            margin: 5px;
            padding:10px;
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


        for($i=1; $i<=100 ; $i++){
            echo '
            <div class="box">'.table($i).'</div>
            ';
        }



    ?>

        


    </div>
</body>
</html>