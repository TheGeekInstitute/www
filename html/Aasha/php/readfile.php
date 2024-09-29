<?php
echo readfile("data.txt");

$fptr = fopen("data.txt","r");
echo fgets($fptr);
echo fgets($fptr);
echo fgets($fptr);

while(!feof($fptr)){
    echo fgets($fptr);
}

echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);

while(!feof($fptr)){
    echo fgetc($fptr) . "<br>";
}
fclose($fptr);
?>