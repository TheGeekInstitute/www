<?php

// $json_data='{"name":"Amit","age":25,"gender":"male"}';
$json_data=file_get_contents("data.json");

$a=["name"=>"Sumit","age"=>25,"gender"=>'male'];

$arry1=["name"=>"Ravi","age"=>27,"gender"=>'male'];

// $json_dec = json_decode($json_data,true);

echo "<pre>";
// $data_arry= (array)$json_dec;

// var_dump($data_arry['name']);

// foreach($data_arry as $key =>$val){
//     echo $key . " -> " . $val . "<br>";
// }



// $json_enc = json_encode($arry);

// var_dump($json_enc);

// $m_arry = array_merge($arry,$arry1);
// $m_arry= $arry + $arry1;

// $arry =array();

$oldData[] = json_decode($json_data,true);
$oldData[]=$a;
$oldData[]=$arry1;

// var_dump($oldData);

$json_enc_data=json_encode($oldData,JSON_PRETTY_PRINT);

// $newData = json_encode($a,true);

// var_dump($arry11);

file_put_contents("data.json",$json_enc_data);

// file_put_contents("data.json",$new_json);


$data=file_get_contents("data.json");

$dataArry = (array)json_decode($data);


// var_dump($dataArry);


foreach($dataArry as $index){

    foreach($index as $key => $val){
        if($key=="name" && $val=="Amit"){
            echo "found";
        }
    }

}
?>