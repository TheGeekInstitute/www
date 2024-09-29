<?php


class One{
    protected $name;

 
    public function print_data($result){
        echo $result;
    }

    protected function print_name(){
        echo "Hi, " . $this->name;
    }


    protected function sum($a,$b){
        return $a+$b;
    }

    private function mul($a,$b){
        return $a*$b;
    }

    public function new_mul($a,$b){
        return $this->mul($a,$b);
    }



}


class Two extends One{
    

    // public function sum($a,$b){
    //     return $a-$b;
    // }
    public function __construct($name=""){
        $this->name = $name;
    }

    public function abcd(){
        $this->print_name();
    }


    public function new_sum($a,$b){
        return $this->sum($a,$b);
    }
    
  

}


$obj = new Two("AMit");


// $obj->name = "Amit";

// $obj->abcd();

echo $obj->new_sum(4,5);
echo "<br>";

$obj->print_data($obj->new_mul(4,5));

?>