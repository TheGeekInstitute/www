<?php


$multiDim = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];


// for($i=0; $i < count($multiDim) ; $i++){
//     for($j=0; $j< count($multiDim[$i]); $j++){
//         echo $multiDim[$i][$j] . " ";
//     }
//     echo "<br>";
// }


$assoc=['one'=>['name'=>"Apple",'b'=>"BatMan"],'two'=>['a'=>"Apple1",'b'=>"BatMan1"]];


echo $assoc['one']['b'];


// foreach($assoc as $arr => $key){

//     echo $arr ." ";

//     foreach($key as $val => $a){
//         echo $val . " -> " . $a . "<br>";
//     }
    
//     echo "<br>";
// }

$names=["Amit",'Sumit','Ravi',"Ankit"];

$data=["a" => "Apple",'b' => "BatMan", "c" => "Cow", "d" =>"Dolphin"];

$emp=["emp1"=>["Amit",'male',25],"emp2"=>["Sonu","Male",28]];




// foreach($emp as $key => $val){
//     echo $key . "<br>";
//     foreach($val as $i){
//         echo $i . " ";
//     }

//     echo "<br>";
// }



// echo $emp["emp1"][0];



?>