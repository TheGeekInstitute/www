<?php
$json_data=file_get_contents("json.json");

$a=["name"=>"Sumit","age"=>25,"gender"=>'male'];

$arry1=["name"=>"Ravi","age"=>27,"gender"=>'male'];

$decode=json_decode($json_data,true);


?>