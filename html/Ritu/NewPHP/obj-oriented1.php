<?php
class Arithmatic{
    public $num1;
    public $num2;
    public $result;
    public function __construct($num1= "",$num2=""){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sum(){
        $this->result = $this->num1 + $this->num2;
        return $this->result;
    }

    public function mul(){
        $this->result = $this->num1 * $this->num2;
        return $this->result;
    }

    public function sub(){
        $this->result = $this->num1 - $this->num2;
        return $this->result;
    }
    public function div(){
        $this->result = $this->num1 / $this->num2;
        return $this->result;
    }

   
}


class Find  extends Arithmatic {
    public $num1;
    public $result;

    public function check_odd_even(){
        if($this->num1%2 == 0){
            return $this->num1 . "  is an Even Number";
        }
        else{
            return $this->num1. "  is a Odd Number";
        }
    }
}


$obj = new Find(8,9);

echo $obj->sum();


echo "<br>";


echo "<br>";

echo $obj->sub();

echo "<br>";

echo $obj->div();
echo "<br>";
echo $obj->check_odd_even();

// $obj=new Find(6,5);

// echo $obj->even();



?>