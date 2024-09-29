<?php
$name=$gender=$DOB=$mobile=$email=$password="";
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
      .new:hover{
        border:8px solid;
        padding-left:10px;
        padding-bottom:10px;
        font: 15px cursive;
        color: blue;
        background-color: skyblue;
      }
      .htr{
           color:red;
           text-decoration-line: overline underline ;
      }
      input:hover{
        background-color:pink;
      }

    </style>      
<form  class=new method="POST" action="form.php">
<h1  class=htr align="center">Registration Form </h1>
 Name : <input type="text" name="name" size=32 class=fdf><br><br>
 Gender : <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="Others">Others
    <br><br>
 DOB : <input type="date" name="DOB"><br><br>
 Mobile : <input type="number" name="mobile" maxlength=10><br><br>  
 Email : <input type="email" name="email" size=40><br><br>
 Password : <input type="password" name="password"><br><br>
  <input type="submit">
  <input type="reset">
</form>
<?php
echo "<h1>Detail : </h1>";
if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['DOB'])  && 
isset($_POST['mobile']) && isset($_POST['password'])){
echo $Name=$_POST["name"] . "<br>";
echo $Gender=$_POST["gender"] . "<br>";
echo $DOB=$_POST["DOB"] . "<br>";
echo $Mobile=$_POST["mobile"] . "<br>";
echo $Email=$_POST["email"] . "<br>";
echo $Password=$_POST["password"] . "<br>";
}
?>
</body>
</html>