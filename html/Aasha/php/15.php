<?php

// $name=["Amit","Sumit","Riya","Geeta","Suman","Radha"];
// echo "Hi," . $name[5];


// echo count($name);


// for($i=0 ; $i<count ($name); $i++){
//     echo "Hi, " . $name[$i]. "<br>";

// }

// $name=["Aman", "Suman", "Radha", "Sita","Geeta", "Amit"];
// echo "Hi,". $name[2];


// echo count($name);


// for($i=0 , $i<count($name); $i++){
//     echo "Hi,"
// }


// $data = [
//     [1,2,3],
//     ["A","B","C"],
//     ["i","ii","iii"]
// ];


// echo $data[1][2];

// echo "<pre>";
// var_dump($data);



// for($i=0 ; $i < count($data) ; $i++){
//     for($j=0 ; $j < count($data[$i]); $j++){
//         echo $data[$i][$j] . " ";
//     }
//     echo "<br>";
// }

$data = [
    [1,2,3,],
    ["a","b","c"],
    ["i","ii","iii"],
];

echo $data[2][1];

echo "<pre>";
var_dump($data);

for($i=0 ; $i < count($data) ; $i++){
   for($j=0 ; $j < count($data[$i]); $j++){
    echo $data[$i][$j] . " ";
   } 
   echo "<br>";  
}

$data=[
  [1,2,3,],
  ["a","b","c"],
  ["i","ii","iii"],
];

echo  $data[2][1];

echo "<pre>";
var_dump($data);

for($j=0 ; $i < count($data) ; $i++){
for($j=0 ; $j < count($data[$i]); $j++)
{

}

}





?>