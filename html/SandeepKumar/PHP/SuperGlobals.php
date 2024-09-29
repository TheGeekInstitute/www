<?php

// $name="ABCD";


// var_dump($GLOBALS);
// var_dump($_SERVER);

if(isset($_GET['data'])){
    echo "Hi, " . $_GET['data'];
}
if(isset($_POST['data'])){
    echo "Hi, " . $_POST['data'];
}


if(isset($_REQUEST['data'])){
    echo "Hi, " . $_

<form action="post.php" method="POST">
    <input type="text" name="data">
    <input type="submit">
</form>


<!-- 
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION 
-->
