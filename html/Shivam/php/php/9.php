<?php
#$GLOBALS
// echo "<pre>";
// var_dump($GLOBALS);

#$_SERVER
// var_dump($_SERVER);

#$_REQUEST
// var_dump($_REQUEST);
#$_POST
// var_dump($_POST)
#$_GET
#$_FILES



?>


<form method="post" enctype="multipart/form-data">
    Full Name : <input type="text" name="name"> <br> <br>
    <input type="file" name="image">
    <br><br>
    <input type="submit">
</form>

<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    echo "<h1> Hi, ". $name. " !</h1>";
}

if(isset($_GET['name'])){
    $name=$_GET['name'];
    echo "<h1> Hi, ". $name. " !</h1>";
}


// var_dump($_FILES['image']);
?>