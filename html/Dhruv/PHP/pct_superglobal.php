<?php
    echo "<pre>";
//  var_dump($GLOBALS)
//  var_dump($_SERVER)

// echo $_GET['abcd'];
// echo $_POST['abcd'];
echo $_REQUEST['abcd'];



?>

<form method="POST">
<input type="text" name="abcd">
<input type="submit">
</form>