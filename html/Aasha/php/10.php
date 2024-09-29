<?php
function print_name(){
    echo "Amit Singh";
    echo "Sumit Varma";
}

// print print_name();

// function  print_name1($name){
//     echo "Hi," . $name;
// }

// print_name(24);
// print_name1("sumit");

function  sum($a=0,$b=0){
    return $a. " + " . $b. " + " . $a+$b . "<br>";
}

echo sum(1,5);

function sr_no ($num=0){
    $sr="";
    if($num>0){
        for($i=1; $i <= $num ; $i++){
            $sr.= $i . "<br>";
        }
        return $sr;
    }
    else{
        return"please provide a positive number";
    }
}
// echo sr_no(5);


// function table ($num=0){
//     $table="";
//     if($num>0){
//         for($i=i; $i <=10; $i++){
//             $table .=$num . "x" . $i."=" .$num*$i."<br>";
//         }
//         return $table;
//     }
//     else{
//         return"please provide a positive number";
//     }
// }
// echo sr_no(10);

$arr=[
    [1,2,3],
    ["A","B","c"],
    ["i","ii","iii"]
];

echo "<pre>";
var_dump($arr);

echo $arr[1][1];

for($i=0 ; $i<count($arr);$i++){
    $new_arr=$arr[$i];

    for($j=0 ; $j<count($new_arr); $j++)
    echo $new_arr[$j]." ";
    

    echo "<br>";
}



?>