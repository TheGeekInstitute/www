<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="" method="post">
        Username & Email : <input type="text" name="username">
        <br><br>
        Password : <input type="password" name="password">
        <br><br>
        <input type="submit" value="login">
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['username'])){
            $username=$_POST['username'];

            if(isset($_POST['password'])){
                $password=$_POST['password'];
                

?>


</body>
</html>