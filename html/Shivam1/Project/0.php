<!DOCTYPE html>
<html>
<head>
    <title>Sum and Product of Numbers</title>
</head>
<body>
    <h1>Sum and Product of Numbers</h1>
    <form method="post" action="">
        <label for="number">Enter a positive integer:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get the user input
        $n = intval($_POST['number']);
        
        // Initialize variables to store the sum and product
        $sum = 0;
        $product = 1;
        
        // Use a for loop to calculate the sum and product
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;      // Calculate the sum
            $product *= $i;  // Calculate the product
        }

        // Display the results
        echo "<p>Sum of numbers from 1 to $n is: $sum</p>";
        echo "<p>Product of numbers from 1 to $n is: $product</p>";
    }
    ?>
</body>
</html>
