<?php
if($_SERVER['REQUEST_MATHOD']=="POST"){
    
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        *{
            margin: 0;
            padding:0 ;
            text-decoration:none ;
            list-style: none;
        }
        .main { 
            border: 2px solid black;
            margin: auto 150px;
            margin-top: 100PX;
        }

        .main h1{
        text-align: center;
        }
    #button{
        display: block;
        padding: 8px;
        /* text-align:center; */
        margin: 5PX auto;
    }
    </style>
</head>
<body>

    <div class="main">
        <form action="">
            <h1>Form</h1>
            <p>First name
                <input type="text">
            </p>
            <br>
            <p>Last name
                <input type="text">
            </p>
            <br>

            <input type="button" value="Submit" id="button"> 
    
        </form>
    </div>
    
</body>
</html>