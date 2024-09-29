<?php
// setcookie("Name","Shivank",time() - (86400 * 30));
// setcookie("Name","Sumit", time() + (60));
// if(isset($_COOKIE['Name'])){
//     echo "Cookie is destroyed";
// }

?>


<?php
setcookie("Name", "Amit Kumar", time() - (50));
if(isset($_COOKIE['Name'])){
    echo "Cookie is Destroyed";
}
?>



