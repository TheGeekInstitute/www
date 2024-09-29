<?php
echo("<h1>Hello World!</h1>");


$var=6.88;
$var1=5;
$var2="ABCD";

echo $var;
echo "<br>";
echo $var1;
echo "<br>";

// echo var_dump($var);
// echo var_dump($var2);

?>


<form method="get" action="2.php">
    <input type="text" name="name">
    <input type="submit" value="<?php echo 'Send' ?>">

</form>


