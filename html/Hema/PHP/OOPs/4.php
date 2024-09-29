<?php
class Student{
   protected $name;
   protected $gender;

   public function setVal($n,$g){
        $this->name=$n;
        $this->gender=$g;
   }

   public function getVal(){
        echo "Hello, " . $this->name . " you are a " . $this->gender;
   }
}


$myObj = new Student();

// $myObj->name="Amit";
// $myObj->gender='Male';


$myObj->setVal("Sumit","Male");



$myObj->getVal();

// echo $myObj->name;


?>



