<?php

$data=["name"=>"Amit","age"=>26,'gender'=>"Male"];
$data1=["names"=>"Amita","ages"=>25,'genders'=>"Male"];

$data2=$data+$data1;

// echo $data['name'];
echo '<pre>';
var_dump($data2);
file_put_contents("data.json",json_encode($data,JSON_PRETTY_PRINT));



?>