<?php
trait A{
    function print_name($name){
        echo $name;
    }
}



class B{
    use A;
}

class C{
    use A;
}


// $obj = new C();

// $obj->print_name('Amit');
require("one.php");
require("two.php");


$obj  = new two\Name("Amit");
$obj->print_name();
?>