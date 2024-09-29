<?php


    class Student{
        public $name;
        public $age;

        public function __construct($n , $a){
            $this->name = $n;
            $this->age = $a;
        }
        private function about(){
            return "hey " . $this->name . " are you " . $this->age . " year old.";
        }

        public function about1(){
            return $this->about();
        }
        
        protected function about2(){
            return "hey ". $this->name . " your brother is " . $this->age . " is your old";
        }

        public function about3(){
            return "hey ". $this->name . " your brother is " . $this->age . " is your old";
        }
    }

    // $obj = new Student();
    // $obj->name = "Akash";
    // $obj->age = '51';

    // // echo $obj->about1();
    // echo $obj->about3();

    class subStudent extends Student{
        public function about4(){
            return $this->about2();
        }
    }

    $obj = new subStudent("anup",44);

    echo $obj-> about4();

    
    // class Student{
    //     public $a;
    //     public $b;
    //     public function __construct(){
    //         echo "hey there how are you ." . '<br>'; 
    //     }

    //     public function name(){
    //         return  "hey " .$this->a . " " . $this->b . '<br>'; 
    //     }

    //     public function __destruct(){
    //         echo "hey this is the end of line";
    //     }
    // }

    // $obj = new Student();

    // $obj->a = "Akash";
    // $obj->b = "Patel";

    // echo $obj->name();
?>