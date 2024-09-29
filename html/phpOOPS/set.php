<?php
class abcd{
    private $name;
    public function hello(){
        echo $this->name;
    }

    public function __get($property){
        echo "Not Found " . $property;
    }

    public function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property = $value;
        }
        else{
            echo "Property not found :" . $property;
        }
    }
}


$obj = new abcd();
$obj->name="XYZ";

$obj->hello();

?>