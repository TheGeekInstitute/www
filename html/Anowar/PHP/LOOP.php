<!-- <?php
#while Loop


// $i=5;

// while($i<=11){
//     echo $i . "<br>";
//     $i++;
// }

// $i=100;
// while($i<=1000){
//     echo $i ."<br>";
//     $i++;
// }
// ?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-color: red;
            height:50px;
            width:50px;
            display:inline-block;
            margin:5px;
            line-height:50px;
            text-align:center;
            font-size:x-large;
        }

    </style>
</head>
<body>
    <?php
      $i=1;
      while($i<=100){
        echo '
        <div class="box">'.$i.'</div>
        ';



        $i++;
      }

      

    ?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .box{
            background-color: red;
            height:50px;
            width:50px;
            display:inline-block;
            margin:5px;
            line-height:50px;
            text-align:center;
            font-size:x-large;
        }
  </style>
</head>
<body>
<?php
$i = 1;
while($i<=10){
  echo'
  <div class="box">'.$i.'</div>
  ';



  $i++;
      
    

  
  }


   ?>

  

 
</body>
</html>