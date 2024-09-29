<?php
if(isset($_GET['name']) && !empty($_GET['name'])){
    echo "<h1>Hi, ". $_GET['name'] . "</h1>" ;
}
else{
    header("location:1.php");
}

?>