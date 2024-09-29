<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">

</head>
<body>
    <form action="">
        <input type="number" name="num" placeholder="type number">
        <input type="submit" value="Submit">
    </form>


    <?php

    if(isset($_REQUEST['num']) && !empty($_REQUEST['num'])){
        $num = $_REQUEST['num'];
    
        for($i=1 ; $i <=10 ; $i++){
            echo $num . " x " . $i . " = " . $num*$i . "<br>";
        }
        
    }
    
    ?>


</body>
</html>

