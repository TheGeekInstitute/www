<?php
$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];

        if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];

            if(isset($_POST['save'])){
                $fptr=fopen("logs.txt","a");
                fwrite($fptr,"First Name :" . $firstname . "\n");
                fwrite($fptr,"Last Name :" . $lastname . "\n\n");
                fclose($fptr);
                header("location:". $_SERVER['PHP_SELF']);
            }

        }
        else{
            $msg="Please Enter Last Name";
        }
    }
    else{
        $msg="Please Enter First Name";
    }
}

if(isset($_POST['clear'])){
    $fptr=fopen("logs.txt","w");
    fclose($fptr);
    header("location:". $_SERVER['PHP_SELF']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        First name :
        <input type="text" name="firstname">
        <br><br>
        Last name :
        <input type="text" name="lastname">
        <br><br>
        <input type="submit" value="Save" name="save">
        <input type="submit" value="Clear" name="clear">
    </form>

    <p>
        <?php echo $msg; ?>
    </p>

    <fieldset>
        <legend>Logs</legend>
        <?php
        $fptr=fopen("logs.txt","r");
        while(!feof($fptr)){
            echo fgets($fptr) . "<br>";
        }
        fclose($fptr);

        ?>
    </fieldset>


</body>
</html>