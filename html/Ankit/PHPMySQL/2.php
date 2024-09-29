<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $host="localhost";
  $user="root";
  $pass="toor";
  $db="ankit";

  $conn=mysqli_connect($host,$user,$pass,$db);

  $sql="SELECT `emp_no`,`name`,`gender`,`age`,`salary`,`city` FROM `salary-sheet`";



  ?>
</body>
</html>