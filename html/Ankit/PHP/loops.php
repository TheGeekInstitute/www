<?php
#while loop
$i=1;

// while($i<=10){
//     echo $i . "<br>";
//     $i++;  // $i = $i + 1
// }





#do while loop

// do{
//     echo $i . "<br>";
//     $i++;  // $i = $i + 1
// }while($i<=10);


#for loop

// for($i=1; $i<=10 ; $i++){
//     echo $i . "<br>";
// }


$names=["Amit","Sumit","Ravi","Ankit","Bablu"];

// echo $names[1];
// echo count($names);

// for($i=0 ; $i < count($names) ; $i++){
//     echo $names[$i] ."<br>";
// }


#foreach loop

// foreach($names as $value){
//     echo $value . "<br>";
// }


$data = ["a"=>"Apple","b"=>"BatMan","c"=>"Cow"];

// echo $data["a"];

foreach($data as $key => $value){
    echo $key . " -> " .$value . "<br>" ;
}



?>