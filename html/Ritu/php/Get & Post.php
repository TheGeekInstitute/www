
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        First Name : <input type="text" required title="please enter first name" placeholder ="enter first name" name="first">
        <br><br>
        Middle Name : <input type="text" required title="please enter middle name" placeholder ="enter middle name"name="middle">
        <br><br>
        Last Name : <input type="text" required title="please enter last name" placeholder ="enter last name" name="last">
        <br><br>
        Gender :  Female<input type="radio" name="gender" value="female">
        
        Male <input type="radio" name="gender" value="male">
        <br><br>
        DOB : <input type="date" name="date">
        <br><br>
        <input type="submit">
        <input type="reset">

        

    </form>
    
</body>
</html>

<?php
if(isset($_POST['first']) && isset($_POST['middle']) &&  isset($_POST['middle'])){
    $first=$_POST['first'];
    $middle=$_POST['middle'];
    $last=$_POST['last'];

    echo "First Name : ". $first."<br>"."Middle Name : ".$middle."<br>"."Last Name: ".$last;
}

?>

