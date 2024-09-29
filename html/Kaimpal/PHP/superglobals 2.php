<?php
// echo "<pre>";

// var_dump($_SERVER);

if(isset($_POST['data'])){
    echo "Hi, " . $_POST['data'];
}


if(isset($_REQUEST['data'])){
    echo "Hi, " . $_REQUEST['data'];
}

?>

<form action="post.php" method="post">
    <input type="text" name="data">
    <input type="submit">
</form>