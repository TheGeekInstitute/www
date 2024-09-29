<?php
$name=array("Amit","Sumit","Ganesh","Suresh");

$name1=["Amit","Sumit","Ganesh","Suresh"];


$new=[['a','b','c'],[1,2,3],["One","Two","Three"]];


// echo $name1[0];

// echo count($name);

// for($i=0;$i<count($name);$i++){
//     echo $name[$i] . "<br>";
// }

echo "<pre>";

// var_dump($new);

// echo $new[0][0];

// for($i=0 ; $i < count($new) ; $i++){
//     for($j =0 ; $j < count($new[$i]) ; $j++ ){
//         echo $new[$i][$j] . " ";
//     }

//     echo "<br>";
// }

for($i=0 ; $i < count($new) ; $i++ ){
     for($p=0 ; $p < count($new[$i]) ;  $p++){
        echo $new[$i][$p] . " ";
     }
     echo "<br>";
}

?>