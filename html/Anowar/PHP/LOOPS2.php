<?php
$names =["amit","sumit","tarik","anower"];


// echo count($names);
// echo $names[0]

$i=0;


// while($i<count($names)){
//     echo $names[$i] . "<br>";
//     $i++;

// }

for($i=0; $i<count($names);$i++){


    echo $names[$i] . "<br>";

}


// foreach($names as $data){
// echo $data . "<br>";
// }


$data=["a"=>"Apple","b"=>"Banana","c"=>"Carrot","d"=>"Doll"];



// echo $data["a"]

// foreach($data as $key => $value){
//     echo $key . ": ) " . $value ."<br>";
// }


foreach($data as $key => $value){
    echo $key . ": ) " . $value . "<br>";
}


?>