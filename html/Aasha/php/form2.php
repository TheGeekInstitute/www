<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2</title>

</head>
<body>
    <form action="" method="post">
    name:<input type="text" name="name">
    <br></br>

    dob:<input type="date" name="dob">
    <br></br>

    <input type="submit">

    </form>
    
</body>
</html>

<?php
if(isset($_GET['name']) && isset($_GET['dob'])){
    $name=$_GET['name'];
    $dob=$_GET['dob'];
    echo  '<h1 style="color:red;"> hi,'.$name.' your dob' .$dob;
}

if(isset($_POST['name']) && isset($_POST['dob'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    echo  '<h1 style="color:red;"> hi,'.$name.' your dob' .$dob;
}

if(isset($_REQUEST['name']) && isset($_REQUEST['dob'])){
    $name=$_REQUEST['name'];
    $dob=$_REQUEST['dob'];
    echo  '<h1 style="color:red;"> hi,'.$name.' your dob' .$dob;
}


?>

