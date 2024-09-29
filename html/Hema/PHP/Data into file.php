<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <form action="" method="POST">
        Fist Name :
        <input type="text" name="firstname">
        <br><br>
        Last Name :
        <input type="text" name="lastname">
        <br><br>
        <input type="submit" value="Save">

        <a href="?clear=1">
            <button type="button">Clear</button>
        </a>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
            $firstname=$_POST['firstname'];
            if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
                $lastname=$_POST['lastname'];
                
                $fptr=fopen("logs.txt","a");
                fwrite($fptr,"First Name :" . $firstname . "\n");
                fwrite($fptr,"Last Name :" . $lastname . "\n\n");
                fclose($fptr);
                
            }
            else{
                echo "Please Enter Last Name";
            }

        }
        else{
            echo "Please Enter First Name";
        }
    }




    if(isset($_GET['clear'])){
        $erase=fopen("logs.txt","w");
        fclose($erase);

        header("location:" . $_SERVER['PHP_SELF']);
    }





    ?>




    <br><br><br>


    <fieldset>
        <legend>Logs</legend>
        <?php
            $read=fopen("logs.txt","r");
                while(!feof($read)){
                    echo fgets($read) . "<br>";
                }
            fclose($read);


        ?>
    </fieldset>
</body>
</html>