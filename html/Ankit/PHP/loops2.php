<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        form{
            border:2px solid black;
            height:220px;
            width:200px;
            padding: 120px;
            padding-bottom:200px;
            padding-top:50px;
            margin:100px auto;
            border-radius:10px;
            background-color:cyan;

        }
        input{
            height:30px;
            width:250px;
            padding-left:5px;
            font-family:cursive;
            border-radius:10px;
            margin-top:10px;
           
        }
        label{
            font-family:cursive;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Survay form</h1>

      <label>First Name</label>
     <input type="text" placeholder="firstname">
     <label>Last Name</label>
     <input type="text" placeholder="lastname">
     <label>Mobile No</label>
     <input type="text" placeholder="mobno">
     <label>Password</label>
     <input type="password" placeholder="password">
     <input type="submit">

    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
    if(isset($_POST['firstname']) 
    && isset($_POST['lastname'])
    && isset($_POST['mobno'])
    && isset($_POST['password']) 
    && !empty($_POST['firstname'])
    && !empty($_POST['lastname'])
    && !empty($_POST['mobno'])
    && !empty($_POST['password'])){

        

        $firstname=$_POST(['firstname']);
        $lastname=$_POST(['lastname']);
        $mobno=$_POST(['mobno']);
        $password=$_POST(['password']);
        
        echo "dasd";

        $write=fopen("form-read.txt","a");

        fwrite($write, "First Name :". $firstname ."\n");
        fwrite($write, "Last Name :". $lastname ."\n");
        fwrite($write, "Mobile No.:". $mobno ."\n");
        fwrite($write, "Password  :". $password ."\n\n");

        fclose($write);


    }
    else{
        each("Please Fill all information");
    }
}
   





?>

<fieldset>
    <legend>Logs</legend>

    <?php
$read=fopen("form-read.txt","r");

while(!feof($read)){
   echo fgets($read) ."<br>";
}

fclose($read)

?>
</fieldset>