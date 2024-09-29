<?php

$str = '{
    "Peter":35,
    "Ben":37,
    "Joe":43
}';

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$cars = array("Volvo", "BMW", "Toyota");


echo "<pre>";

// var_dump($jsonobj);


// $json_data = json_encode($age);
$json_data = json_encode($cars);
// $json_data = json_decode($str);

    // echo $str;


var_dump($json_data);




?>