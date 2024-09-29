<?php
// if(isset($_POST['firstname']) && isset($_POST['lastname'])){
//     echo "<h1>Hello, ". $_POST['firstname'] . " " . $_POST['lastname']."</h1>";
// }


if(isset($_REQUEST['firstname']) && isset($_REQUEST['lastname'])){
    echo "<h1>Hello, ". $_REQUEST['firstname'] . " " . $_REQUEST['lastname']."</h1>";
}


?>