<?php

// echo readfile("data.txt");


// $fptr = fopen("data.txt","r");
// echo fread($fptr,filesize("data.txt"));

// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));

// var_dump(feof($fptr));

// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);

// while(!feof($fptr)){
//     echo fgets($fptr);
// }
// fclose($fptr);



$fptr= fopen("data.txt","a");
fwrite($fptr,"Hello\n");

fclose($fptr);





?>