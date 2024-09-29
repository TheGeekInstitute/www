<?php

if($_SERVER['REQUEST_METHOD']=="POSt"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];

        if(!empty($_POST['class'])){
            $class=$_POST['class'];

            if(!empty($_POST['roll'])){
                $roll=$_POST['roll'];

                if(!empty($_POST['sub'])){
                    $sub=$_POST['sub'];

                    $pointer=fopen("data.txt" ,"a");
                    fwrite($pointer,"Name".$name ."\n");
                    fwrite($pointer,"class".$class ."\n");
                    fwrite($pointer,"Roll no".$roll ."\n");
                    fwrite($pointer,"Suject".$sub ."\n\n");
                    fclose($pointer);
                }
                else{
                    echo "Enter your subject";
                }
            }
            else{
                echo "Enter your Roll no. 0";
            }
        }
        else{
            echo "Please enter your class";
        }
    }
    else{
        echo " Plase enter the name";
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form...readwrite</title>
</head>
<body>
    
    <form method="POST">
        Name : <input type="text" name="name"><br><br>
        class : <input type="text" name="class"> <br><br>
        Roll No. : <input type="number"  name='roll' minlength="2" maxlength="10"> <br> <br>
        Subject :<select name="sub">
            <option value="eng">English</option>
            <option value="hin">Hindi</option>
            <option value="mat">Math</option>
            <option value="sci">Science</option>
            <input type="submit">
            <input type="reset">
            <br></br>
           
        </select>
    </form>
</body>
</html>
 <?php

$read_pointer=fopen("data.txt", "r");
while(!feof($read_pointer)){
    echo fgets($read_pointer) . "<br>";
}
fclose($read_pointer);


?>