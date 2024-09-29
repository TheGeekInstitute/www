<?php
$i=100;

// while($i<=10){
//     echo $i . "<br>";
//     $i++;
// }


// do{
//     echo $i . "<br>";
//     $i++; 
// }while($i<=10);


// for($i=1 ; $i<=10 ; $i++){
//     echo $i . "<br>";
// }


$arry = ['Amit',"Sumit","Ravi","Ankit"];

// echo count($arry);

// for($i=0; $i< count($arry) ; $i++){
//     echo $arry[$i] . "<br>";
// }


// foreach($arry as $value){
//     echo $value . "<br>";
// }


$data = ["a"=>"Apple","b"=>"Batman","c"=>"Carrot",'d'=>"Dolphin"];

// echo $data['a'];

foreach($data as $key => $value){
    echo $key . " -> " . $value . "<br>";
}



?>