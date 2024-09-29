<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
            height: 70vh;
            background-image: url('https://www.kartavyablogs.in/wp-content/uploads/2023/08/Railways.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            color:white;
            background-blend-mode: darken;
            background-color: rgba(0, 0, 0, 0.418);
        }
        
        .one h1{
            padding-top: 20vh;
            font-size: 2.5rem;
            font-weight: 900;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            width: 50vw;
            margin: auto;
            text-align: center;
            margin-bottom: 6rem;
        }
        .menu{
            width: 55vw;
            text-align: center;
            margin: auto;
        }
        .one a{
            color: white;
            font-size: 1.2rem; 
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 500;
            
        }
        .menu .main{
            color: red;
        }
        .two{
            background-color:rgb(34, 55, 126) ;
            height: 15vh;
            margin: auto;
            padding: 50px 18vw ;
            
        }
        .two a{
            color: white;
            font-size: 1.2rem;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 10px 50px;
            border-right: 1px solid white;
            
            
            
        }
        .two a.sub{
            color: red;
        }

        .two a:hover{
            color: red;
        }
        .hero{
            display: flex;
            justify-content: space-around;
            margin: 10vh 15vw;
            width: 70vw;
            /* border: 1px solid red; */
        }
        .article{
            width: 50vw;
        }
        
        .hero .article .three{
            display: flex;
        }
        .three .menu{
            display:flex;
            align-items: end;
            position: absolute;
            left: 48vw;
            
        }
        
        .three .menu h1{
            font-size: 1.4rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-right: 10px;
        }
        .three .menu a i{
            color: black;
            font-size: 1.1rem;
            padding-top: 50px;
            padding-left: 12px;
        }
        .article h3{
            margin-top: 2rem;
            font-size: 1.4rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: rgb(73, 73, 73);
        }
        .article p{
            margin-top: 2rem;
            font-size: 1.2rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: rgb(80, 79, 79);
        }
        .article h1{
            margin-top:2rem ;
            font-size: 1.7rem;
            color: rgb(56, 56, 56);

        }
        
        .three .heading h1{
            background-color: rgb(18, 118, 201);
            font-size: 1.5rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            width: 31vw;
            padding: 15px ;
            color: white;
            border-top-left-radius: 10px;
        }
        .hero .article img{
            /* margin: 2vh 4vw; */
            height: 55vh;
            width: 45vw;
            border-left: 15px solid rgb(18, 118, 201);
            border-bottom-left-radius: 15px;
            
        }
        .side{
            /* border: 1px solid blue; */
            margin-left: 20px;
            width: 25vw;
            margin-top: 2rem;
        }
        .side1{
            display: flex;
            /* border: 1px solid gold; */
            height: 30vh;
            margin-top: 2rem;
            background-color: rgb(143, 143, 150);
            color: white;
        }
        
        .side h3{
            font-size: 1.5rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            display:block;
            background-color: rgb(18, 118, 201);
            color: white;
            text-align: center;
            padding: 10px;
        }
        .side1 img{
            height: 30vh;
            width: 8vw;
        }
        .side1 h1{
            font-size: 1.4rem;
            margin-top: 1rem;
        }
        .side1 p{
            font-size: 1.2rem;
            border-bottom: 1px solid white;
        }
        .side1 .left{

            padding: 1rem 2rem;
        }
        .side1 .left:hover{
            background-color: rgb(41, 41, 105);
            transition: all .3s;
        }
        .left h6{
            margin-top: 3rem;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: .8rem;
            font-weight: 500;

        }
        .left h4{
            font-weight: 500;

        }
        .six{
                height: 50vh;
                background-color:rgb(225, 225, 245);
                display: flex;
                justify-content: space-evenly;
            }
            .six .first{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            
            
            .six .first h1{
                color: rgb(34, 55, 126);
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size:1.8rem;
                margin-left: 6rem;
                width: 15vw;
            }
            .first p{
                font-size: 1.3rem;
                /* margin-left: -5rem; */
                margin-top: 1rem;
            }
            .six .menu{
                margin-left: 6rem;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                justify-content: center;
            }
            .six .menu a {
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
        <h1>Indian Railway's Leapfrogging In Building Engineering Marvels In Amrit Kaal.</h1>
        <div class="menu">

            <a href="#">Home /</a>
            <a href="#">Themes /</a>
            <a href="#">Reforming Railways /</a>
            <a href="#" class="main">Indian Railway's Leapfrogging In Building Engineering Marvels In Amrit Kaal.</a>
        </div>
        </div>
        <div class="two">
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">THEMES</a>
            <a href="#">QUIZ</a>
            <a href="#">CONTACT</a>
            <a href="#" class="sub">SUBSCRIBE</a>
        </div>
        <div class="hero">
            
            <div class="article">
                <div class="three">
                    <div class="heading">
                        <h1>New India's Global Leadership</h1>
                    </div>
                    <div class="menu">
                        <h1>Share:</h1>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i>in</i>
                        </a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <?php
                require 'db.php';
                if(isset($_GET['id']) && !empty($_GET['id']) && ctype_digit($_GET['id'])){
                    $id=$_GET['id'];
                    $sql="SELECT * FROM `blog` WHERE `sr_no`='$id';";
                    $query=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($query)==1){
                        while($data=mysqli_fetch_assoc($query)){
                            echo '
                            <img src="'.$data['poster'].'" alt="">
                            <h3>'.$data['title'].'</h3>
                            <p> 
                                '.$data['content'].'
                            
                            </p>
                            ';
                        }

                    }
                    else{
            
                    die();
                    }
                }
                else{
                   die();
                }
                ?>

            
        </div>
        <div class="side">
            <h3>You May also like</h3>
            <div class="side1">
                <div class="left">

                    <p>Aatmanirbhar Bharat....</p>
                    <h1>New India's Journey From fragile five fastest growing activity in the world.</h1>
                    <h6>
                        By Rangam Trivedi
                    </h6>
                    <h4>Jun 22, 2023</h4>
                </div>
                <div class="image">

                    <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/06/My-project-copy-1-e1687445111941.jpg" alt="">
                </div>
            </div>
            <div class="side1">
                <div class="left">

                    <p>Aatmanirbhar Bharat....</p>
                    <h1>New India's Journey From fragile five fastest growing activity in the world.</h1>
                    <h6>
                        By Rangam Trivedi
                    </h6>
                    <h4>Jun 22, 2023</h4>
                </div>
                <div class="image">

                    <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/06/Futuristic-farming.jpg" alt="">
                </div>
            </div>
            <div class="side1">
                <div class="left">

                    <p>Aatmanirbhar Bharat....</p>
                    <h1>New India's Journey From fragile five fastest growing activity in the world.</h1>
                    <h6>
                        By Rangam Trivedi
                    </h6>
                    <h4>Jun 22, 2023</h4>
                </div>
                <div class="image">

                    <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/03/WhatsApp-Image-2023-03-27-at-17.04.46-1-1-1.jpg" alt="">
                </div>
            </div>
            <div class="side1">
                <div class="left">

                    <p>Aatmanirbhar Bharat....</p>
                    <h1>New India's Journey From fragile five fastest growing activity in the world.</h1>
                    <h6>
                        By Rangam Trivedi
                    </h6>
                    <h4>Jun 22, 2023</h4>
                </div>
                <div class="image">

                    <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/03/7-1.jpg" alt="">
                </div>
            </div>
            <div class="side1">
                <div class="left">

                    <p>Aatmanirbhar Bharat....</p>
                    <h1>New India's Journey From fragile five fastest growing activity in the world.</h1>
                    <h6>
                        By Rangam Trivedi
                    </h6>
                    <h4>Jun 22, 2023</h4>
                </div>
                <div class="image">

                    <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/06/imageedit_1_3848027779.jpg" alt="">
                </div>
            </div>
            <div class="side1">
                <div class="left">

                    <p>Aatmanirbhar Bharat....</p>
                    <h1>New India's Journey From fragile five fastest growing activity in the world.</h1>
                    <h6>
                        By Rangam Trivedi
                    </h6>
                    <h4>Jun 22, 2023</h4>
                </div>
                <div class="image">

                    <img src="https://www.kartavyablogs.in/wp-content/uploads/2023/06/8-e1687445671335-1.jpg" alt="">
                </div>
            </div>
        </div>
</div>
        <div class="six">
            <div class="first">
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