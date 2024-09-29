<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        Full Name : 
        <input type="text" name="fullname">
        <br><br>
        Gender :
        Male
        <input type="radio" value="Male" name="gender">
        Female 
        <input type="radio" value="Female" name="gender">
        <br><br>
        DOB :
        <input type="date" name="dob">
        <br><br>
        <input type="SUBMIT" value="show">
    </form>
</body>
</html>
<?php
if(isset($_POST['fullname'])
 && isset($_POST['gender'])
  && isset($_POST['dob'])){
    
    $fullname=$_POST['fullname'];
    $gender = $_POST['gender'];
    $dob=$_POST['dob'];

    echo '
    Full Name '.$fullname.' <br>
    Gender : '.$gender.' <br>
    DOB : '.$dob.' <br>
    ';

    echo<<<abcd
    Full Name : $fullname <br>
    Gender : $gender <br>
    DOB : $dob <br>
    abcd;

}


?>