<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Table</title>

</head>
<body>
<form action="" method="POST">
    <h1>Form...</h1>
        Name : <input type="text" name="name"><br><br>
        Class : <select name="class" >
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select><br><br>
        Gender : Male<input type="radio" name="gender" value="male">
            Female   <input type="radio" name="gender" value="female"><br><br>
       <input type="submit"> 
    </form>
    <br><br>
   

        <?php
        $conn=new mysqli("localhost","root","toor","Ritu");
        if(isset($_POST['name'])&&(isset($_POST['gender']))&&(isset($_POST['class']))){
            $name=$_POST['name'];
            $gender=$_POST['gender'];
            $class=$_POST['class'];
            
        
            $sql = "INSERT INTO `students` (`name`,`gender`,`class`) VALUES (?,?,?)";
            $insert_stmt = $conn->prepare($sql);
            $insert_stmt->bind_param("sss",$name,$gender,$class);
            $insert_stmt->execute();
            $insert_stmt->store_result();
            if($insert_stmt->affected_rows==1){
                echo "Data Inserted";
            }

            $insert_stmt->close();




         
        }
        
        ?>
        

        <?php
        $sql="SELECT `roll_no`,`name`,`gender`,`class` FROM `students`";
        $show_stmt = $conn->prepare($sql);
        $show_stmt->bind_result($db_roll_no,$db_name,$db_gender,$db_class);
        $show_stmt->execute();
        $show_stmt->store_result();

        if($show_stmt->num_rows>0){
            echo<<<header
            <table border="1px">
            <h2>Student Table</h2>
            <tr>
                <th>Roll_no</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Class</th>
                
            </tr>
            header;
        }

        while($show_stmt->fetch()){
            echo'
            <tr>
                <td>'.$db_roll_no.'</td>
                <td>'.$db_name.'</td>
                <td>'.$db_gender.'</td>
                <td>'.$db_class.'</td>  
            </tr>';
        }
        
        
    ?>    
    </table>
    
</body>
</html>