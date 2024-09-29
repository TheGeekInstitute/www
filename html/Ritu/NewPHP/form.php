<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method ="POST">
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        <input type="submit">
    </form>
    
</body>
</html>


<?php
echo "<pre>";
// var_dump($GLOBALS);

// var_dump($_SERVER['REQUEST_URI']);

// var_dump($_POST);

// var_dump($_GET);


// var_dump($_REQUEST);


// if(isset($_REQUEST['name']) && isset($_REQUEST['email'])){
//     if(!empty($_REQUEST['name'])){

//         $name = $_REQUEST['name'];

//         if(!empty($_REQUEST['email'])){
//             $emai=$_REQUEST['email'];

//             echo "Hi, ". $name. " Your Email is ". $emai;
//         }
//         else{
//             echo 'Please Enter Email';
//         }
//     }
//     else{
//         echo "Please Enter name";
//     }
// }
 if(isset($_POST['name']) && isset($_POST['email'])){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['email'])){
            $email=$_POST['email'];

            echo "Hello,". $name. "Your Email is". $email;
            
        }
        else{
            echo "Please Enter Your Email";
        }

    }
    else{
        echo "Please Enter Your Name";
    }
 }


?>
