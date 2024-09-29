<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<body>
  <form method="post">
    first name:<input type="text" name="first"><br><br>
    last name : <input type="text" name="last">
    <br><br>
    


    <input type="submit" name="submit">
    
  </form>
</body>
</html>


<?php
if(isset($_POST['first']) && isset($_POST['last'])){
  $first=$_POST['first'];
  $last=$_POST['last'];

  $fptr=fopen("data.txt","a");
  fwrite($fptr,"First Name : ".$first."\n");
  fwrite($fptr,"Last Name : ".$last."\n\n");
  fclose($fptr);
}

echo "<br><br><br><br>";
$read=fopen("data.txt","r");

while(!feof($read)){
  echo fgets($read). "<br>";
}
fclose($read);


?>