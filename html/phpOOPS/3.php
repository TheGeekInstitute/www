<?php

$data=file_get_contents("data.txt");

//  var_dump();
echo "<pre>";
// echo count(json_decode($data));
$json_obj=json_decode($data);


$new_arr=["name"=>"Anmol","age"=>150];

// array_pus
// for($i=0; $i< count($json_obj); $i++){
//     echo $json_obj[$i]->name . "<br>";
//     echo $json_obj[$i]->age . "<br>";

// }

// var_dump(array_push($json_obj,$new_arr));


$abcd=array_merge($json_obj,$new_arr);

var_dump(json_encode($abcd))


?>