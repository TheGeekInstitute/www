<?php
if(isset($_POST['fullname']) && isset($_POST['gender']) && isset($_POST['dob'])){
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $write = fopen("data.txt","a");

    fwrite($write,"Full Name : " . $fullname . "\n");
    fwrite($write,"Gender : " . $gender . "\n");
    fwrite($write,"DOB : " . $dob . "\n\n");



    fclose($write);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><form</title>
</head>
<body>
    <form action="" method="POST">
    Full Name : <input type="text" name="fullname">
    <br><br>
    Gender : Male <input type="radio" name="gender" value="Male">
    Female <input type="radio" name="gender" value="Female">
    <br><br>
    DOB : <input type="date" name="dob">
    <br><br>
    <input type="submit" value="Save">
    </form>

    <br><br><br>

    <fieldset>
        <legend>Logs</legend>
        <?php
        $read = fopen("data.txt","r");
        while(!feof($read)){
            echo fgets($read) . "<br>";
        }
      

        fclose($read);

         ?>
    </fieldset>
</body>
</html>

