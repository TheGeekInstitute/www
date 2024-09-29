<?php
// setcookie("Name","Sumit", time() + (60));
// if(isset($_COOKIE['Name'])){
//     echo "Cookie is setted";
// }
//    else{
//     echo "Cookie is not Setted";
//    }
?>

<?php
setcookie("Name", "Amit Kumar", time() + (50));
if(isset($_COOKIE['Name'])){
    echo "Cookie Setted";
}
else{
    echo "Cookie is not Setted";
}
?>