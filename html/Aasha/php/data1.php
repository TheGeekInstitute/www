<?php
if(isset($_POST['fullname'])
&&(isset($_POST['gender']))
&&(isset($_POST['dob']))){

    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];

    $write = fopen("data.txt","a");

    fwrite($write,"fullname:" . $fullname."\n");
    fwrite($write,"gender:" .$gender."\n");
    fwrite($write,"dob:".$dob."\n\n");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form data</title>
</head>
<body>

    <form action="" method="POST">
        fullname: <input type="text" name="fullname">
        <br></br>

        gender: 
        male <input type="radio"  name="gender" value="male">
        female <input type="radio" name="gender" value="female">
        <br></br>

        dob: <input type="date" name="dob">
        <br></br>

        <input type="submit" value="save">
    </form>

    <br><br><br>
    <fieldset>
        <legend>logs</legend>
        <?php


    
        $read= fopen("data.txt","r");
        while(!feof($read)){
            echo fgets($read) . "<br>";
        }
        fclose($read);

        ?>
</fieldset>


    
</body>
</html>
