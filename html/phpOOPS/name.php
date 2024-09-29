<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Fullname</label>
        <input type="text" name="fullname">
        <br><br>
        <label for="">Age</label>
        <input type="number" name="age">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['fullname']) && !empty($_POST['age'])){
        $fullname=$_POST['fullname'];
        $age=$_POST['age'];
        $form_data= ["name"=>$fullname,"age"=>$age];

        $old_data= json_decode(file_get_contents("data.txt"),true);
        $new_data = $old_data + $form_data;

       $json_data = json_encode($new_data);

       var_dump($json_data);
       die();

        if(file_put_contents("data.txt",$json_data)){
            echo "data has Been Saved";
        }
       



    }
    else{
        echo "Please Enter Data";
    }
}

?>

<table>
<br><br><br>
<tr>
    <th>Sr No</th>
    <th>Name</th>
    <th>Age</th>
</tr>

<?php
$data= json_decode(file_get_contents("data.txt"),true);
echo "<pre>";
var_dump($data);

$j=1;
for($i=0 ; $i < count($data); $i++){
    $j++;
    echo '
    <tr>
          <td>'.$j.'</td>
          <td>'.$data->name.'</td>
          <td>'.$data->age.'</td>  
    </tr>
    ';
}



?>
</table>