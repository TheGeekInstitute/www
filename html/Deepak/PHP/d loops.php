<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .container{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-wrap:wrap;
        }
       .box {
            height:50px;
            width:70px;
            text-align:center;
            font-size:40px;
            line-height:50px;
            background-color:red;
            margin:5px;
       }
    </style>
</head>
<body>
    <?php
    $i=1;
    // while($i<=2){
        // echo 'abcd <br>';
        $i++; // $i= $i+1;

     //  }
    //  while($i<=100){
        // echo $i . "<br>";
        // $i++; //
     //}



    ?>


<div class="container">
    <!-- <div class="box">1</div> -->
    <?php

    // while($i<=10){
        // echo '<div class="box">' .$i. '</div>';
        // $i++;
      // }



    while($i<=100){
        if($i%2!=0){
            echo '<div class="box">' .$i. '</div>';
        //}
        
        $i++;
       // }
    

    // while($i<=100){
        // if($i%2==0){
            // echo '<div class="box">' .$i.'</div>';
        

        }
        $i++;
    }
    ?>


</div>   
</body>
</html>