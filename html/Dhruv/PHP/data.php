<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && isset($_POST['lastname'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];

        echo "Hello, " . $firstname . " " . $lastname;
    }
}

?>