
<?php
$msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['file']) && $_FILES['file']['size']>0){
        $file=$_FILES['file'];
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $dest="uploads/" . bin2hex(random_bytes(10)) . "." . $ext;    
        if(in_array($ext,$valid_ext)){
       
            if($size<=2){

                if(move_uploaded_file($tmp,$dest)){
                    
                    $fptr=fopen("txt.txt","a");
                    fwrite($fptr,$dest."\n");
                    fclose($fptr);

                    
                    $msg= 'Heading has Been Uploaded';

                }
                else{
                    $msg= "Can not Upload Heading at This Time Server Busy";
                }
            }   
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task list</title>
    <style>
 *{
    margin: 0;
    padding:0;
    text-decoration:none;
    list-style:none;
 }
 .container{
    background-image: linear-gradient(45deg,purple,aqua);
    border-radius:20px;
    border:2px solid black;
    height:450px;
    width:450px;
    margin: 150px 350px;
 }
 #txt{margin:50px 110px;
    height:20px;
    padding: 10px;
    border: 2px solid black;
 }
 #txt2{
    border:2px solid black;
    /* padding:70px; */
    margin-left:120px;
 }
    </style>
</head>
<body>
    <div class="container">
        <div class="task">
           <textarea name="" id="txt" cols="30" rows="10" placeholder="Enter heading"></textarea>
            <br><br><br><br><br>
            <textarea name="" id="txt2" cols="30" rows="10" placeholder="Enter Contant"></textarea>
        </div>
    </div>
</body>
</html>