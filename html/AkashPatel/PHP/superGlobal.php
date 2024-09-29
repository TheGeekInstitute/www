<?php
echo "<pre>";
// var_dump($GLOBALS);

// var_dump($_SERVER['HTTP_USER_AGENT']);
// var_dump($_REQUEST);
echo "<pre>";
print_r($_POST);

// var_dump($_GET);

// var_dump($_FILES);

?>


<form method="post" enctype="multipart/form-data">
<input type="text" name="name">
<!-- <input type="file" name="image"> -->
<input type="number" name="age">
<input type="submit">
</form>