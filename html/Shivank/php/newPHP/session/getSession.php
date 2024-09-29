<?php
// session_start();

// if(iss et($_SESSION['name'])){
//     echo "Hi ," . $_SESSION['name'];
// }


session_start();

if(isset($_SESSION['name'])){
    echo "Hi , 😎 " . $_SESSION['name'];
}

?>