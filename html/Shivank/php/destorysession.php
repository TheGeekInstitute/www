<?php
// session_start();
// if(isset($_SESSION['name'])){
//     session_destroy();
//     echo " Session Destoryed";
// }
// else{
//     echo "Session not setted";
// }
?>

<?php
session_start();
if(isset($_SESSION['name'])){
    session_destroy();
    echo " Session Destroyed";
}
else {
    echo "Session not Setted";
}



?>

