<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['dob'])){
      
        $file=fopen("newform.txt","a");
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];

        fwrite($file,"First Name : " . $firstname . "\n");
        fwrite($file,"Last Name : " . $lastname . "\n\n");
        fwrite($file,"Gender : " . $gender . "\n");
        fwrite($file,"DOB : " . $dob . "\n\n");

        fclose($file);
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

    <h1>LoGin Form</h1>
    <form method="POST">
    <label for="">First Name :</label>
    <input type="text" name="firstname" minlength="4" maxlength="12" required>
    <br><br>
    <label for="">Last Name :</label>
    <input type="text" name="lastname" minlength="4" maxlength="8" required>
    <br><br>
    <label for="">Gender : </label>
    <label for="">Male</label><input type="radio" name="gender" value  ="Male">
    <label for="">Female</label><input type="radio" name="gender" value="Female">
    <br><br>
    <label for="">DOB : </label>
    <input type="date" name="dob" required>
    <br><br>
    <input type="Submit" value="Submit">
    </form>
    <br><br><br>
    <fieldset>
    <legend> LoG </legend>
<?php
    $read=fopen("newform.txt","r");
    while(!feof($read)){
    
    echo fgets($read) . "<br>";
  }

    fclose($read);
?>
</fieldset>
</body>
</html>



