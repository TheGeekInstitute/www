<?php

// require("data.txt");
// include("data.txtzxz");
// echo "abcd";

// echo readfile("data1.txt");

// echo readfile("data.txt");

// $pointer=fopen("data.txt" , 'r');

// echo fgets($pointer);

// while(!feof($pointer)){
//     echo fgets($pointer);
    
// }
// $pointer=fopen("data2.text" , "w");

// fwrite( $pointer,"this is new line" . "/n");


// fclose($pointer);

$pointer=fopen("data.txt" ,"w");

fwrite($pointer,"THis is new line.....".$name="spiky"."\n");


fclose($pointer);



?>