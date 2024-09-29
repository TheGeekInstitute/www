<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        nav{
            position: sticky;
            top: 0;
            z-index: 30;
            background-color: white;

        }
        .box{
            /* border: 1px solid black; */
            height: 5rem;
            display: flex;
            justify-content: space-between;
            text-align: center;
            box-shadow: 2px 2px 2px black;
           
        }
        .box .logo img{
            /* border: 1px solid red; */
            /* line-height: 5rem; */
            margin-top: 1rem;
            margin-left: 1.5rem;
            
        }
        .box .btn ul{
            display: flex;
            justify-content: space-around;
            text-decoration: none;
            list-style: none;
            /* margin: 0 1rem; */
            
        }
        .box .btn ul li a{
            text-decoration: none;
            margin: 0 1rem;
            text-align: center;
            line-height: 5rem;
            font-size: 1.3rem;
            color: black;
            font-weight: 750;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .box .btn ul li a:hover{
            border-bottom: 2px solid black;
            transition: all 0.2s;
            color: rgb(26, 21, 21);
        }
        .box .tea{
            display: block;
            /* height: 5rem; */
            /* border: 1px solid red; */
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
        .box .tea a{
            display: block;
            border:  1px solid #F87099;
            line-height: 3rem;
            font-size: 1.3rem;
            /* display: block; */
            height: 3rem;
            width:7rem;
            flex-direction: row;
            text-decoration: none;
            color: white;
            background-color: #F87099;
            /* padding: 1rem; */
            border-radius: 0.3rem;
            margin: 0 1rem;

        }
        .box .tea a:hover{
            color: black;
            background-color: white;
            transition: all 0.3s;
        }
        .box .stu{
            margin-right: 1.5rem;
            display: block;
            /* border: 1px solid  #F87099; */
            width: 7rem;
            height: 3rem;
            margin-top:1rem ;
            font-size: 1.5rem;
            cursor: pointer;
            margin-right: 2rem;
            border-radius: 0.3rem;
            
        }
        
        .box .stu a{
            border: 1.5px solid #F87099;
            display: block;
            line-height: 3rem;
            text-decoration: none;
            background-color: #F87099;
            color: white;
            font-family: 750;
            border-radius: 0.3rem;
            


        }
        .box .stu a:hover{
            color: black;
            background-color: white;
            transition: all 0.3s;
        }
        .main{
            /* border: 1px solid red; */
            height: 40rem;
            width: 100%;
            /* overflow:none; */
        }
        .main .cover img{
            height: 40rem;
            width: 100vw;
        }
        .main .text h2{
            /* border: 1px solid black; */
            position: absolute;
            bottom: 7em;
            left: 50rem;
            font-size: 3rem;
            color:rgb(227, 53, 233);
            font-weight: 750;
            background-color: rgba(0, 0, 0, 0.446);
            padding: 1rem;
            border-radius: 0.5rem;

        }
        .main .text p{
            /* border:  1px solid red; */
            position: absolute;
            height: 7rem;
            background-color: rgba(0, 0, 0, 0.241);
            width: 25rem;
            bottom: 13rem;
            font-size: 1.3rem;
            color:  white;
            right: 0;
            right: 16rem;
            border-radius: 0.3rem;
            text-align: center;
            


        }
        

    </style>
</head>
<body>
   <nav>
    <div class="box">
        <div class="logo">
            <img src="https://www.geekinstitute.org/img/logo/logo_1.png" alt="LOGO">
        </div>
        <div class="btn">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#">Contect Us</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </div>
        <div class="tea">
            <a href="signup.php">Teacher's</a>
            <a href="#">Student's</a>
        </div>
        <div class="stu">
            <a href="login.php">Log In</a>
        </div>
    </div>
   </nav> 
   <div class="main">
    <div class="cover">
    <img src="https://www.bibalex.org/SCIplanet/Attachments/Article/MediumImage/Nx62yeXUoH_20170523120455397.jpg" alt="cover">
</div>
<div class="text">
    <h2>WELCOME TO GEEK</h2>
    <P>Gather to learn. Imagine greatness. Learn to love to learn. Learning to do their best, work with others, and be safe fair and kind.</P>
</div>
</div>
</body>
</html>