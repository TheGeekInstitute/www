<?php
// readfile("data.txt");

// echo filesize("data.txt");

// $fptr = fopen("data.txt","r");
// echo fread($fptr,filesize("data.txt"));

// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// var_dump(fgets($fptr));
// var_dump(feof($fptr));

// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);

// while(!feof($fptr)){
//     echo fgets($fptr);
// }


// fclose($fptr);


$name='asdas';

$fptr = fopen("data.txt","a");
fwrite($fptr,$name . "\n");
fclose($fptr);

?>