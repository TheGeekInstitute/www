<?php
if(isset($_POST['color'])){
    $color=$_POST['color'];
    // echo $color;
}
else{
    $color="white";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOR</title>
</head>
<body bgcolor="<?php echo $color; ?>">

    <form action="./test.php" method="POSt">
        <input type="color" name="color">
        <input type="submit">
    </form>
    
</body>
</html>