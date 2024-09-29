<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
         First Name :
         <input type="text" name="fname" id="">
         <br><br>
         last name :
         <input type="text" name="lname">
         <br><br>
         <input type="Submit" value="Show">
         <a href="?Clear=1">Clear</a>

    </form>
    
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fname']) && !empty($_POST['fname'])){
        $fname=$_POST['fname'];
        if(isset($_POST['lname']) && !empty($_POST['lname'])){
            $lname=$_POST['lname'];

            $fptr=open("data.txt","a");
            fwrite($fptr,"first name" . $fname . "\n");
            fwrite($fptr,"last name" . $lname . "\n\n");

            fclose($fptr);

        }
        else{
            echo "Please Enter Last Name ";
        }
    }
    else{
        echo "Pleas Enter first Name";
    }
}


"<br><br>";
$read=fopen("data.txt","r");
    while(!feof($read)){
        echo fgets($read) . "<br>";
    }

fclose($read);

if(isset($_GET['clear'])){
    $fptr=fopen("data.txt","w");
    $fclose($fptr);
    header("location:".$_SERVER['php_SELF']);
}

?>