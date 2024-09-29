<?php
##Arithmetic operators

$x=10;
$y=3;

#+	Addition	$x + $y	Sum of $x and $y	

// echo $x+$y;

#-	Subtraction	$x - $y	Difference of $x and $y	

// echo $x-$y;

#*	Multiplication	$x * $y	Product of $x and $y	
// echo $x*$y;

#/	Division	$x / $y	Quotient of $x and $y

// echo $x/$y;

#%	Modulus	$x % $y	Remainder of $x divided by $y	

// echo $x%$y;


#**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power

// echo $x**$y;


##Assignment operators

// $x=$y;
// $x+=$y;   //$x = $x+$y;
// echo "<br>";

// echo $x;

##Comparison operators

#==	Equal	$x == $y	

// var_dump($x==$y);


#===	Identical	$x === $y

// var_dump($x===$y);

#!=	Not equal		

// var_dump($x!=$y);

#<>	Not equal		

// var_dump($x<>$y);


#!==	Not identical

// var_dump($x!==$y);

#>	Greater than	
#<	Less than		
#>=	Greater than or equal to		
#<=	Less than or equal to	



##Increment/Decrement operators

#POST INCREMENT
// echo $x++;   //$x = $x +1;
// echo "<br>";
// echo $x;
// echo "<br>";
// echo $x;

#PRE INCREMENT
// echo ++$x;   //$x = 1+$x ;
// echo "<br>";
// echo $x;
// echo "<br>";
// echo $x;

#POST Decrement
// echo $x--;   //$x = $x -1;
// echo "<br>";
// echo $x;
// echo "<br>";
// echo $x;






##Logical operators

// var_dump(10>3 && 5>2 && 6>30);
// var_dump(10>3 || 5>2 || 6>30);
// var_dump(!($x==$y));




##String operators
// $first="Amit";
// $last="Singh";

// echo $first . " " . $last;

$name='Ravi';
$name .="Sumit";

echo $name;

?>