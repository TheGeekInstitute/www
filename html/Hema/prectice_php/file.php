<?php
readfile ("deta.text");
echo readfile("deta.text");

echo filesize("deta.text");

$fptr = fopen("deta.text","r");

echo fread($fptr,filesize("deta.text"));

echo fgets($fptr);
echo fgets($fptr);
var_dump(feof($fptr));

echo var_dump(feof($fptr));


echo fgetc($fptr);
echo fgetc($fptr);

while(!feof($fptr)){
    echo fgets($fptr). "<br>";
}

$name="task";
?>