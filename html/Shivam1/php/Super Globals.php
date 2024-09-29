<?php

$num = 10;
echo "<pre>";
// var_dump($GLOBALS);
// var_dump($_SERVER)


if(isset($_GET['name'])){
    echo $_GET['name'];
}


// if(isset($_POST['name'])){
//     echo $_POST['name'];
// }
?>


<form method="POST" action="data.php">
    <input type="text" name="name">
    <input type="submit">
</form>