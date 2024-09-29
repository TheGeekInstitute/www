<?php
// echo readfile('data.txt')
// readfile('data.txt')
// echo(filesize('data.txt'));\

$ftr = fopen('data.txt','r');

// echo fread($ftr, filesize('data.txt'));\
// echo fgets($ftr);
// echo "<br>";
// echo fgets($ftr);
// echo "<br>";
// echo fgets($ftr);
// echo "<br>";
// echo fgets($ftr);
// echo "<br>";
// echo fgets($ftr);

fclose($ftr);
?>