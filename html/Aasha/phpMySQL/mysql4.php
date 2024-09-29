<table border="1px">
    <tr>
        <th>roll no</th>
        <th>name</th>
        <th>gender</th>
        <th>class</th>

    </tr>

<?php
$conn=mysqli_connect("localhost","root","toor","Aasha");
$sql="SELECT * from `Aariz`";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){

    echo '
    <tr>
    <td>'.$data['roll_no'].'</td>
    <td>'.$data['name'].'</td>
    <td>'.$data['gender'].'</td>
    <td>'.$data['class'].'</td>
    </tr>
    ';
}
?>
</table>