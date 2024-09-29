<?php
// echo "<pre>";

// var_dump($GLOBALS);

// var_dump($_SERVER);

// if(isset($_GET['name'])){
//     echo "Hi, ". $_GET['name'];
// }


// var_dump($_GET);



// if(isset($_POST['name'])){
//     echo "Hi, ". $_POST['name'];
// }


if(isset($_REQUEST['name'])){
    echo "Hi, ". $_REQUEST['name'];
}


?>



<form action="post.php" method="POST">
    <input type="text" name="name">
    <input type="submit">
</form>
