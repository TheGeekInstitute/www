<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        

</head>
<body>
    <?php 

    function table($num){
        $data = "";

        for($i=1; $i<=10 ; $i++){
            $data .= $num . "x" . $i . "=" .($num*$i) . "<br>";

        }

        return $data;

    }


    ?>
</body>
</html>