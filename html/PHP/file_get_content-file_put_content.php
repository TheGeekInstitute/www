<?php
// $data= file_get_contents("data.txt");

// echo $data;

$data='This is data';

echo file_put_contents("data.txt",$data);

?>