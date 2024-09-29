
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="" method="POST">
        Username :
        <input type="text" name="username" >
        <br><br>
        Email :
        <input type="text" name="email">

        <br><br>
        Password :
        <input type="password" name="password" >

        <br><br>
        <input type="submit" value="Signup">

    </form>

    <br><br>

    <p><?php 
        if($error==true){
            echo $msg;
        }
    
    ?></p>


    <br><br>

    <a href="./login">Login Here</a>
</body>
</html>