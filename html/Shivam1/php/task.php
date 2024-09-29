 <?php


function findOddEven($numbers) {
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            echo "$number is an even number <br>";
        } else {
            echo "$number is an odd number <br>";
        }
    }
}

$myArray = [56, 3];
findOddEven($myArray);




function printMultiplicationTable($tableNumber, $numberOfRows) {
    echo "{$tableNumber}";
    
    for ($i = 1; $i <= $numberOfRows; $i++) {
        $result = $tableNumber * $i;
        echo "{$tableNumber} x {$i} = {$result} <br>";
    }
    
}

// Call the function to print the multiplication table of 5 with 10 rows
printMultiplicationTable(3, 10);



?>