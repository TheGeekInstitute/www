<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOrm...</title>
</head>
<body><form method="GET" enctype="multipart/form-data">
    <h1>Resitration Form...</h1>
    <fieldset>
        <legend>Regstration Form</legend>
        <form>
            First Name : <input type="text" required title="Please Enter First Name" placeholder="Enter your name" minlength="3" maxlength="15" size="30"  name="first">
            <br><br>
            last Name : <input type="text" required title="Please Enter Last Name" placeholder="Enter your name" name="last">
<br><br>
Gender : Male <input type="radio" name="gender"> Female <input type="radio" checked name="gender">
<br><br>
<select>
    <option value="">Choose</option>
    <option value="" selected>male</option>
    <option value="">female</option>
    <option value="">Other</option>
</select>
            <br><br>
            <input type="submit" value="Regstration">
            <button type="submit">Signup</button>
        </form>
    </fieldset>
</body>
</html>
</form>

<?php

if(isset($_GET['first']) && isset($_GET['last']) && isset($_GET['gender'])){
    $name=$_GET['first'];
    $last=$_GET['last'];
    $gender=$_GET['gender'];
    echo "<h1> , Hello ," . $name ."<br>". $last."<br>".$gender."!</h1>";
}

?>
