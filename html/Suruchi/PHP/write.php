<?php

$fptr=fopen("data.txt","a");
fwrite($fptr,"hello\n");
fclose($fptr);




?>