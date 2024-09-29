<?php
// $name="Amit";

// echo "<pre>";


// var_dump($GLOBALS);
//  var_dump($_SERVER);

// var_dump($_GET);


//  if(isset($_GET['data'])){
//     echo "Hello, " . $_GET['data'];
// }

// if(isset($_POST['data'])){
//     echo "Hello, " . $_POST['data'];
// }


if(isset($_REQUEST['data'])){
    echo "Hello, " . $_REQUEST['data'];
}

?>


<form method="GET">
    <input type="text" name="data">
    <input type="submit">
</form>
