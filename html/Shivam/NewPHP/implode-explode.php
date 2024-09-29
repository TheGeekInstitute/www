<?php

$arr=["Amit","Sumit","Ravi"];
echo "<pre>";
// var_dump(implode(",",$arr));

$str="Amit,Sumit,Ravi";

// var_dump(explode(",",$str));

$json_text='
{
"name" : "Amit",
"age" : 25,
"gender" : "Male"
}
';

$json_obj = json_decode($json_text);

// var_dump($json_obj);

// echo $json_obj->gender;


$arry=["name"=>"Amit","age"=>25,"gender"=>"Male"];

$josn_data=json_encode($arry);

// var_dump($josn_data);



$file = file_get_contents("data.txt");




?>