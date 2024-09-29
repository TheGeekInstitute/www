<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .box{
            width: 150px;
            height: 200px;
            border: 1px solid black;
            text-align:center;
            /* margin:auto; */
            padding: .3rem;
            
        }
    </style>
</head>
<body>
    <div class="container">

    <?php
function table($num=0){
        $data="";
        for($i=1; $i<=10 ; $i++ ){
            $data .= $num . " x " . $i ." = " . $num*$i . "<br>";
        }
        return $data;
}


    for($j=1 ; $j<=1000 ; $j++){
        echo '
        <div class="box">'.table($j).'</div>
        ';
    }
    ?>

    </div>
</body>
</html>
