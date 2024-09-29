<?php
$name = 'Amit Singh';
$fptr= fopen("data.txt","a");

fwrite($fptr,$name . "\n");

fclose($fptr);


?>