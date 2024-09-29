<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num">
        <br><br>
        <select name="choice" id="">
            <option value="sr">Sr No</option>
            <option value="odd">ODD</option>
            <option value="even">EVEN</option>
        </select>
        <br><br>
        <input type="submit" value="Show">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['num']) && !empty($_POST['num']) && isset($_POST['choice']) && !empty($_POST['choice'])){
        $num=$_POST['num'];
        $choice=$_POST['choice'];

        if($choice=="sr"){
            for($i=1; $i<=$num ; $i++){
                echo $i . "<br>";
            }
        }
        else if($choice=="odd"){
            for($i=1; $i<=$num ; $i++){
                if($i%2!=0){
                    echo $i . "<br>";

                }
            }
        }
        else if($choice == "even"){
            for($i=1; $i<=$num ; $i++){
                if($i%2==0){
                    echo $i . "<br>";

                }
        }
    }
    else{
        echo "Invalid Choice";
    }
}
else{
    "Please Fill All The Fields";
}
}


?>