<?php
// session_start();

// if(isset($_SESSION['name'])){
//     echo "Hi, Mr. " .$_SESSION['name'];
// }
// else{
//     echo 'Session not Found';
// }
?>


<?php
session_start();
if(isset($_SESSION['name'])){
    echo "Hi, Mr. " .$_SESSION['name'];
}
else{
    echo "Session is Not Found";
}



?>