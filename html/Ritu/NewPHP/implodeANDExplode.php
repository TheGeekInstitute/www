<?php

$arr=["aman","Ravi","Sumit"];


echo "<pre>";

$str="aman*Ravi*Sumit";
// echo implode(",",$arr);

// var_dump(explode("*" ,$str));

$data='
{
"name" : "Ankit",
"age" : 25,
"gender" : "Male"
}
';


$new_arr=["name"=>"Ankit","age"=>30,"gender"=>"Male"];

$abcd=json_decode($data);


// echo $abcd->gender;


$new_json=json_encode($new_arr);

var_dump($new_json);


?>