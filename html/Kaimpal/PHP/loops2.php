<?php

#while loops

// $i=1

while($i<=5){
    echo $i . "<br>";
    $i++;
}

while($i<=50){
    echo $i . ". ABCD <br>";
    $i++;
}

while($i<=10){
    if($i%2==0){
        echo $i . "<br>";
    }
    $i++;
}

while($i<=10){
    if($i%2!=0){
        echo $i . "<br>";
    }
    $i++;
}


// table

$table=171;

while($i<=10){
    echo $table . " x " . $i  . " = " . $table*$i . "<br>";
    $i++;
}


?>