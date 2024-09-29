<?php
session_start();
$connection=mysqli_connect("localhost","root","toor","shivank");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Geek Institute</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link btn btn-success text-white fw-bolder" aria-current="page" href="./add.php">Add Student</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
                
                <label style="padding: 6px; color: white;">Hi, Admin | </label>
                <label style="padding: 6px; color: white;">6 Students Added By You</label>
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
              <button type="button" class="btn btn-danger">Logout</button>
            </form>
          </div>
        </div>
      </nav>

      <table class="table">
      <tr>
        <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Section</th>
        
      
    </tr>
<?php

$sql="SELECT * FROM `student`";
$query=mysqli_query($connection,$sql);
if($query){
    $i=1;
    while($data=mysqli_fetch_assoc($query)){
        echo<<<print
        <tr>
            <td>$i</td>
            <td>$data[first_name]</td>
            <td>$data[last_name]</td>
            <td>$data[gender]</td>
            <td>$data[class]</td>
            <td>$data[section]</td>
           
        </tr>
        print;
        $i++;
    }
   }



?>
      </table>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
