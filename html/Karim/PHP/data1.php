<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
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
        <a href="data1.php?clear=1">
            <button type="button">Clear</button>
        </a>
    </form>

  <br>
  
  <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
            $firstname=$_POST['firstname'];
            if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
                $lastname=$_POST['lastname'];

                $write = fopen("logs.txt","a");
                    fwrite($write,"First Name : " . $firstname . "\n");
                    fwrite($write,"Last Name : " . $lastname . "\n\n");

                fclose($write);

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
    $empty=fopen("logs.txt","w");
    fclose($empty);
    header("location:data1.php");
}



?>



    <br><br><br><br>

    <fieldset>
        <legend>Logs</legend>

        <?php
        $read = fopen("logs.txt","r");
        while(!feof($read)){
           echo fgets($read) . "<br>";
        }
        fclose($read);

        ?>


    </fieldset>
</body>
</html>