<?php
// // require("1asa.php");
// include("1sadsa.php");
// echo "<br>abcd<br>";

// echo $name;


// echo readfile("data.txt");

// $pointer=fopen("data.txt","r");

// // echo fgets($pointer);
// // var_dump(!feof($pointer));
// // while(!feof($pointer)){
// //     echo fgets($pointer) . "<br>";
// // }

// // echo fgetc($pointer);
// while(!feof($pointer)){
//         echo fgetc($pointer);
//     }
    


// fclose($pointer);
// 

$pointer=fopen("data.txt","a");


for($i=1;$i<=10;$i++){
    fwrite($pointer,$i."\n");
}

fclose($pointer);

?>