<?php

if(isset($_POST['name'])){
    echo "Hello, " . $_POST['name'];
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

      <form action="post-2.php" method="Get">
         <input type="text" name="name">
         <input type="submit" value="Show">
      </form>
    
</body>


</html>