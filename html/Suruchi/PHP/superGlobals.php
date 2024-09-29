<?php
// echo "<pre>";

// var_dump($GLOBALS);
// var_dump($_SERVER);

if(isset($_GET['n'])){
    echo "Hi, " . $_GET['n'];
}

if(isset($_POST['n'])){
    echo "Hi, " . $_POST['n'];
}


if(isset($_REQUEST['n'])){
    echo "Hello, " . $_REQUEST['n'];
}




?>


<form action="" method="POST">
    <input type="text" name="n">
    <input type="submit">
</form>