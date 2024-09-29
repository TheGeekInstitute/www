<?php

// echo readfile("data.txt");

// echo filesize("data.txt");

$fptr=fopen("data.txt","r");

// echo fread($fptr,filesize("data.txt"));
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);

// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);


// var_dump(feof($fptr));

while(!feof($fptr)){
    echo fgets($fptr) . "<br>";
}



fclose($fptr);


?>