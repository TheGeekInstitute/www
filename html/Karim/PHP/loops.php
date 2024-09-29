<?php
$i=1000;

// while($i<=10){
//     echo $i . "<br>";
//     $i++;
// }


// do{
//     echo $i . "<br>";
//     $i++;
// }while($i<=10);


// for($i=0; $i<=10 ; $i++){
//     echo $i . "<br>";
// }


$names=["Amit","Sumit","Ravi","Ankit"];

// echo count($names);

// for($i=0; $i<count($names); $i++){
//     echo $names[$i] . "<br>";
// }


// foreach($names as $value){
//     echo $value . "<br>";
// }

$data=["a"=>"Apple","b"=>"BatMan","c"=>"Carrot","d"=>"Dolphin"];

// foreach($data as $key => $value){
//     echo $key . " -> " . $value . "<br>";
// }


for($i=1 ; $i<=10 ;$i++){
    // if($i==5){
    //     break;
    // }

    if($i==5){
        continue;
    }
    echo $i ."<br>";
}

?>