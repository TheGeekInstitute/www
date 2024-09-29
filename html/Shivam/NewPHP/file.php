<?php
// echo readfile("data.txt");

$fptr=fopen("data.txt","a");

// $size=filesize("data.txt");
// echo fread($fptr,$size);

// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// var_dump(fgets($fptr));

// while(!feof($fptr)){
//     echo fgets($fptr);
// }


// while(!feof($fptr)){
//     echo fgetc($fptr);

// }
$name="Shivam1";

fwrite($fptr,$name . "\n");





fclose($fptr);

?>