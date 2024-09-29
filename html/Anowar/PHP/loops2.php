<?php

$names=["Amit",'Sumit',"Ravi","Ankit"];


// echo count($names);

// echo $names[3];

// $i=0;

// while($i<count($names)){
//     echo $names[$i] . "<br>";
//     $i++;
// }

// for($i=0; $i<count($names);$i++){
//     echo $names[$i] . "<br>";

// }


// foreach($names as $data){
//     echo $data . "<br>";
// }


$data=["a"=>"Apple","b"=>"Banana","c"=>"Carrot"];

// echo $data['a'];


foreach($data as $key => $value){
    echo $key . " -> " .  $value . "<br>";
}

?>