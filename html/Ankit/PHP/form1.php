<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        First Name :
        <input type="text" name="firstname">
        <br><br>
        Last Name :
        <input type="text" name="lastname">
        <br><br>
        <input type="submit" value="Save">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])){
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];

            $write=fopen("data.txt","a");
            
            fwrite($write,"First Name : " .$firstname . "\n");
            fwrite($write,"Last Name : " .$lastname . "\n\n");
            

            fclose($write);
        }
        else{
            echo 'Please Fill Both of Fields';
        }
    }
    ?>



    <br><br>

    <fieldset>
        <legend>Logs</legend>

        <?php
        $read=fopen("data.txt","r");

        while(!feof($read)){
          echo  fgets($read) . "<br>";
        }
        fclose($read);

        ?>


    </fieldset>
</body>
</html>