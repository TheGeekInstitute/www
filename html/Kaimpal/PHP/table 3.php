<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        .container{
            text-align:center;
        }

        .box{
            height:200px;
            width:170;
            background-color:hotpink;
            border:1px solid black;
            display:inline-block;
            margin:10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    function table($num){
        $data=" ";
        for($i=1;$i<=10; $i++){
            $data .= $num ." x " . $i ." = " .$num*$i . "<br>";
        }
        return $data;
    }

    for($a=1 ; $a<=500 ; $a++){

        echo '
<div class="box">
    '. table($a).'
 </div>

        ';
    }
   
?>
</body>
</html