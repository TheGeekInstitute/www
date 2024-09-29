<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">Name</label>
        <input type="text" name="name">
        <br><br>
        <label for="">Password</label>
        <input type="tex" name="password">
        <br><br>
        <input type="submit">
    </form>
    <?php
            if($_SERVER['REQUEST_METHOD']){
                 if(isset($_POST['name']) &&  !empty($_POST['name'])){
                    $name = $_POST['name'];

                    if(isset($_POST['password']) && !empty($_POST['password'])){
                        $password = $_POST['password'];
                    }
                 }else{
                    echo "plz enter your name";
                 }
            }
    ?>
</body>
</html>