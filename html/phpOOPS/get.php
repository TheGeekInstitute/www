<?php
class abc{
    private $data =["a"=>"Apple","b"=>"ball"];

    public function __get($key){
        if(array_key_exists($key,$this->data)){
            return $this->data[$key];
        }
        else{
            return "Not Found";
        }
    }
}


$obj= new abc();

echo $obj->a;

?>