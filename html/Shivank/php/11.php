<?php

if(isset($_POST['first']) && isset($_POST['last'])){
    $file=fopen("cred.txt","a");
    $first =$_POST['first'];
    $last=$_POST['last'];

    fwrite($file,"First Name : " . $first . "\n");
    fwrite($file,"Last Name : " . $last . "\n\n");
    
    fclose($file);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data</title>
    </head>
    <body>
    <form method="POST" action="./11.php">
        First Name : <input type="text" name="first">
        <br><br>
        Last Name : <input type="text" name="last">
        <br><br>
        <input type="submit" value="SAVE">
    </form>
    
    <br><br><br>
    <fieldset>
        <legend>Log</legend>
<?php
$read=fopen("cred.txt","r");
while(!feof($read)){

    echo fgets($read) . "<br>";
}

fclose($read);
?>
</fieldset>

</body>
</html>