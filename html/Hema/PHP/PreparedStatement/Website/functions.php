<?php

function msg($fullname,$email,$token){
    $data='
        <h1>Hi, '.$fullname.'</h1>
        <a href="http://10.10.10.10/Hema/PHP/PreparedStatement/Website/verify.php?email='.$email.'&token='.$token.'">Verify Now</a>
    ';


    return $data;
}

?>