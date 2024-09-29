<?php

for ($i = 0; $i <= 5; $i++) {
    echo "Iteration $i <br>";
}

echo "<br>";

$count = 0;
while ($count <= 3) {
    echo "Count: $count <br>";
    $count++;
}

echo "<br>";

$count = 0;
do {
    echo "Count: $count <br>";
    $count++;
} while ($count <= 3);

echo "<br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "($i, $j) ";
    }
    echo "<br>";
}


echo "<br>";

// Define the number for which you want to generate the multiplication table
$number = 5;

// Use a for loop to generate the multiplication table
echo "Multiplication table for $number: <br> <br>";

for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result<br>";
}






?>