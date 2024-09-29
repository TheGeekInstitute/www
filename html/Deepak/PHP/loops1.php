<?php
// $i=100;
// while($i<=10){
//     echo $i . "<br>";
//     $i++;
// }


// do{
//     echo $i . "<br>";
//     $i++;
// }while($i<=10);


// for($i=1; $i<=5 ; $i++){
//     echo $i . "<br>";
// }


$names=["Amit","Sumit","Ravi","Ank","Siit","Babluta"];

// echo count($names);
// echo $names[3]
// $i=0;
// while($i < count($names)){
//     echo $names[$i] . "<br>";
//     $i++;
// }

// for($i=0; $i<count($names) ; $i++){
//     echo $names[$i] . "<br>";
// }


// foreach($names as $value){
//     echo $value . "<br>";
// }


$data=["a"=>"Apple","b"=>"Ball","c"=>"Cat"];

// echo $data['a'];


foreach($data as $key => $value){
    echo $key . " -> " .  $value . "<br>" ;
}

?>