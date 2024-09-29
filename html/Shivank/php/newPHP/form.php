<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST">
        <label for="">Full Name :</label>
        <input type="text" name="name">
        <br><br>
        <label for="">Age :</label>
        <input type="number" name="age">
        <br><br>
        <input type="submit">
    </form>
</body>
</html> -->

<?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//     if(!empty($_POST['name']) && !empty($_POST['age'])){
//         echo "Hi, " . $_POST['name'] . " your are". $_POST['age']. " years old";
//     }
//     else{
//         echo "Please Enter Name and Age";
//     }
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
         <label for="">First Name : </label>
         <input type="text" name="firstname">
         <br></br>
         <label for="">Last Name : </label>
         <input type="text" name="lastname">
         <br><br>
         <label for="">Age : </label>
         <input type="number" name="age">
         <br><br>   
         <input type="submit">
         <br><br>
            <legend>LoG</legend>
    </form>
</body>
</html>

<?php

 if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['age'])){
        echo "Hi,  😎  " . $_POST['firstname'] . " " . $_POST['lastname'] .     " you are " . $_POST['age'] . "yrs old.";
    }
    else{
        echo "Please Enter Detail";
    }
}

?>