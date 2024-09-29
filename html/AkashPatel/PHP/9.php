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
        <input type="text" name="age" placeholder="Your Age">
        <br><br>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <input type="submit" >
    </form>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];

        if(isset($_POST['age']) && !empty($_POST['age'])){
            $age=$_POST['age'];
    
            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password=$_POST['password'];
        
                
                // echo '

                // You Entered <br>

                //     Name :  '.$name.' <br>
                //     Age : '.$age.' <br>
                //     Password : '.$password.' <br>
                // ';

                echo<<<abcd
                    Name : $name <br>
                    Age : $age <br>
                    Password : $password <br>
                abcd;

                
            }
            else{
                echo "Please Enter Password";
            }
            
        }
        else{
            echo "Please Enter Age";
        }
    }
    else{
        echo "Please Enter Name";
    }
}
?>