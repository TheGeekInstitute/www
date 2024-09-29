<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <body>

    <form action="" method="POST">
        <label for="">Enter 1st Number</label>
        <input type="number" name="num1">

        <br><br>

        <label for="">Enter 2nd Number</label>
        <input type="number" name="num2">

        <br><br>

        <label for="">Enter 3rd Number</label>
        <input type="number" name="num3">

        <br><br>

        <input type="submit" value="Submit">
    </form>

    <br>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['num1']) && !empty($_POST['num1'])){
        $num1=$_POST['num1'];
        if(isset($_POST['num2']) && !empty($_POST['num2'])){
            $num1=$_POST['num2'];
            if(isset($_POST['num3']) && !empty($_POST['num3'])){
                $num1=$_POST['num3'];




                if($num1 > $num2 && $num1 > $num3){
                    echo $num1 . " is Grater than " . $num2 . " and " . $num3;
                }
                else if($num2>$num1 && $num2>$num3){
                    echo $num2 . " is Grater than " . $num1 . " and " . $num3;
                }
                else if($num3 > $num1 && $num3 > $num2){
                    echo $num3 . " is Grater than " . $num1 . " and " . $num2;
                }
                else{
                    echo "all Equeal number";
                }

                
                
            }
            else{
                echo "Plese Enter Num1";
            }
        }
        else{
            echo "Plese Enter Num2";
        }
    }
    else{
        echo "Plese Enter Num3";
    }
        
    
}

?>

</body>
</html>