<?php
if(isset($_POST['fullname']) &&(isset($_POST['gender'])) &&(isset($_POST['dob']))){
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];

    $fptr=fopen("logs.txt","a");
        fwrite($fptr,"Full Name : " . $fullname . "\n");
        fwrite($fptr,"Gender : " . $gender . "\n");
        fwrite($fptr,"DOB : " . $dob . "\n\n");
    fclose($fptr);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form data</title>
</head>
<body>

    <form action="" method="POST">
        fullname: <input type="text" name="fullname">
        <br></br>

        Gender: 
        Male <input type="radio"  name="gender" value="male">
        Female <input type="radio" name="gender" value="female">
        <br></br>

        DOB: <input type="date" name="dob">
        <br></br>

        <input type="submit" value="save">
    </form>

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
