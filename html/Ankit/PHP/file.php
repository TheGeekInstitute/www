<?php
// echo readfile("data.txt");
// echo filesize("data.txt");

// $fptr=fopen("data.txt","r");
// echo fread($fptr,filesize("data.txt"));

// echo fgets($fptr);
// // var_dump(feof($fptr));

// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));

// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);

// while(!feof($fptr)){
//     echo fgets($fptr) . "<br>";
// }



// fclose($fptr);

$name="Amit";
$fptr=fopen("data.txt","a");
fwrite($fptr,$name."\n");
fclose($fptr);




?>