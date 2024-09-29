<?php
if(isset($_GET['clear'])){
    $clear= fopen("data.txt","a");
    fclose($clear);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: auto;
           border: 1px solid black; 
           height: 150px;
           width: 250px;
           background-image: linear-gradient(45deg,red, rgb(229, 255, 0), green);
           padding: 20px;
           border-radius: 10px;
           box-shadow: 3px 3px 20px gray;
           

        }

        input{
            border: none;
            outline: none;
            background-color: transparent;
            border-bottom: 2px solid black;
            border-radius: 10px;
            padding-left: 10px;

        }

        input[type="submit"]{
            background-color: aqua;
            font-size: 20px;
            padding: 5px 20px;
        }
        a button{
            border-radius: 10px;
            border: none;
            outline: none;
            background-color: transparent;
            border-bottom: 2px solid black;
            background-color: aqua;
            font-size: 20px;
            padding: 5px 20px;
            margin: auto;
            
        }

    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="">Full Name :</label>
        <input type="text" name="name"> <br> <br>
        <label for="">Gender : </label>
        <label for="">Male</label>
        <input type="radio" name="gender" id="" value="Male">
        <label for="">Female</label>
        <input type="radio" name="gender" id="" value="Female"> <br> <br>
        <label for="">Date of Birth :</label>
        <input type="date" name="DOB" id=""> <br> <br>
        <input type="submit" value="Save"> 
        
    </form>
    <a href="?clear=1"><button>Clear</button></a>

<br><br><br>

<fieldset>
    <legend>Logs</legend>

    <?php
    $read = fopen("data.txt","r");
    while(!feof($read)){
        echo fgets($read) . "<br>";
    }
    fclose($read);

?>

</fieldset>

</body>
</html>


<?php
if(isset($_POST["name"])
&& isset($_POST["gender"])
&& isset($_POST["DOB"])){

    $name=$_POST['name'];
    $gender = $_POST['gender'];
    $dob=$_POST['DOB'];

    $fptr= fopen("data.txt","a");
    fwrite($fptr,"Name : " . $name . "\n");
    fwrite($fptr,"Gender : " . $gender . "\n");
    fwrite($fptr,"DOB : " . $dob . "\n\n");
    fclose($fptr);
}


?>
