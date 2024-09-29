<?php
if(isset($_GET['username']) && !empty($_GET['username']) && isset($_GET['password']) && !empty($_GET['password'])){
    echo "Username : ". $_GET['username'];
    echo "<br>";
    echo "Password : ". $_GET['password'];
}
else if(isset($_GET['login']) && !empty($_GET['login'])){
echo "You have been loggedin via " . $_GET['login'];
}

else{
    header("location:form.php");
}


?>