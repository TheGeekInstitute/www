<?php

$data = [
    [
    ["A","B","C"],
    [1,2,3],
    ["I","II","III"]
    ],

    [
        ["D","E","F"],
        [4,5,6],
        ["IV","V","VI"]
    ],

    [
        ["G","H","I"],
        [7,8,9],
        ["VII","VIII","IX"]
    ]
];

for($i=0; $i<count($data); $i++){
    for($j=0; $j<count($data[$i]); $j++){
        for($k=0; $k<count($data[$i][$j]); $k++){
            echo $data[$i][$j][$k] . " ";
        }
        echo "<br>";
    }
    echo "<br>";
}

// echo "<pre>";

// foreach($data as $index1){
//     foreach($index1 as $index2){
//         foreach($index2 as $data){
//             echo $data . " ";
//         }

//         echo "<br>";
//     }

//     echo "<br>";
// }



?>