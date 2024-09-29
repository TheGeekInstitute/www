<?php

$name =["Amit","Sumit","Ravi","Ankit"];


$data = ["a"=>"Apple","b"=>"Ball","c"=>"Cat","d"=>"Dog"];
echo $data['b'];


foreach($data as $key => $value){
    echo $key . " -> " . $value . "<br>";
}



$arr=[
    [1,2,3],
    ["A","B","C"],
    ["I","II","II"]
];


echo "<pre>";

var_dump($arr);
echo $arr[1][1];

for($i=0 ; $i < count($arr); $i++){
    $new_arr=$arr[$i];
 for($j=0 ; $j < count($new_arr) ; $j++){
        echo $new_arr[$j] . "  ";
    }

    echo "<br>";
}


?>