<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .box{
            border: 5px solid black;
            height: 16rem;
            width: 18rem;
           margin: auto;
           margin-top: 1rem;
           padding: 2px;
        }
        #output{
            border: 5px solid black;
            height: 22rem;
            width: 18rem;
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
    <form action="" method="POST"> 
     First Name:
     <input type="text" name="firstname">
     <br><br>
     Last Name:
     <input type="text" name="lastname">
     <br><br>
     Email-Id:
     <input type="text" name="emailid">
     <br><br>
     Contect No:
     <input type="text" name="number">
     <br><br>
     Password:
     <input type="password" name="password">
     <br><br>
     <input type="submit" value="save" name="save" >
     <input type="submit" value="clear" name="clear">
     <br><br><br>

     
    </form>
    </div>
    <br><br><br>

    <?php
if($_SERVER['REQUEST_METHOD'] =="POST"){
if(isset($_POST['save'])){
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
       $firstname=$_POST['firstname'];
       
       if(isset($_POST['lastname']) && !empty($_POST['lastname'])){
        $lastname=$_POST['lastname'];
     
        if(isset($_POST['emailid']) && !empty($_POST['emailid'])){
            $emailid=$_POST['emailid'];


            if(isset($_POST['number']) && !empty($_POST['number'])){
                $number=$_POST['number'];


                if(isset($_POST['password']) && !empty($_POST['password'])){
                    $password=$_POST['password'];
                 $fptr=fopen("logs.txt","a");
                 fwrite($fptr,'firstname:' . $firstname. "\n");
                 fwrite($fptr,'lastname:' . $lastname. "\n"); fwrite($fptr,'emailid:' . $emailid. "\n"); 
                 fwrite($fptr,'number:' . $number. "\n"); fwrite($fptr,'Password:' . $password. "\n\n");
                 fclose($fptr);
                 header("location:".$_SERVER['PHP_SELF']);

               

                }  
                else{
                    echo "please Enter last name";
                }
                
            }
            else{
                echo "please enter first name";
            }
}

}
}

}


else if(isset($_POST['clear'])){
    $fptr=fopen("logs.txt","w");
    fclose($fptr);
    header(("location:".$_SERVER['PHP_SELF']));
}
else{
    echo "Invalid Request";
}

}
    ?>



    <br><br>

    <fieldset id="output">
       <legend></legend>
       <?php
   $fptr=fopen("logs.txt","r");
   while(!feof($fptr)){
    echo fgets($fptr) . "<br>";
   } 
   fclose($fptr);

       ?>
    </fieldset>
</body>
</html>