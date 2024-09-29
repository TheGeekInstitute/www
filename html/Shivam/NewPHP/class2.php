<?php

class digit{

    public $num1;
    public $num2;
    public function __construct($num1="",$num2=""){
        $this->num1 = $num1;
        $this->num2 = $num2;

    }

    public function oddeven(){
        if(!empty($this->num1) && !empty($this->num2) && $this->num2>0 && is_int($this->num2)){
            $sum=0;
            if($this->num2%2==0){
                for($this->num1; $this->num1<=$this->num2 ;$this->num1+=2){
                    $sum+=$this->num1;
                     echo $this->num1."<br>";
            }
            echo " Sum Of all Even Numbers : ". $sum;
        }
            else{
                for($this->num1; $this->num1<=$this->num2 ;$this->num1+=2){
                    echo $this->num1."<br>";
                    $sum+=$this->num1;
            }
            echo " Sum Of all odd Numbers : ". $sum;
    
        }
    
    }
    
    }

    public function sum(){
        if($this->num1%2==0 && $this->num2%2==0){
            echo "<br>"."Sum of Two Even Number is :".$this->num1 + $this->num2."<br>";
        }
         else if($this->num1%2==0 && $this->num2%2!=0){
                echo "<br>"."Sum Of An Odd And Even Number Is :".$this->num1 + $this->num2."<br>";
            }
            else if($this->num1%2!=0 && $this->num2%2==0){
                echo "<br>"."Sum Of An Odd And Even Number Is :".$this->num1 + $this->num2."<br>";
            }
            else{
                echo "<br>"."Sum Of Two Odd Number Is :".$this->num1 + $this->num2."<br>";
            }
        
        }
        public function sub(){
            if($this->num1%2==0 && $this->num2%2==0){
                echo "<br>"."Subtraction of Two Even Number is :".$this->num1 - $this->num2."<br>";
            }
             else if($this->num1%2==0 && $this->num2%2!=0){
                    echo "<br>"."Subtraction Of An Odd And Even Number Is :".$this->num1 - $this->num2."<br>";
                }
                else if($this->num1%2!=0 && $this->num2%2==0){
                    echo "<br>"."Subtraction Of An Odd And Even Number Is :".$this->num1 - $this->num2."<br>";
                }
                else{
                    echo "<br>"."Subtraction Of Two Odd Number Is :".$this->num1 - $this->num2."<br>";
                }
            
            }
        
    }





$display= new digit(2,16);

echo $display->oddeven();
echo $display->sum();
echo $display->sub();

?>