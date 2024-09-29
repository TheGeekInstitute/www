<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$arry=[1,2,3,4,5,6,7,8,9,"Amit"];



$arry2=[
    [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ],
    [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ],
    [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ]
];

// for($i=0; $i<count($arry);$i++){
//     echo $arry[$i] . "<br>";
// }

// foreach($arry as $value){
//     echo $value;
// }

// echo "<pre>";
$arry1 = [[1,2,3],[4,5,6],[7,8,9]];

// for($i=0; $i<count($arry1);$i++){
//     for($j=0 ; $j<count($arry1[$i]);$j++){
//         echo $arry1[$i][$j] . " ";
//     }

//     echo "<br>";
// }


foreach($arry1 as $i){
    foreach($i as $value){
        echo $value . " ";
    }
    echo "<br>";
}


// echo $arry2[0][0][2];

echo "<br><br>";

for($i=0; $i< count($arry2);$i++){
    for($j=0 ; $j<count($arry2[$i]) ; $j++){
        for($k=0;$k<count($arry2[$i][$j]) ; $k++){
            echo $arry2[$i][$j][$k] . " ";
        }

        echo "<br>";
    }

    echo "<br>";
}




foreach($arry2 as $one){
    foreach($one as $two){
        foreach($two as $val){
            echo $val ." ";
        }
        echo "<br>";
    }
    echo "<br>";
}


?>
    
</body>
</html>

<!-- <?php

// $arry=[1,2,3,4,5,6,7,8,9,"Amit"];



// $arry2=[
//     [
//         [1,2,3],
//         [4,5,6],
//         [7,8,9]
//     ],
//     [
//         [1,2,3],
//         [4,5,6],
//         [7,8,9]
//     ],
//     [
//         [1,2,3],
//         [4,5,6],
//         [7,8,9]
//     ]
// ];

// for($i=0; $i<count($arry);$i++){
//     echo $arry[$i] . "<br>";
// }

// foreach($arry as $value){
//     echo $value;
// }

// echo "<pre>";
// $arry1 = [[1,2,3],[4,5,6],[7,8,9]];

// for($i=0; $i<count($arry1);$i++){
//     for($j=0 ; $j<count($arry1[$i]);$j++){
//         echo $arry1[$i][$j] . " ";
//     }

//     echo "<br>";
// }


// foreach($arry1 as $i){
//     foreach($i as $value){
//         echo $value . " ";
//     }
//     echo "<br>";
// }


// echo $arry2[0][0][2];

// echo "<br><br>";

// for($i=0; $i< count($arry2);$i++){
//     for($j=0 ; $j<count($arry2[$i]) ; $j++){
//         for($k=0;$k<count($arry2[$i][$j]) ; $k++){
//             echo $arry2[$i][$j][$k] . " ";
//         }

//         echo "<br>";
//     }

//     echo "<br>";
// }




// foreach($arry2 as $one){
//     foreach($one as $two){
//         foreach($two as $val){
//             echo $val ." ";
//         }
//         echo "<br>";
//     }
//     echo "<br>";
// }


?> -->