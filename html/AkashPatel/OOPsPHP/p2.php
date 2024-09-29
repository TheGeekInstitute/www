<?php

    class Students{
        private $name;
        private $age;

        protected function about(){
            return "hii " . $this->name . " " . "you date of birth is " . $this->age;
        }

        public function setValue($val,$data){
            $this->$val=$data;
            // $this->age=$a;
        }

        
        public function getValue($a){
           return $this->$a;
        }
   
        public function caller(){
            $this->about();
        }

    }

    class Data extends Students{

        public function caller(){
            $this->about();
        }

    }


    $obj = new Data();
    $obj->setValue("name",'Amit');
    $obj->setValue("age",25);

    // echo $obj->getValue("age");

    echo $obj->caller();





    // $obj = new Substudents("nikhi")

?>