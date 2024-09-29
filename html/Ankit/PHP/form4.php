<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        form{
            border:2px solid black;
            height:300px;
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

        fieldset{
            background-color:skyblue;
            border:2px solid black;
            border-radius:10px;
        }
        
    </style>
<?php
$msg="";

if($_SERVER['REQUEST_METHOD'] =="POST"){
    
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname=$_POST['firstname'];
  
          

          if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
            $lastname=$_POST['lastname'];

            if(isset($_POST['mobno']) && !empty($_POST['mobno'])){
                $mobno=$_POST['mobno'];
    
                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password=$_POST['password'];
        
                    if(isset($_POST['save'])){
                        $read=fopen("logs.txt","a");
                        fwrite($read,"First Name :" . $firstname . "\n");
                        fwrite($read,"Last Name :" . $lastname . "\n");
                        fwrite($read,"Mobile No :" . $mobno . "\n");
                        fwrite($read,"Password :" . $password . "\n\n");

                        fclose($read);
                        header("location:". $_SERVER['PHP_SELF']);
                    }
                    
                  }
                  else{
                    $msg="Please Enter Password";
                }
                
                
              }
              else{
                $msg="Please Enter Mobile No";
            }

            
            
            
          }
          else{
            $msg="Please Enter Last Name";
        }

    }
    else{
        $msg="Please Enter First Name";
    }
        
    
  

}

if(isset($_POST['clear'])){
    $read=fopen("logs.txt","w");
    fclose($read);
    header("location:". $_SERVER['PHP_SELF']);
}





?>

</head>
<body>
    <form action="" method="POST">
        <h1>Survay form</h1>

      <label>First Name</label>
     <input type="text" name="firstname">
     <label>Last Name</label>
     <input type="text" name="lastname">
     <label>Mobile No</label>
     <input type="text" name="mobno">
     <label>Password</label>
     <input type="password" name="password">
    
     <input type="submit" value="save" name="save">
     <input type="submit" value="clear" name="clear">

    </form>

    <p>
      <?php echo $msg; ?>

    </p>

    <fieldset>
        <legend>Logs</legend>

        
 <?php
    $read=fopen("logs.txt","r");

    while(!feof($read)){

     echo fgets($read) . "<br>";
    
    }
    fclose($read);

 ?>
        
    </fieldset>
</body>
</html>