<?php

$i=0;

// for($i ; $i<=10 ; $i++){
//     echo $i . "<br>";
//     if($i==5){
//         break;
//     }
// }


for($i ; $i<=10 ; $i++){
    if($i==5){
        continue;
    }
    echo $i . "<br>";
}

?>