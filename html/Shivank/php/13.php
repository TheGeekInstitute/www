<?php
$name=$email=$website=$gender=$comment="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['website']) && isset($_POST['gender']) && isset($_POST['comment'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $gender=$_POST['gender'];
    $comment=$_POST['comment'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

    .new{
        font-family:cursive;
        color : black;
        border: 4px solid;
        margin : 2px;
        padding : 2px;
    }
</style>
<form  class="new" method="POST" action="13.php">
Name : <input type="text" name="name"><br><br>
Email : <input type="text" name="email"><br><br>
Website : <input type="text" name="website"><br><br>
Gender : <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="Others">Others 
    <br><br>
Comment : <textarea name="comment"  cols="40" rows="5"></textarea><br><br>
<input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h1>Your Input:</h1>";
echo   $name . "<br>";
echo   $email . "<br>";
echo   $website . "<br>";
echo   $gender . "<br>";
echo   $comment. "<br>";
?>
</body>
</html>