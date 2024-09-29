<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name">
        <br><br>
        <input type="text" nam="age" placeholder="Age">
        <br><br>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <input type="submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['name']) && !empty($_POST['name'])){
            if(isset($_POST['age']) && !empty($_post['age'])){
                if(isset($_POST['password']) && !empty($_POST['password'])){

                }else{
                    echo"please enter strong password";
                }
            }
            else{
                echo "please enter your age";
            }
        }
        else{
            echo "pleae enter your name";
        }
    };
    ?>
</body>
</html>