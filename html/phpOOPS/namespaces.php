<?php
require("one.php");
require("two.php");

// namespace one;




$obj = new abcd\Name("Amit");
$obj->print_name();

echo "<br>";

$obj = new one\Name("Sumit");
$obj->print_name();

?>