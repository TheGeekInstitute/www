<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])){
        $firstname = $_POST['firstname'];
        $lastname=$_POST['lastname'];

        $fptr=fopen("data.txt","a");
        fwrite($fptr,"Firstname : " . $firstname . "\n");
        fwrite($fptr,"Lastname : " . $lastname . "\n\n");

        fclose($fptr);
    }
    else{
        echo "Please Enter Value in Bot Fields";
    }
}

if(isset($_GET['clear'])){
    $read=fopen("data.txt","w");
    fclose($read);
    header("location:ptc_form.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="submit">
    </form>
    <a href="?clear=1">Clear Data</a>

    <fieldset>
        <legend>Logs</legend>
        <?php

    $read=fopen("data.txt","r");
    while(!feof($read)){
        echo fgets($read) . "<br>";
    }
    fclose($read);


        ?>
    </fieldset>
</body>
</html>