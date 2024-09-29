<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        First Name : 
        <input type="text" name="firstname">
        <br><br>
        Last Name :
        <input type="text" name="lastname">
        <br><br>
        <input type="submit">

        <a href="?clear=1">Clear</a>
    </form>

    <br><br>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
            $firstname=$_POST['firstname'];

            if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
                $lastname=$_POST['lastname'];

                $fptr=fopen("data.txt","a");
                fwrite($fptr,"Firsname :" . $firstname);
                fwrite($fptr,"\nLastname :" . $firstname . "\n\n");

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
        $clear=fopen("data.txt","w");
        fclose($clear);
        header("location:".$_SERVER['PHP_SELF']);
    }

    ?>



    <br><br><br>

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