<?php

// $arry=[
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];

$arry = [
    [
        [1,1,1],
        [2,2,2],
        [3,3,3]
    ],

    [
        [4,4,4],
        [5,5,5],
        [6,6,6]
    ],

    [
        [7,7,7],
        [8,8,8],
        [9,9,9]
    ]
];

// for($a=0 ; $a < count($arry2) ; $a++){
//     for($b=0; $b>)

//     echo $arry[$a][$a][$a] ."<br>";
// }



// for($i=0 ; $i < count($arry) ; $i++){
    
//     for($j=0; $j< count($arry[$i]) ; $j++){
//         echo $arry[$i][$j] . " ";
//     }
   
//     echo  "<br>";
// }

for($i=0 ; $i<count($arry);$i++){
    for($j=0; $j<count($arry[$i]);$j++){
        for($k=0; $k<count($arry[$i][$j]);$k++){
            echo $arry[$i][$j][$k] . " ";
        }

        echo "<br>";
    }

    echo "<br>";
}






?>