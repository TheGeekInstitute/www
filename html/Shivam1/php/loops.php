<?php
//while loop

$i=100;

// while($i<=10){
//     echo $i . "<br>";
//     $i++;
// }


// do{
// echo $i . "<br>";
// $i++;
// }
// while($i<=10);


// for($i=1;$i<=10;$i++){
// echo $i . "<br>";
// }
$name=["Amit","Sumit","Ravi","Anmol"];

$data=["a"=>'Apple',"b"=>"Batman","c"=>"Cow","d"=>"Dog"];

// foreach($name as $value){
//     echo $value  . "<br>";
// }


foreach($data as $key => $value){
    echo $key .  " -> " . $value . "<br>";
}

?>