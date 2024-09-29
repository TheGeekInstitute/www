<?php

class data{
    public static $name;

    public static function  print_data(){
        echo self::$name;
    }
}

class A extends data{
    public static $name="ankit";
    public static function print_name(){
        echo parent::$name;
    }
}


// $obj = new data();
// $obj->name ="Ankit";

// $obj->print_data();

data::$name="Amit";
A::print_name();
?>