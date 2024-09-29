<?php
// $arry=[
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];
// for($a=0 ; $a < count($arry) ; $a++){

//     for($b=0 ; $b< count($arry[$a]) ; $b++){
//           echo $arry[$a][$b] . "<br>";


//     };
  

// }

$arrr = [
    [
        [1,1,1],
        [2,2,2],
        [3,3,3],
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


  for($a=0 ; $a<count($arrr);$a++){
    for($b=0; $b<count($arrr[$a]);$b++){
        for($c=0 ; $c< count($arrr[$a][$b]) ;$c++){
            echo $arrr[$a][$b][$c] . " ";


        }
        echo"<br>";

    }

    echo"<br>";


}




?>