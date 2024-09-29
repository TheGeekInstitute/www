<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style></style>


<body>

    <form action="" method="POST">
        First Name : 
        <input type="text" name="firstname">

        <br><br>
        Last Name : 
        <input type="text" name="lastname">

        <br><br>
        Gender : 
        <select name="gender" id="">
            <option value="">Choose</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>

        <br><br>
        <input type="submit" value="Save">
    </form>

    <a href="?clear=1">Clear Data</a>

    

<br><br>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];

        if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];

            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $gender=$_POST['gender'];

                $fptr=fopen("data.txt",'a');
                fwrite($fptr,"First Name : " . $firstname . "\n");
                fwrite($fptr,"Last Name : " . $lastname . "\n");
                fwrite($fptr,"Gender : " . $gender . "\n\n");

                fclose($fptr);

            }
            else{
                echo "Please Choose Gender";
            }

        }
        else{
            echo "Please Enter last Name";
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