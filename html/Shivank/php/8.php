<?php
echo "<pre>";
// var_dump($GLOBALS);
// var_dump($_REQUEST);
// var_dump($_SERVER);

// var_dump($_POST);

// echo $_POST['first'] . "  ".$_POST['last'];
// if(isset($_POST['first']) && isset($_POST['last'])){
//     if(!empty($_POST['first'])){
//         $first=$_POST['first'];

//         if(!empty($_POST['last'])){
//             $last=$_POST['last'];
//             echo "Hi , Mr. " . $first . " ".$last; 
//         }
//         else{
//             echo "Please Enter Last name";
//         }
//     }
//     else{
//         echo "Please enter first name";
//     }

// }


?>

<!-- <form method="POST" action="8.php">
    Frist name<input type="text" name="first">
   last names <input type="text" name="last">

    <br>
<input type="submit">
</form>
 -->

<?php

if(isset($_GET['First'])  && isset($_GET["Last"])){
    if(!empty($_GET["First"])){
        $First=$_GET["First"];

        if(!empty($_GET["Last"])){
          $Last=$_GET["Last"];
          echo "Hi , Mr." . $First ."". $Last;

        }
        else{
            "Please Enter Last Name.";
        }
    }
     
    else{
        "Please Enter First Name.";
    }

}



?>
<form  method="GET" action="8.php">
First Name <input type="text" name="First"><br>
Last  Name <input type="text" name="Last">

<br>
<input type="Submit">

</form>


