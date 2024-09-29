<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">First Name :</label>
        <input type="text" name="fname">

        <br><br>
        <label for="">Last Name :</label>
        <input type="text" name="lname">

        <br><br>

        <input type="submit" value="Save">
        <a href="data.php?clear=1">
            <input type="Button" value="Clear">
        </a>
        
    </form>
    
        
    <br><br><br>
        
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['fname']) && !empty($_POST['fname'])){
                $fname=$_POST['fname'];
            
                if(isset($_POST['lname']) && !empty($_POST['lname'])){
                    
                    $lname=$_POST['lname'];

                    $write_fptr=fopen("data.txt","a");
                    fwrite($write_fptr,"First Name : ". $fname . "\n");
                    fwrite($write_fptr,"Last Name : ". $lname . "\n\n");
                    fclose($write_fptr);

                }
                else{
                    echo "Please Enter Last Name";
                }
            
            }
            else{
                echo "Please Enter First Name";
            }
        }
        
        
        ?>

<br><br><br>

    <fieldset>
        <legend>All Saved Data</legend>

        <?php
        $read_fptr=fopen("data.txt","r");
        while(!feof($read_fptr)){
            echo fgets($read_fptr) . "<br>";
        }


        fclose($read_fptr);



        if(isset($_GET['clear']) && $_GET['clear']==1){
            $clear_fptr=fopen("data.txt","w");
            fclose($clear_fptr);
            header("Location:data.php");
        }

?>

    </fieldset>







</body>
</html>