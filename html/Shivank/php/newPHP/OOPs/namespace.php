<?php
require("one.php");
require("two.php");


$obj = new two\Name("😎 Amit");
$obj->print_name();

echo "<br>";

$obj = new one\Name(" Sumit");
$obj->print_name();