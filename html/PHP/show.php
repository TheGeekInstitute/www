<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="loadData()">
    <script>

function checkRow(){
            var xhr =new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status==200){
                  document.write(this.responseText);
                }
            }

            xhr.open("GET","rows.php",true);
            xhr.send();
        }

        function loadData(){
            var xhr =new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(this.readyState == 4 && this.status==200){
                    console.log(this.responseText);
                }
            }

            xhr.open("GET","db.php",true);
            xhr.send();

            
        }

    </script>


<?php
session_start();
if(!isset($_SESSION['row'])){
    $rows="<script>checkRow()</script>";
    $_SESSION['rows']=$rows;
}

$check="<script>checkRow()</script>";

if($_SESSION['rows']!=$check){
    echo "dasdas";
}
else{
    echo "false";
}

echo $_SESSION['rows'];

?>
</body>
</html>



