<?php

if(isset($_POST['fname']) && isset($_POST ['Lname'])){
    echo 'Hi ' . $_POST['fname'] . " " . $_POST['lname'];
}
?>