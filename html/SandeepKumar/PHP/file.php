<?php

// echo readfile("data.txt");

// echo filesize("data.txt");

// $fptr = fopen("data.txt","r");

// echo fread($fptr,filesize("data.txt"));
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);


// var_dump(feof($fptr));

// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);


// while(!feof($fptr)){
//     echo fgets($fptr) . "<br>";
// }


$fptr = fopen("data1.txt","a");

fwrite($fptr,"hello World1\n");






fclose($fptr);


?>