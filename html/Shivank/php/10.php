<?php
// echo readfile("data.txt");
// $fptr=fopen("data1.txt","a");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);

// echo fgets($fptr);

// echo fgets($fptr);
// var_dump(fgets($fptr));

// var_dump(!feof($fptr));

// while(!feof($fptr)){
//     echo fgets($fptr) . "<br>";
// // }

// while(!feof($fptr)){
//     echo fgetc($fptr) ;
// }

// $name="AMAN";
// fwrite($fptr,$name."\n");


// fclose($fptr);


?>


 <?php
// echo readfile("data.text");

$pve=fopen("name.txt","a");
// echo fgets($pve);
// echo fgets($pve);
// var_dump(fgets($pve));
// var_dump(!of($pve));
//  while(!feof($pve)){
//        echo fgets($pve) . "<br>";
//      }

$name="Shukla";
fwrite($pve,$name. "\n");

fclose($pve);



?> 