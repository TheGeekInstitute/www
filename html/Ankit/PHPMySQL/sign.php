 <?php
if($_SERVER('REQUEST_METHOD') =="POST")

if(isset($_POST['name']) && !empty($_POST['name'])){
    $name=$_POST('name');


    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST('name');
}
else{
    'Please Choose Gender'
}


else{
    'Please Enter Name'
}

 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           
            
        }
        form{
            margin:200px auto;
            border:2px solid black;
            width:350px;
            height: 200px;
            border-radius:10px;
            padding:40px;
             background-color:darkturquoise;
        }
        label{
            font-family:cursive;
        }
        input{
            width:220px;
            padding:5px;
            border-radius:5px;
        }
        #submit{
            background-color:gray;
            margin:12px 0px 0px 50px;
        }
    </style>
 </head>
 <body>
    <form action="" method="POST">
        <?php
        $msg="";
        ?>
                    <Label>Name :</Label>
        <input type="text" name="name"><br><br>

        <label>Gender  :</label>
        <select name="Gender">
            <option value="choose">choose</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select><br><br>

        <label>Age :</label>
        <input type="number" name="age"><br><br>


        <label>Salary :</label>
        <input type="number" name="number">
        <input type="Submit" id="submit">
    </form>
            
         
       
       
 </body>
 </html>