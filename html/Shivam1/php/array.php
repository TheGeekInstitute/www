<?php
$name=["Amit","Sumit","Ravi","Anmol"];

// echo $name[0];

//associative array
$data=["a"=>'Apple',"b"=>"Batman","c"=>"Cow","d"=>"Dog"];

// echo $data["a"];

// echo count($name);

// for($i=0; $i<count($name);$i++)
// {
//     echo $name[$i] . "<br>";
// }

// foreach($name as $value){
// echo $value . "<br>";
// }

foreach($data as $key=>$value){
    echo $key . " -> " . $value . "<br>";
}


?>


