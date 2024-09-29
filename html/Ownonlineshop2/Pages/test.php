<?php
   if(isset($_POST['email']) && !empty($_POST['email'])){
    $email=mysqli_real_escape_string($connection,input_filter($_POST['email']));
    $_SESSION['email']=$fullname;
    
}
else{
    $error=true;
    $color="red";
    $msg="Fullname";
    $alt_msg="Should not be Empty";
}


// echo time();

// echo password_hash("manikumar",PASSWORD_BCRYPT);

var_dump(password_verify())
?>



