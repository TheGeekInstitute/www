<?php
if(isset($_COOKIE['name'])){
  
    setcookie("name","", time() - (8600 * 30) , "/");
    echo 'Cookie Has Been Deleted';

}
else{
    echo 'Cookie Has Been Deleted';
}


?>