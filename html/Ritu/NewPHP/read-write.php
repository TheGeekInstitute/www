<?php
// echo readfile("data.txt");

$fptr=fopen("data.txt","a");
$size=filesize("data.txt");
// echo $size;
// echo fread($fptr,$size);

// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));


// while(!feof($fptr)){
//     echo fgets($fptr);

// }

// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);

// while(!feof($fptr)){
//     echo fgetc($fptr);
// }
fwrite($fptr,"Hello\n");




fclose($fptr);
?>