<?php

echo "<pre>";

if(isset($_COOKIE['name']) && isset($_COOKIE['age']) && isset($_COOKIE['class'])){
    echo "Hi, ".$_COOKIE['name']."<br>". "Age =" .$_COOKIE['age']."<br>" . "Class =". $_COOKIE['class'];
}
?>