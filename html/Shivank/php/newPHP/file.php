<?php

// echo file_get_contents("data.txt");
// echo readfile("data.txt");


$fptr=fopen("data.txt","r");

// $size=filesize("data.txt");
// echo fread($fptr,$size);

// echo fgets($fptr);
// echo fgets($fptr);

// while(!feof($fptr)){
//     // echo fgets($fptr);
//     echo fgetc($fptr);

// }



fclose($fptr);


$file=fopen("data.txt","a");
$name="Amit Singh1";

fwrite($file,$name . "\n");



fclose($file);

// unlink("data1.txt");

?>