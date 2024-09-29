<?php
echo readfile("data.txt");
$fptr = fopen("data.txt","a");

// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);

// while(!feof($fptr)){
//     // echo fgets($fptr) ."<br>";
//     echo fgetc($fptr) . "<br>";
// }

fwrite($fptr,"Hello World\n");


fclose($fptr);

?>