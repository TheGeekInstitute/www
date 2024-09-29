<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])){
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];

            $open=fopen('data.txt',"a");
            fwrite($open,"firstname:".$firstname ."\n");
            fwrite($open,"lastname:".$lastname."\n\n");
            fclose($open);

        }
        else{
            echo "please enter valid name";
        }
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
    <form action="" method="post">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="submit">
    </form>

    <fieldset>
        <legend>Logs</legend>
        <?php

$read = fopen('data.txt',"r");
while(!feof($read)){
    echo fgets($read) . "<br>";
}

fclose($read);
?>
    </fieldset>
</body>
</html>