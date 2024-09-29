<form method="POST">
    <input type="text" name="table">
    <input type="submit">

</form>

<?php
$conn=mysqli_connect("localhost","root","toor","abcd");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $table=$_POST['table'];

    $sql = "CREATE TABLE $table (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
    if(mysqli_query($conn,$sql)){
     
        echo "Table Created";
    }
    else{
        echo "dasd";
    }
}


?>