<?php
// require("1.php");
// include("1545.php");

// echo readfile("data.txt");

$pointer = fopen("data.txt","r");

// echo fgets($pointer);
// echo fgets($pointer);
// echo fgets($pointer);
// echo fgets($pointer);
// echo fgets($pointer);
// var_dump(fgets($pointer));

// var_dump(!feof($pointer));
// while(!feof($pointer)){
//     echo fgets($pointer);
// }

// echo fgetc($pointer);

// while(!feof($pointer)){
//     echo fgetc($pointer);
// }

// echo filesize("data.txt");
fclose($pointer);

$fptr=fopen("data.txt","a");

fwrite($fptr,"ABC544D\n");

fclose($fptr);


?>