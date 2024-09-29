<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display:flex;
            flex-wrap:wrap;
        }
        .container .box{
            height:40px;
            width:40px;
            background-color:blue;
            color:white;
            font-size:x-large;
            text-align:center;
            line-height:40px;
            margin:3px;

        
        }
      
    </style>
</head>
<body>
    <div class="container">
        
    <?php
    $i=1;
    while($i<=100){
        echo '<div class="box">'.$i.'</div>';
        $i++;
    }

    ?>
    </div>

        
    
</body>
</html>