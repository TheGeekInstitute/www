<?php
$name="ABCD";


// var_dump($_SERVER);
// var_dump($GLOBALS);

// if(isset($_GET['name'])){
//     echo "<h1>" . $_GET['name'] . "</h1>";
// }

// if(isset($_POST['name'])){
//     echo "<h1>" . $_POST['name'] . "</h1>";
// }

if(isset($_REQUEST['name'])){
    echo "<h1>" . $_REQUEST['name'] . "</h1>";
}


?>


<form action="post.php" method="POST">
    <input type="text" name="name" id="">
    <input type="submit" value="Submit">
</form>