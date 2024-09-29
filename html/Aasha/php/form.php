<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        Name : <input type="text" name="name">
        <br><br>
        DOB : <input type="date" name="dob">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
if(isset($_GET['name']) && isset($_GET['dob'])){
    $name=$_GET['name'];
    $dob=$_GET['dob'];

    echo '<h1 style="color:red;"> Hi,'.$name.' Your DOB '. $dob;
}

if(isset($_POST['name']) && isset($_POST['dob'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];

    echo '<h1 style="color:green;"> Hi,'.$name.' Your DOB '. $dob;
}

if(isset($_REQUEST['name']) && isset($_REQUEST['dob'])){
    $name=$_REQUEST['name'];
    $dob=$_REQUEST['dob'];

    echo '<h1 style="color:blue;"> Hi,'.$name.' Your DOB '. $dob;
}


?>