<?php
$name =["Amit","Sumit","Ravi","Ankit"];

$data=["a"=>"apple", "b"=>"ball","c"=>"cat","d"=>"dog"];
echo $data['a'];

foreach($data as $key=> $value){
    echo $key . "->" . "$value" . "<br>";
} 


$arr=[
     [1,2,3],
     ["a","b","c"],   
     ["i","ii","iii"]     
];
echo "<pre>";
var_dump($arr);
echo $arr[1][1];


for($i=0 ; $i <count($arr); $i++){
    $new_arr=$arr [$i];
    for($i=0 ; $i <count($new_arr); $j++){
        echo $new_arr[$j] ."  ";
    }
    echo "<br>";
}


?>