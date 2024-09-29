<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        First Name :
        <input type="text" name="fname" id="">
        <br><br>
        Last Name : 
        <input type="text" name="lname">
        <br><br>
        <input type="submit" value="Show">
        <a href="?clear=1">Clear</a>
    </form>




</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['fname']) && !empty($_POST['fname'])){
        $fname=$_POST['fname'];
        
        if(isset($_POST['lname']) && !empty($_POST['lname'])){
            $lname=$_POST['lname'];
    
            $fptr=fopen("data.txt","a");
            fwrite($fptr,"First name :" . $fname . "\n");
            fwrite($fptr,"Last name :" . $lname . "\n\n");

            fclose($fptr);
            

        }
        else{
            echo "Please Enter Last Name";
        }

    }
    else{
        echo "Please Enter First Name";
    }
}



echo "<br><br>";


$read=fopen("data.txt","r");
    while(!feof($read)){
        echo fgets($read) . "<br>";
    }

fclose($read);



if(isset($_GET['clear'])){
$fptr=fopen("data.txt","w");
fclose($fptr);
header("location:".$_SERVER['PHP_SELF']);

}


?>