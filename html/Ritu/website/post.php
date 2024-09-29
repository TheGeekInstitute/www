<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <style>
    *{
        padding : 0;
        margin: 0;
    }
    
    .nav{
        background-color: black;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 7vh;
    }
    
    .nav ul li{
        display: inline;
    
    }
    
    .nav ul li a{
        text-decoration: none;
        color: white;
        margin: 3px;
        font-weight: 600;
    }
    
    
    
    
    
    .footer{
        background-color: black;
        color: white;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 30px;
        position: fixed;
        text-align: center;
    }
    </style>
</head>
<body>
    
<div class="nav">
    <h1 id="logo">Logo</h1>
    <h1 class="heading">Geek Academy</h1>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="./post.php">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>

<div class="footer">
    <p>Copyright &copy; All Rights Reserved</p>
</div>

</body>
</html>