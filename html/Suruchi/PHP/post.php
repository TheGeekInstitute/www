<?php

if(isset($_POST['fname']) && isset($_POST['lname'])){
    echo 'hello ' . $_POST['fname'] . " " . $_POST['lname'];
}


?>