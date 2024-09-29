<?php
// echo "<pre>";

// var_dump($GLOBALS);

// var_dump($_SERVER);

// var_dump($_GET);

// if(isset($_GET['name'])){
//     echo "Hi, " . $_GET['name'];
// }


// var_dump($_POST);

// if(isset($_POST['name'])){
//     echo "Hello, " . $_POST['name'];
// }


if(isset($_REQUEST['name'])){
    echo $_REQUEST['name'];
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
    <form action="post.php" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Show">
    </form>
</body>
</html>