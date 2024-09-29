<?php

session_start();
if(!isset($_SESSION['name'])){
    $_SESSION['name']="manikumar";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="btn">get</button>



    <script>
        let btn = document.getElementById("btn");
        btn.addEventListener('click',run);

        function run(){
            let xhr= new XMLHttpRequest();
           
            // console.log(xhr.readyState);
    
            xhr.open("GET",'1.php?abcd=aa',true);
           
            // console.log(xhr.readyState);
    
            xhr.onreadystatechange=function(){
           
                // console.log(xhr.readyState);
                if(this.readyState==4 && this.status==200){
                    console.log(this.responseText);
                }
            }
    
            xhr.send();

        }

    </script>
</body>
</html>