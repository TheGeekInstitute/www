<?php
// echo"<per>";

// var_dump($GLOBALS);

// var_dump($_SERVER);

if(isset($_Get['n'])){
    echo "H, " . $_Get['n'];
}

if(isset($_post['n'])){
    echo "Hello, " . $_post['n'];
}

if(isset($_REQUEST['n'])){
    echo "H, " . $_REQUEST['n'];
}

?>


<form action="" method="post">
<input type="text" name="n">
<input type="submit">

</form>
