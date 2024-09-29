<?php
if(isset($_COOKIE['name'])){
    echo 'HELLO ,' . $_COOKIE['name'];

}

else{
    echo"  No Cookie Found";
}
  
?>
