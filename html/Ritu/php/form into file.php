<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        First Name : <input type="text" name="first">
        <br><br>
        Last Name : <input type="text" name="last">
        <br><br>
        Gender :  Female<input type="radio" name="gender" value="female">
        Male <input type="radio" name='gender' value="male">
        <br><br>
        DOB : <input type="date" name=date>

        <br><br>
        <input type="submit">
        <input type="reset">
    </form>
    
</body>
</html>



<?php
if(isset($_POST['first'])&&($_POST['last'])&&($_POST['gender'])&&($_POST['date'])){
    $first=$_POST['first'];
    $last=$_POST['last'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];


    $fptr=fopen("data.txt","a");
    fwrite($fptr,"First Name : ".$first."\n");
    fwrite($fptr,"Last Name : ".$last."\n");
    fwrite($fptr,"Gender  : ".$gender."\n");
    fwrite($fptr,"DOB : ".$date."\n\n");
}


echo "<br>";
$read=fopen("data.txt","r");

while(!feof($read)){
  echo fgets($read)."<br>";
}
fclose($read);











?>