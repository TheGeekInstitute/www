<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: auto;
           border: 1px solid black; 
           height: 150px;
           width: 250px;
           /* background-color: yellow; */
           background-image: linear-gradient(45deg,red, rgb(229, 255, 0), green);
           padding: 20px;
           border-radius: 10px;
           box-shadow: 3px 3px 20px gray;

        }

        input{
            border: none;
            outline: none;
            background-color: transparent;
            border-bottom: 2px solid black;
            border-radius: 10px;
            padding-left: 10px;

        }

        input[type="submit"],input[type="reset"]{
            background-color: aqua;
            font-size: 20px;
            padding: 5px 20px;
        }

        
        
    </style>
</head>
<body>

    <form action="" method="POST">
        <label for="">Full Name :</label>
        <input type="text" name="name"> <br> <br>
        <label for="">Gender : </label>
        <label for="">Male</label>
        <input type="radio" name="gender" id="" value="Male">
        <label for="">Female</label>
        <input type="radio" name="gender" id="" value="Female"> <br> <br>
        <label for="">Date of Birth :</label>
        <input type="date" name="DOB" id=""> <br> <br>
        <input type="submit" value="Save"> 
        <input type="reset" value="Reset">
    </form>

</body>
</html>

<?php




?>


