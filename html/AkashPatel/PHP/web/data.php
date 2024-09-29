<?php
$fptr=fopen("data.txt","r");
    while(!feof($fptr)){
        $cred = explode(":",fgets($fptr));
        echo "<pre>";
        var_dump($cred) ;
    }


fclose($fptr);

?>