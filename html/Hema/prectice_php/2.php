
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname'])&& isset($_POST['lastname'])){
        echo "Hello"." " . $_POST['firstname']." ".$_POST['lastname'];
    }
}
else{
    header("location:prectice.php");
}

?>