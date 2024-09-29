<?php
session_start();

if(isset($_GET['login'])){
    $_SESSION['username']="ABCD";
}

if(isset($_GET['logout'])){
    session_destroy();
    header("location:".$_SERVER['PHP_SELF']);
}


if(isset($_SESSION['username'])){
    echo "Hello Mr. " . $_SESSION['username'];
    echo '<a href="?logout">Logout</a>';

}
else{
    echo '
    <a href="?login">Login</a>
    ';
}


?>


