<?php

class name{
    public $name;
    public $age;
    public $year;


    public function print_data(){
        echo $this->name. $this->age;
    }

    public function __construct(){
        echo 'hellow world';
    }

    public function __destruct(){
        echo 'hellow end';
    }

    private function pre(){
        this.$name='amit';
        this.$age=18;
    }
   
}

// $obj=new name();
// $obj->name="amit";
// $obj->age=49;
// $obj->year=2002;
// echo $obj->pre();




?>