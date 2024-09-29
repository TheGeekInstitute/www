<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <form action="" method="POST">
        First Name :
        <input type="text" name="fname">
        <br><br>
        Last Name :
        <input type="text" name="lname">
        <br><br>
        <input type="submit" value="Save">
        <a href="?clear=1">
            <button type="button">Clear</button>
        </a> 
    </form>
    <br><br>

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['fname']) && !empty($_POST['fname'])){
                $fname=$_POST['fname'];

                if(isset($_POST['lname']) && !empty($_POST['lname'])){
                    $lname=$_POST['lname'];
                    
                    $fptr=fopen("logs.txt","a");
                    fwrite($fptr,"First Name :" . $fname . "\n");
                    fwrite($fptr,"Last Name :" . $lname . "\n\n");
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

        //Clear The Logs

        if(isset($_GET['clear'])){
            $erase=fopen("logs.txt","w");
            fclose($erase);
            header("location:". $_SERVER['PHP_SELF']);
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