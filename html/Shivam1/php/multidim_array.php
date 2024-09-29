<?php

// $data = ["A","B","C","D"];

// $arr = [["A","B","C"],[1,2,3],["i","ii","iii"]];


// for($i=0 ; $i< count($data) ; $i++){
//     echo $data[$i] . "<br>";
// }

// echo "<pre>";

// for($i=0 ; $i< count($arr) ; $i++){
//     for($j=0 ; $j< count($arr[$i]);$j++){
//         echo $arr[$i][$j] . " " ;
//     }
//     echo  "<br>";
// }


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


for($i=0 ; $i< count($data); $i++){
    for($j=0 ; $j< count($data[$i]) ; $j++){
        for($k=0 ; $k< count($data[$i][$j]); $k++){
            echo $data[$i][$j][$k] . " " ;
        }
        echo "<br>"; }
    
    echo "<br>";

}



$rows=7;

for($i=1; $i <= $rows; $i++){
    for($j=1; $j<=$i ; $j++){
        echo $j . " ";
    }
    echo "<br>";
}

for($i=1; $i <= $rows; $i++){
    for($j=1; $j<=$i ; $j++){
        echo  " * ";
    }
    echo "<br>";
}


for($i=1; $i <= $rows; $i++){
    for($j=1; $j<=$rows ; $j++){
        echo $i . " ";
    }
    echo "<br>";
}
echo "<br>";

$num=4;

for($i=$num; $i>=1; $i--){
    for($j=1; $j<=$num; $j++){
        echo $i ." " ;
    }
    echo "<br>";
       
}

echo "<br>";

for($i=$num; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo $j ." " ;
    }
    echo "<br>";
       
}

echo "<br>";

for($i=$num; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo "*" ." " ;
    }
    echo "<br>";
       
}





?>