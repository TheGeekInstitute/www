<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <style>
        table,tr,td.th{
            border: 2px solid black;
            margin: 3px;
            padding: 3px;
        }
        td{
            border: 2px solid black;

        }
        th{
            background-color: blue;
        }
    </style>
</head>
<body>
    <form action="" method='POST' >
        Name : <input type="text" name="name"><br><br>
        Salary : <input type="number" name="salary"><br><br>
        Gender :Male:<input type="radio" name="gender" value="male">
                Female :<input type="radio" name="gender" value="female"><br><br>
        D.O.E : <input type="date" name="doe"><br><br>
        <input type="submit" value='Uplode'><br><br>
    </form>
    
    <?php
$conn=mysqli_connect("localhost","root","toor","shivam");    
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($_POST['salary'])){
            $salary=$_POST['salary'];
            if(!empty($_POST['gender'])){
                $gender=$_POST['gender'];
                if(!empty($_POST['doe'])){
                    
                    $doe=$_POST['doe'];
                    $sql="INSERT INTO `employee` ( `name`, `salary`, `gender`, `doe`) VALUES ('$name', '$salary', '$gender', '$doe')";
                    $query=mysqli_query($conn,$sql);
                    if($query){
                        echo "Employee Added";
                    }
                    else{
                        echo "enter ";
                    }

                }
                else{
                 echo "Enter Your Date of entery";
                 
                }
            }
            else{
                echo "Enter Your Gender";
            }

        }
        else{
            echo "Enter Your Salry";
            
        }
        
    }
    else{
        echo "Enter Your Name";
    }
}
?>
<table>
    <tr>
        <th>E_ID</th>
        <th>Name</th>
        <th>Salry</th>
        <th>Gender</th>
        <th>D.O.E</th>
    </tr>
    <?php
$sql="SELECT * FROM `employee`";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
    echo'
    <tr>
    <td>'.$data['id'].'</td>
    <td>'.$data['name'].'</td>
    <td>'.$data['salary'].'</td>
    <td>'.$data['gender'].'</td>
    <td>'.$data['doe'].'</td>
    </tr>
    ';
}
    ?>
</table>
</body>
</html>