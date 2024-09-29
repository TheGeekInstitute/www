<?php
// $i=100;


// while($i<=10){
//     echo $i . "<br>";
//     $i++;
// }

// do{
//     echo $i . "<br>";
//     $i++;
// }
// while($i<=10);


// for($i=1; $i<=10 ; $i++){
//     echo $i . "<br>";
// }


$names=["Amit","Sumit","Ravi","Ankit","Bablu"];

$data=["a"=>"Apple","b"=>"Ball","c"=>"Cow","d"=>"Dog"];


// echo count($names);

// for($i=0; $i<count($names);$i++){
//     echo $names[$i] . "<br>";
// }


// foreach($names as $value){
//     echo $value . "<br>";
// }


// foreach($data as $key => $value){
//     echo $key . " -> " . $value . "<br>";
// }


// $i=0;
// while($i<count($names)){
//     echo $names[$i] . "<br>";
//     $i++;
// }





$arry = [[1,1,1],[2,2,2],[3,3,3]];

// for($i=0 ; $i < count($arry) ; $i++){
//    for($j=0; $j< count($arry[$i]) ; $j++){
//         echo $arry[$i][$j] . " ";
//    }

//     echo "<br>";
// }



// foreach($arry as $index){

//     foreach($index as $value){
//         echo $value . " ";
//     }

//     echo "<br>";
// }




for($i=1; $i<=10 ; $i++){
    
    if($i==5){
        continue;
    }
    
    echo $i . "<br>";

    // if($i==5){
    //     break;
    // }
}




?>