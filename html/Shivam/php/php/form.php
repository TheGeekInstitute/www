<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['gender'])){
            $gender=$_POST['gender'];
            if(!empty($_POST['dob'])){
                $dob=$_POST['dob'];
                $pointer=fopen("data.txt","a");
                fwrite($pointer,"Name : ".$name."\n");
                fwrite($pointer,"Gender : ".$gender."\n");
                fwrite($pointer,"DOB : ".$dob."\n\n");
                fclose($pointer);
            }
            else{
                echo "Please Enter Valid Date of Birth";
            }
        }
        else{
            echo "Please Choose a gender";
        }
    }
    else{
        echo "Name Should Not Be Empty";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form....</title>
</head>
<body>
    <form method="POST">
        Name : <input type="text" name="name"> <br> <br>
        Gender :  Male<input type="radio" name="gender" value="male">
                 Female <input type="radio" name="gender" value="female"> <br> <br>
        DOB : <input type="date" class="date" name="dob">
        <input type="submit">
        
    </form>
<br><br><br>    
</body>
</html>

<?php
$read_pointer=fopen("data.txt","r");
while(!feof($read_pointer)){
    echo fgets($read_pointer)."<br>";
}
fclose($read_pointer);

?>