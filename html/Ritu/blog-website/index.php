<?php
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }
        .one{
            height: 90vh;
            background-image: url('https://www.kartavyablogs.in/wp-content/uploads/2023/08/banner.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            color:rgb(34, 55, 126);
           
        }
        .one img{
           height: 15vh; 
           display: block;
           margin:auto;
           padding-top: 20px;
        }
        .one h1{
            text-align: center;
            margin-top: 30px;
            font-size: 3.5rem;
            font-weight: 900;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

      
        .three{
            background-color:rgb(34, 55, 126) ;
            height: 30vh;  
            margin: auto; 
            padding-left: 20vw; 
            padding-top: 20vh;
            padding-right: 20vw;     
            
        }
        .two{
            display: flex;
        
        }
        .right1{
            display: block;
            position: relative;
            content: '';
            height: 20vh;
            width: 60vw;
            z-index: 0;
            top: -290px;
            left: -20px;
            transform: translate(-10px,10px);
            background-color:rgb(18, 118, 201) ;
        }
    
        .right{
            background-color: white;
            height: 20vh;
            width: 60vw;
            text-align: center;
            padding-top:20px ;
            padding-right:20px;
            position: relative;
            z-index: 10;
            top: -500px;
        }
        .right:nth-child(1)::after{
            visibility: hidden;
        }

        .right::after{
            content: '';
            display:block;
            background-color: black;
            height: 5rem;
            width: 2px;
            position: relative;
            top: -5rem;
        }
         
            
        
        .right img{
            height: 2rem;
            margin-top: 20px;
        }
        .right h1{
            font-size: 1.2rem;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-top: 30px;
            color: rgb(18, 118, 201);
           

        }
        .three a{
            color: white;
            font-size: 1.2rem;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 10px 40px;
            border-right: 1px solid white;
            
            
            
        }
        .three a.sub{
            color: red;
        }

        .three a:hover{
            color: red;
        }
        .four{
            background-color:  rgb(18, 118, 201);
            height: 100vh;
            color: white;
        }
        .four h1{
            font-size: 3rem;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 900;
            text-align: center;
            padding-top: 3.5rem;
            
        }
        input[type=search]{
           position: relative;
           left: 70vw;
           bottom: 7vh;
           height: 40px;
           width: 20rem;
           border-radius: 5px;
           border: none;
           padding-left: 20px;
           
            }
            .content{
                display: flex;
                justify-content: space-evenly;
            }
            .main{
                height: 70vh;
                width: 25vw;
                background-color: white;
                color: black;
                margin: 10px 10px;
                margin-top: 8vh;
                overflow: scroll;
            
            }
            .main img{
                height:25vh;
                width: 25vw;
                margin-top: -24px;
                object-fit: cover;
               
         

            }
            .main h2{
                position: relative;
                bottom: 4rem;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;  
                font-size: 1.3rem;
                color: white;
                height: 1rem;
            }
            .main h3{
                font-size: 1.5rem;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                color:rgb(26, 46, 110);
                padding: 10px;
            }
            .main p{
                font-size: large;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                padding:  5.5px 10px;
                margin-bottom:1rem;
            }
            .main a{
                position: relative;
                left: 17vw;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                background-color:  rgb(18, 118, 201);            
                color: white;
                padding: 8px;
            }
            .five{
                display: flex;
                justify-content: space-evenly;
                height: 63vh;
                background-color: white;
            }
            .five .main1{
                height: 46vh;
                width: 25vw;
                background-color: rgb(31, 45, 92);
                color: white;
                margin-top: 6rem;
                
            }
            .five .main1 img{
                height: 25vh;
                width: 25vw;
                margin-bottom: 2.5rem;
            }
            .main1 h1{
                position: relative;
                bottom: 3.7rem;
                height: 0.01vh;
                color: rgb(31, 45, 92);
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 2.2rem;
            }
            .main1 p{
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                border-right: 2px solid white;
                display: inline;
                padding: 0 20px;
                text-align: center;
                margin-left: .5rem;
            }


            .main1 h2{
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                margin: 20px;
                margin-top: 40px;
            }
            .six{
                height: 50vh;
                background-color:rgb(225, 225, 245);
                display: flex;
                justify-content: space-evenly;
            }
            .six .two{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            
            
            .six .two h1{
                color: rgb(34, 55, 126);
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size:1.8rem;
                margin-left: 6rem;
                width: 15vw;
            }
            .two p{
                font-size: 1.3rem;
                /* margin-left: -5rem; */
                margin-top: 1rem;
            }
            .menu{
                margin-left: 6rem;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                justify-content: center;
            }
            .menu a {
                color: black;
                font-size: 1.5rem;
                border-left: 1px solid black;
                height: 50vh;
                line-height: 50vh;
                padding:  0 20px;
                
            }
            .last{
                margin-left: 5rem;
                margin-top: 5rem;
            }
            .last h1{
                color: rgb(34, 55, 126);
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                margin-bottom: 1.5rem;
                margin-left: 1.5rem;
                
            }
            .form{
                display:flex;
                flex-wrap: wrap;
            }
            input[type=text]{
                
                width: 20vw;
                height:4vh;
                padding-left: 10px;
                margin: .5rem 2rem;
            }
            input[type=email]{
                width: 20vw;
                height:4vh;
                padding-left: 10px;
                margin: .5rem 2rem;
            }
            input[type=code]{
                width: 20vw;
                height:4vh;
                padding-left: 10px;
                margin: .5rem 2rem;
            }
            .last h5{
                margin: .7rem 2rem;
                font-size: 1.2rem;
            }
            #btn{
                margin-left: 2.3vw;
            }
          
           label{
            margin: .7rem 1rem;
            font-size: 1.2rem;
            }
            input[type=submit]{
                margin-left: 15rem;
                padding: 9px 25px;
                border-radius: none;
                border: none;
                color: white;
                background-color:  rgb(18, 118, 201);
                font-size: 1rem;
            }
            .seven{
                display: flex;
                justify-content: space-evenly;
                background-color: rgb(20, 61, 116);
                height: 20vh;
                color: white;
                align-items: center;
            }
            .seven .image{
                height: 12vh;
                border-right: 1px solid white ;
                padding-right: 6rem;
            }
            .mid{
                border-right: 1px solid white;
                padding: 1rem 4rem;
                margin-left: -16rem;
            }
            .mid h3{
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-weight: 500;
                font-size: 1.4rem;
                margin-bottom: 1rem;
            }
            .mid i{
                font-size: 1.3rem;
            }
            .mid a{
                color: white;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 1.1rem;
                font-weight: 400;
                margin-left: 10px;
            }
            .right3{
                margin-left: -7rem;
                margin-top: 4rem;
            }
            .right3 h3{
                font-size: 1.4rem;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-weight: 400;
                margin-bottom: 30px;
                margin-top: -4rem;
               
            }
            span{
                border: 1px solid white;
                border-radius: 5px;
                padding: 15px 10px;
            }
            span:hover{
                background-color: white;
                color: rgb(20, 61, 116);
                font-weight: 900;
            }
            .right3 img{
                margin-top: 2.3rem;
                height: 1rem;
            }
            .right3 a{
                color:white;
                margin-right: 2rem;
            }



    </style>
</head>
<body>
    <div class="one">
       <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/logo.png" alt="" class="img1">
       <h1>Indian Railway's Leapfrogging In....</h1>
    </div>
    <div class="three">
        <a href="#">HOME</a>
        <a href="#">ABOUT</a>
        <a href="#">THEMES</a>
        <a href="#">QUIZ</a>
        <a href="#">CONTACT</a>
        <a href="#" class="sub">SUBSCRIBE</a>
        
        <div class="right1">

        </div>
        <div class="two">
            <div class="right">
                <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/mic.png" alt="">
                <h1>INFORM</h1>
            </div>
            <div class="right">
                <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/2.png" alt="">
                <h1>INVOLVE</h1>
            </div>
            <div class="right">
                <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/3.png" alt="">
                <h1>GOVERNANCE</h1>
            </div>
            <div class="right">
                <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/4.png" alt="">
                <h1>YOUTH PERSPECTIVE</h1>
            </div>
        </div>
     </div>
    <div class="four">
        <h1>Themes</h1>
        <input type="search" placeholder="Search....">
        <div class="content">
            <div class="main">
          
            
            <h2>Reforming Railways</h2>
            <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/Railways.jpg" alt="">
            <?php
            $sql="SELECT * FROM `blog` ORDER BY RAND() LIMIT 0,3";
            $query=mysqli_query($conn,$sql);
            while($data=mysqli_fetch_assoc($query)){
                echo '
                <h3>'.substr($data['title'],0,25).'...</h3>
                <p>'.substr($data['content'],0,100).'...</p>
                <a href="blog.php?id='.$data['sr_no'].'">Read More...</a>
                ';
            }
            
            ?>
            </div>
            <div class="main">
                <h2>New India's Global Leadership</h2>
                <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/HADR.jpg" alt="">
                <?php
                  $sql="SELECT * FROM `blog` ORDER BY RAND() LIMIT 3,3";
                  $query=mysqli_query($conn,$sql);
                  while($data=mysqli_fetch_assoc($query)){
                      echo '
                <h3>'.substr($data['title'],0,25).'...</h3>
                <p>'.substr($data['content'],0,100).'...</p>
                <a href="blog.php?id='.$data['sr_no'].'">Read More...</a>
                ';
            }
            
            ?>
            </div>
            <div class="main">
                <h2>Raksha Shakti: Protecting India's line of defence & Internal security</h2>
                <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/France.jpg" alt="">
                <?php
                  $sql="SELECT * FROM `blog` ORDER BY RAND() LIMIT 9,3";
                  $query=mysqli_query($conn,$sql);
            while($data=mysqli_fetch_assoc($query)){
                echo '
                <h3>'.substr($data['title'],0,25).'...</h3>
                <p>'.substr($data['content'],0,100).'...</p>
                <a href="blog.php?id='.$data['sr_no'].'">Read More...</a>
                ';
            }
            
            ?>
            </div>  
        </div>

    </div>
    <div class="five">
        <div class="main1">
        <h1>Latest Blog</h1>
        <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/HADR.jpg" alt="">
        <p>By Naveen Singh </p>
        <p>Aug 16,2023</p>
        <h2>India's evacuation and HADR perations since 2014</h2>

        </div>
        <div class="main1">
            <h1>Most Popular</h1>
            <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/06/New-Indias-GLobal-Leadership.jpg" alt="">
            <p>By Naveen Singh </p>
            <p>Aug 16,2023</p>
            <h2>India's evacuation and HADR perations since 2014</h2>
    
            </div>
            <div class="main1">
                <h1>Suggested</h1>
                <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/06/New-Indias-GLobal-Leadership.jpg" alt="">
                <p>By Naveen Singh </p>
                <p>Aug 16,2023</p>
                <h2>India's evacuation and HADR perations since 2014</h2>
        
                </div>
    </div>


    <div class="six">
        <div class="two">
        <h1>24 / 7 Updates Via Social Media</h1>
        <p>Follow us today.</p>
        </div>
       
        <div class="menu">
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i>in</i>
            </a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="last">
            <h1>Join Our Newsletter</h1>
            <div class="form">
                <input type="text" placeholder="First Name*">
                <input type="text" placeholder="Last Name*">
                <input type="email" placeholder="Email Address*">
                <input type="text" placeholder="Mobile Number*">
                <input type="text" placeholder="District*">
                <input type="code" placeholder="Referral Code*">
            </div>

            <h5>Can we email you?</h5>
            <input type="checkbox" id="btn">
            <label for="btn">Yes,I'd like to receive the new blog email*</label>
            <input type="submit" value="Submit">
            </div>

    </div>
    <div class="seven">
        <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/08/logo-white.png" alt="" class="image">
        <div class="mid">
            <h3>Initative by Niravadya Foundation</h3>
            <i class="fa-regular fa-envelope"></i>
            <a href="#">editor@kartavyablogs.in</a>

        </div>
        <div class="right3">
           <h3>Visitor Counter</h3>
           <div class="num">
           <span>5</span>
           <span>0</span>
           <span>3</span>
           <span>7</span>
           <span>1</span>
        </div>
           <img src="https://www.kartavyablogs.in/wp-content/plugins/sitepress-multilingual-cms/res/flags/hi.svg" alt="">
           <a href="#">हिन्दी</a>
           <img src="https://www.kartavyablogs.in/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.svg" alt="">
           <a href="#">English</a>

        </div>
    </div>
    
</body>
</html>