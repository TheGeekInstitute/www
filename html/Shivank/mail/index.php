<?php
$connection=mysqli_connect("localhost","root","toor","shukla");
$first=$last=$gender=$class=$section=$roll_no="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!empty($_POST['first'])){
        $first=$_POST['first'];
        if(!empty($_POST['last'])){
            $last=$_POST['last'];
            if(!empty($_POST['gender'])){

                 $gender=$_POST['gender'];
                
                if(!empty($_POST['class']) && $_POST['class']!="Choose"){
                     $class=$_POST['class'];

                     if(!empty($_POST['section']) && $_POST['section']!="Choose"){
                        $section=$_POST['section'];
                        
                        if(isset($_POST['add'])){
                            // echo $first.$last.$gender.$class;
                            if(isset($_FILES['image']) && $_FILES['image']['size']>0){
                                $tmp=$_FILES['image']['tmp_name'];
                                $ext=strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));
                                $name=bin2hex(random_bytes(10));
                                $dest=strtolower("images/".$name.".".$ext);
                                
                                //     if($ext=="png" || $ext =="jpg" || ext=="jepg" || $ext=="webp"){
                                    //         $sql="INSERT INTO `students`(`image`) VALUES ('$dest')";
                                    //         if(mysqli_query($connection,$sql) && move_uploaded_file($tmp,$dest)){
                                        //             echo "File has Been Uploaded";
                                        
                                        //         }
                                        
                                        //     }
                                        //     else{
                                            //         echo "invalid Image";
                                            //     }
                                            // }
                                        }
                                        
                                        
                                        $sql="INSERT INTO `students`(`firstname`, `lastname`, `gender`, `class`, `section` , `photo`) VALUES ('$first','$last','$gender','$class', '$section', '$dest')";
                                        $query=mysqli_query($connection,$sql);
                                        if($query ){
                                            echo ' 
                                            <script>
                                            alert ("Student Added !");
                                            </script>';
                                        }
                                        
                                    }
                                    
                                    //update
                                    if(isset($_POST['update']) && !empty($_POST['roll_no']) && ctype_digit($_POST['roll_no'])){
                                        $sql="UPDATE `students` SET `firstname`='$first',`lastname`='$last',`gender`='$gender',`class`='$class' , `section` = '$section' WHERE `roll_no`='$_POST[roll_no]'";
                                        $query=mysqli_query($connection,$sql);
                                        if($query){
                                            echo ' 
                                            <script>
                                            alert ("Student Updated !");
                                            window.location.href="index.php";
                                            </script>';
                                        }
                                    }
                                    
                     }
                     else{
                        echo ' 
                        <script>
                        alert ("Section Should not be Empty")
                        </script>';
                          }

                                }

                else{
                echo ' 
                <script>
                alert ("Class Should not be Empty")
                </script>';
                  }
          
                }
                else{
                    echo ' 
                <script>
                alert ("Gender Should not be Empty");
                </script>';
                }
        }
        else{
            echo ' 
            <script>
            alert ("Last Name Should not be Empty")
              </script>';      
        }
    }
    else{
      echo ' 
      <script>
      alert ("First Name Should not be Empty")
        </script>';
    }

}



if(isset($_GET['id']) && !empty($_GET['id']) && ctype_digit($_GET['id'])){
    $sql="SELECT * FROM `students` WHERE `roll_no`='$_GET[id]'";
    $query=mysqli_query($connection,$sql);
    if($query){
        $data=mysqli_fetch_assoc($query);
        $roll_no=$data['roll_no'];
        $first=$data['firstname'];
        $last=$data['lastname'];
        $gender=$data['gender'];
        $class=$data['class'];
        $section=$data['section'];
        $image=$data['image'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
   .data, .data tr , .data th , .data td{
    padding-top: 5px;
    border: 1px solid black;
    padding: 5px;
    border-collapse: collapse;
    text-align: center;
  }

    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="roll_no" value="<?php echo $roll_no;  ?>">
<table>
    <tr>
        <td><label for="">First Name :</label></td>
        <td><input type="text" name="first" id="" value="<?php echo $first; ?>"></td>
    </tr>
    <tr>
        <td><label for="">Last Name :</label></td>
        <td><input type="text" name="last" id="" value="<?php echo $last; ?>"></td>
    </tr>
    <tr>
        <td><label for="">Gender :</label></td>
        <td><label for=""><input type="radio" name="gender" value="Male" <?php if($gender=="Male"){ echo "checked"; } ?>>Male</label>
        <label for=""><input type="radio" name="gender" value="Female" <?php if($gender=="Female"){ echo "checked"; } ?>  >Female</label></td>
    </tr>
    <tr>
        <td><label>Class :</label></td>
        <td>
            <select name="class">
        <option value="Choose">Choose</option>
        <option value="I" <?php if($class=="I"){ echo "selected"; } ?>>I</option>
        <option value="II" <?php if($class=="II"){ echo "selected"; } ?>>II</option>
        <option value="III" <?php if($class=="III"){ echo "selected"; } ?>>III</option>
        <option value="IV" <?php if($class=="IV"){ echo "selected"; } ?>>IV</option>
        <option value="V" <?php if($class=="V"){ echo "selected"; } ?>>V</option>
        <option value="VI" <?php if($class=="VI"){ echo "selected"; } ?>>VI</option>
        <option value="VII" <?php if($class=="VII"){ echo "selected"; } ?>>VII</option>
        <option value="VIII" <?php if($class=="VIII"){ echo "selected"; } ?>>VIII</option>
        <option value="IX" <?php if($class=="IX"){ echo "selected"; } ?>>IX</option>
        <option value="X" <?php if($class=="X"){ echo "selected"; } ?>>X</option>
         <option value="XI" <?php if($class=="XI"){ echo "selected"; } ?>>XI</option>
         <option value="XII" <?php if($class=="XII"){ echo "selected"; } ?>>XII</option></td>
    </tr>
    <tr>
        <td><label>Section :</label></td>
        <td>
            <select name="section">
            <option value="Choose">Choose</option>
                <option value="A" <?php if($section=="A"){ echo "selected"; } ?>>A</option>
                <option value="B" <?php if($section=="B"){ echo "selected"; } ?>>B</option>
                <option value="C" <?php if($section=="C"){ echo "selected"; } ?>>C</option>
        </td>
    </tr>
<tr>
    <td><label for="">Image: </label> </td>
    <td> <input type="file" accept="image/*" name="image"></td>
</tr>


<tr>
    <td><input type="submit" name="add" value="Add">
        <input type="submit" name="update" value="Upadte">
        <input type="reset">
    </td>
</tr>
</table>
</form>
<table class="data">
        <tr>
            <th>Roll No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Section</th>
            <th>Modify</th>
            <th>Photo</th>
    </th>

</tr>

<?php

$sql="SELECT * FROM `students`";
$query=mysqli_query($connection,$sql);
if($query){
    $i=1;
    while($data=mysqli_fetch_assoc($query)){
        echo<<<print
        <tr>
       
            <td>$i</td>
            <td>$data[firstname]</td>
            <td>$data[lastname]</td>
            <td>$data[gender]</td>
            <td>$data[class]</td>
            <td><a href="./?id=$data[roll_no]">Edit</a> / <a href="./?del=$data[roll_no]">Delete</a></td>
        </tr>
        print;
        $i++;
    }
}




if(isset($_GET['del'])){
    $roll_no=$_GET['del'];
    $sql="DELETE FROM `students` WHERE `roll_no`='$roll_no'";
    $query=mysqli_query($connection,$sql);
    if($query){
        echo '
        <script>
            alert("Student Deleted ! ");
            window.location.href="index.php";
        </script>
        ';  }
    }
?>
</table>


    
</body>
</html>