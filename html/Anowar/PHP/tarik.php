<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <label for="">First Name :</label>
        <input type="text" name="firstname">

        <br><br>

        <label for="">Last Name : </label>
        <input type="text" name="lastname">

        <br><br>


        <!-- <label for="">phoneno : </label>
        <input type="text" name="phoneno ">
        <br><br> -->


        <label for="">email : </label>
        <input type="text" name="email ">

        <br><br>
<!-- 
        <label for="">Adher no : </label>
        <input type="text" name="Adher no ">
        <br><br>



        <label for="">Pan no : </label>
        <input type="text" name="Pan no ">
        <br><br> -->

       

        

        <input type="submit" value="Submit">
        <a href="?clear=1">resset</a>
    </form>

    <br>
    <!-- if($_SERVER['REQUEST_METHOD']=="POST"){ -->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["firstname"]) && !empty($_POST["firstname"])){
        $firstname = $_POST["firstname"];
        if(isset($_POST["lastname"]) && !empty($_POST["lastname"])){
            $lastname =$_POST["lastname"];
            if(isset($_POST["email"]) && !empty($_POST["email"])){
                $email =$_POST["email"];

            
             $fptr=fopen("data.txt","a");
             fwrite($fptr,"firstname :" . $firstname);
             fwrite($fptr,"\nlastname :" . $lastname . "\n\n");
             fwrite($fptr,"\nemail :" . $email . "\n\n");
             fclose($fptr);





            }
            else{
                echo "plase enter  a firstname";
            }
           




             





        }
        else{
            echo "plase enter a lastname";
        }
    
    }
    else{
        echo "plase enter  a email";
    }


}



if(isset($_GET['resset'])){
    $clear=fopen("data_txt","r");
    fclose($resset);
    header('location:' . $_SERVER["php_self"]);
}



// $name="anower";
// $fptr=fopen("data.txt","w");
// fwrite($fptr,$name);
// echo "$firstname";
// echo "$lastname";



// $name="tarik";
// $fptr=fopen("data.txt","a");
// fwrite($fptr,$name);
// fclose($fptr);
?>



<br><br><br>


<fieldset>
    <legend>logo</legend>
    <?php

$read=fopen("data.txt","r");
while(!feof($read)){
    echo fgets($read) . "<br>";
}    

fclose($read);

    ?>
</fieldset>











<!-- https://www.netflix.com/in/title/81318071 -->

<!-- https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABY0ltlVdxAOy9fj8tlVtJBYxfVlUxgzwFalzu3uHblSeT097OtmuPHiDG5yT9NbpBaZkJadxloNKm9ALBBsIAA0fPgIfcayymLdd.jpg?r=b47 -->