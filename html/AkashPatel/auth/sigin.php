<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>
            <?php   
                    if($_SERVER['REQUEST_METHOD']){
                        if(isset($_POST['name']) && !empty($_POST['name'])){
                            $name = $_POST['name'];
                            
                            if(isset($_POST['email']) && $_POST['email']){
                                $email = $_POST['email'];

                                if(isset($_POST['pass']) && !empty($_POST['pass'])){
                                    $pass = $_POST['pass'];
                                        echo $name . " : " . $email . " : " . $pass;
                                }else{
                                    echo "enter your pass";
                                }
                            }else{
                                echo "enter your email";
                            }
                            
                        }else{
                            echo "enter your name";
                        }
                    }
            ?>
        </p>
        <br>
        <label>Name :</label>
        <input type="text" name="name">
        <br><br>
        <label>email :</label>
        <input type="email" name="email">
        <br><br>
        <label>password :</label>
        <input type="password" name="pass">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>