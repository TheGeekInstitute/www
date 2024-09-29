<?php
// session_start();

// // $_SESSION['name']="Amit Singh";


// if(isset($_SESSION['name'])){
//     unset($_SESSION['name']);
// }


session_start();

$_SESSION['name']="Shivank Shukla";

if(isset($_SESSION['name'])){
    unset($_SESSION['name']);
}

?>