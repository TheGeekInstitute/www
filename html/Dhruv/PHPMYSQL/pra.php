<?php
$conn=mysqli_connect("localhost","root","toor","Dhruv");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
        }
        /* body{
            background-color: #6D9AC4;
        } */
        .box{
            /* border:  1px solid red; */
            text-align: center;
            width: 40rem;
            margin: auto;
            box-shadow: 2px 2px 5px black;
            height: 57rem;
            margin-bottom: 2rem;
        }
        .box .main{
            /* border:  1px solid black; */
            display: flex;
            justify-content: space-between;
            text-align: center;
            /* position: absolute; */
            margin-top: 2rem;
            width: 40rem;
            height: 8rem;
            background-color: #f87099;
            
        }
         .header {
            /* border:  1px solid red; */
            width: 21rem;
            margin: auto;
            margin-top: 4rem;
            font-size: 1.4rem;
            padding: 0.3rem;
            color: white;
            background-color: #EE5684;
            border-radius: 0.4rem;
            user-select:  none;
        }.box .main .icon img {
            /* border:  1px solid red; */
            height: 5rem;
            margin-left: 1rem;
            margin-top: 1.5rem;
            width: 5.6rem;
        }
        .box .main .con {
            display: flex;
            flex-direction: column;
            /* justify-content: space-evenly; */
            user-select: none;
        }
        .box .main .con .name{
            /* border:  1px solid red; */
            width: 10rem;
            height: 2rem;
            margin-left: 8rem;
            display: flex;
            flex-direction: row;
            margin-top: 0.5rem;
            user-select: none;
        }
        .box .main .con .name span{
            font-size: 1.2rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 600;
            color:#5F2DED ;
            user-select: none;
            line-height: 2rem;
            
        }
        .box .main .con .name p{
            font-size: 1.2rem;
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
            font-weight: 900;
            color:white ;
            line-height: 2rem;
            margin-left: 0.2rem;
            user-select: none;
        }
        .box .main .con .lok p{
            /* border: 1px solid red; */
            width: 12rem;
            margin-left: 7rem;
            font-size: 0.9rem;
            font-weight: 900;
            color: white;
            position: relative;
            bottom: 0.2rem;
            user-select: none;
        }
        .box .main .con .slok p{
            /* border: 1px solid red; */
            font-size: 1.1rem;
            width: 22rem;
            font-weight: 900;
            margin-left: 2.4rem;
            margin-top: 0.8rem;
            user-select: none;
        }
        .box .main .con .tag p{
            /* border:  1px solid red; */
            width: 12rem;
            font-weight: 600;
            font-size: 1.2rem;
            margin-left: 7.5rem;
            margin-top: 0.9rem;
            color: white;
            user-select: none;
        }
    .box .main .icon1 img {
            /* border:  1px solid red; */
            height: 5rem;
            margin-right: 1rem;
            margin-top: 1.5rem;
            width: 5.6rem;
            user-select: none;
        }



      















        .section1{
            /* border:  1px solid red; */
            height: 10rem;
            width: 40rem;
            user-select: none;
        }
        .section1 .sname{
            margin-top: 1.3rem;
            width: 40rem;
            user-select: none;
        }
        .section1 .sname label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
        }
        .section1 .sname input{
            width:30rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 5rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
        }
        .section1 .fname{
            /* margin-top: rem; */
            width: 40rem;
            user-select: none;
        }
        .section1 .fname label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
        }
        .section1 .fname input{
            width:30rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 5rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
        }.section1 .mname{
            /* margin-top: 1.3rem; */
            width: 40rem;
            user-select: none;
        }
        .section1 .mname label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
        }
        .section1 .mname input{
            width:30rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 5rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
        }
        .section1 .dob input{
            width:10rem ;
            text-decoration: none;
            border: none;
            border-bottom: 1px solid black;
            /* border-bottom-style: dotted; */
            outline: none;
            /* padding-left: 1rem; */
            /* padding-right: 5rem; */
            font-size: 1rem;
            height: 2rem;
            position: relative; 
            right: 20rem;   
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
        }
        
        .section1 .dob label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            margin-right: 22rem;
        }
        
        .section1 .gender{
            display: flex;
            justify-content: center;
            /* border: 1px solid black; */
            height: 2rem;
            width: 15rem;
            position: relative;
            left: 20rem;
            bottom: 2rem;
            line-height: 2rem;

        }
        .section1 .gender .gen{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            /* margin-right: 22rem; */
        }
        .section1 .gender .ma{
            font-size:1rem ;
            /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
            width: 5rem;
            line-height: 2rem;
            user-select: none;
        }
        .section1 .gender .fe{
            font-size:1rem ;
            /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
            width: 5rem;
            line-height: 2rem;
            user-select: none;
        }
        .section1 .gender input{
            /* border: 1px solid red; */
            display: block;
            margin-left: 1rem;
            outline: none;
            text-decoration: none;
        }

        













                     /* section2 */

    .box .section2{
        border: 2px solid black;
        border-style: dashed;
        margin-top: 0.5rem;
        width: 36rem;
        margin-left: 2rem;
    }
    .box .section2 .ad p{
        position: relative;
        font-size: 1.2rem;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 900;
        bottom: 1rem;
        /* border: 1px solid red; */
        width: 11rem;
        background-color: white;
        left: 5rem;
    }
    .section2 .division{
        /* border: 1px solid green; */
        width: 25rem;
        /* margin-left: 1rem; */
        position: relative;
        bottom: 0.5rem;
    }
    .section2  .division label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            /* margin-right: 22rem; */
            font-weight: 900;
    }
    .section2  .division input{
             width:19rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
            background-color: transparent;
    }

    .section2 .dis{
        /* border: 1px solid green; */
        width: 25rem;
        /* margin-left: 1rem; */
        position: relative;

        bottom: 0.5rem;

    }
    .section2  .dis label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            /* margin-right: 22rem; */
            font-weight: 900;
    }
    .section2  .dis input{
             width:19rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
            background-color: transparent;
    }
    .section2 .add{
        /* border: 1px solid green; */
        width: 25rem;
        /* margin-left: 1rem; */
        position: relative;
        
        bottom: 0.5rem;

    }
    .section2  .add label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            /* margin-right: 22rem; */
            font-weight: 900;
    }
    .section2  .add input{
             width:19rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
            background-color: transparent;
    }









                /* section3 */

                .box .section3{
        border: 2px solid black;
        border-style: dashed;
        margin-top: 0.5rem;
        width: 36rem;
        margin-left: 2rem;
        margin-top: 1.5rem;
    }
    .box .section3 .ad1 p{
        position: relative;
        font-size: 1.2rem;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 900;
        bottom: 1rem;
        /* border: 1px solid red; */
        width: 13rem;
        background-color: white;
        left: 5rem;
    }
    .section3 .division1{
        /* border: 1px solid green; */
        width: 25rem;
        /* margin-left: 1rem; */
        position: relative;
        bottom: 0.5rem;
    }
    .section3  .division1 label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            /* margin-right: 22rem; */
            font-weight: 900;
    }
    .section3  .division1 input{
             width:19rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
            background-color: transparent;
    }

    .section3 .dis1{
        /* border: 1px solid green; */
        width: 25rem;
        /* margin-left: 1rem; */
        position: relative;

        bottom: 0.5rem;

    }
    .section3  .dis1 label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            /* margin-right: 22rem; */
            font-weight: 900;
    }
    .section3 .dis1 input{
             width:19rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
            background-color: transparent;
    }
    .section3 .add1{
        /* border: 1px solid green; */
        width: 25rem;
        /* margin-left: 1rem; */
        position: relative;
        
        bottom: 0.5rem;

    }
    .section3  .add1 label{
            font-size:1rem ;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 5rem;
            line-height: 2rem;
            user-select: none;
            /* margin-right: 22rem; */
            font-weight: 900;
    }
    .section3  .add1 input{
             width:19rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.5rem;
            font-weight: 900;
            user-select: none;
            background-color: transparent;
    }
    
      

                /* Section4 */


        .box .section4{
            /* border: 1px solid red; */
            width: 36rem;
            margin-left: 2rem;
            margin-top: 1.4rem;
            line-height: 0.7rem;
            
        } 
        .section4 .re{
            /* border: 1px solid black; */
            display: flex;
            justify-content: space-between;
            line-height: 1.5rem;
        }
        .section4 .re label{
            font-size:  1.1rem;
            font-weight:500;
        }
        .section4 .re input{
            width:12rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.4rem;
            /* font-weigtghht: 900; */
            user-select: none;
            background-color: transparent;
        }


    
        .section4 .ph{
            /* border: 1px solid black; */
            display: flex;
            justify-content: space-between;
            line-height: 1.5rem;
        }
        .section4 .ph label{
            font-size:  1.1rem;
            font-weight:500;
        }
        .section4 .ph input{
            width:10rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.4rem;
            /* font-weigtghht: 900; */
            user-select: none;
            background-color: transparent;
        }

        


    
        .section4 .nid{
            /* border: 1px solid black; */
            display: flex;
            justify-content: space-between;
            line-height: 1.5rem;
        }
        .section4 .nid label{
            font-size:  1.1rem;
            font-weight:500;
        }
        .section4 .nid input{
            width:10rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.4rem;
            /* font-weigtghht: 900; */
            user-select: none;
            background-color: transparent;
        }



     
        /* .section4 .occ{
            border: 1px solid black;
            display: flex;
            justify-content: space-between;
            line-height: 1.5rem;
        } */
        .section4 .occ label{
            font-size:  1.1rem;
            font-weight:500;
        }
        .section4 .occ input{
            width:30rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.4rem;
            /* font-weigtghht: 900; */
            user-select: none;
            background-color: transparent;
        }



        /* .section4 .re{
            border: 1px solid black;
            display: flex;
            justify-content: space-between;
            line-height: 1.5rem;
        } */
        .section4 .co label{
            font-size:  1.1rem;
            font-weight:500;
        }
        .section4 .co input{
            width:29rem ;
            text-decoration: none;
            border: none;
            border-bottom-style: dotted;
            outline: none;
            padding-left: 1rem;
            padding-right: 2rem;
            font-size: 1rem;
            height: 2rem;
            position: relative;    
            bottom: 0.4rem;
            /* font-weigtghht: 900; */
            user-select: none;
            background-color: transparent;
        }



                  /* section5 */



    .box .section5{
        /* border:  1px solid red; */
        margin-top: 1rem;
        width: 36rem;
        margin-left: 2rem;
    }
    .section5 .he p{
        font-size: 1.5rem;
        font-weight: 900;
        user-select: none;
    }
    .section5 .para p {
        font-size: 1rem;
        padding: 0px 15px;
        margin-top: 1rem;
    }
    .showw{
        /* display: block; */
        /* border: 1px solid red; */
        height: 2rem;
        width: 20rem;
        text-align: center;
        line-height: 2rem;
        margin: auto;
        margin-top: 1rem;
        font-size: 1.5rem;
        color:  white;
        font-weight: 900;
        border-radius: 0.5rem;
        background-color: rgb(218, 18, 18);
    }
    .btn button{
        border: none;
    }


       


    
    



        
    </style>
</head>
<body>
    <div class="header">
        <h1>Admission Form</h1>
    </div>
    <div class="showw">
        <p>hdfjgsdjfg</p>
    </div>
    <div class="box">
            <div class="main">
                <div class="icon">
                    <img src="https://www.geekinstitute.org/img/logo/LOGO.png" alt="icon">
                </div>
                <div class="con">
                <div class="name">
                    <span>GEEK</span> <p>ACADEMY</p>
                </div>
                <div class="lok">
                    <p>Another way to Education</p>
                </div>
                <div class="slok">
                    <p>EDUCATION & LEARNING ACADEMY</p>
                </div>
                <div class="tag">
                    <p>ADIMISSION FORM</p>
                </div>
            </div>
                <div class="icon1">
                    <img src="https://www.geekinstitute.org/img/logo/LOGO.png" alt="icon">
                </div>
            </div>

            <div class="form">
                <form method="post">
                <div class="section1">
                <div class="sname">
                <label for=""> Student's Name :</label>
                <input type="text" name="sname">
            </div>
            <div class="fname">
                <label for="">Father's Name : </label>
                <input type="text" name="fname">
            </div>
            <div class="mname">
                <label for="">Mother's Name : </label>
                <input type="text" name="mname">
            </div>
                <div class="dob">
                    <label for="">Birth Date : </label>
                    <input type="date" name="dob">
                </div>
                    <div class="gender">
                        <label class="gen"> Gender: </label>
                        <input type="radio" name="gender">
                        <label class="ma">Male</label>
                        <input type="radio" name="gender">
                        <label class="fe">Female</label>
                    </div>
                </div>


                <div class="section2">
                    <div class="ad">
                        <p>Present Address</p>
                    </div>
                    <div class="division">
                        <label for="">Division : </label>
                        <input type="text" name="present_division">
                    </div>
                    <div class="dis">
                        <label for="">District : </label>
                        <input type="text" name="present_district">
                    </div>
                    <div class="add">
                        <label for="">Address : </label>
                        <input type="text" name="present_address">
                    </div>
                </div>    
                
                



                <div class="section3">
                    <div class="ad1">
                        <p>Permanent Address</p>
                    </div>
                    <div class="division1">
                        <label for="">Division : </label>
                        <input type="text" name="permanent_division">
                    </div>
                    <div class="dis1">
                        <label for="">District : </label>
                        <input type="text" name="permanent_district">
                    </div>
                    <div class="add1">
                        <label for="">Address : </label>
                        <input type="text" name="permanent_address">
                    </div>
                </div>  








                <div class="section4">
                    <div class="re">
                        <label for="">Religion :</label>
                        <input type="text">

                        <label for="">Nationality :</label>
                        <input type="text">
                    </div>
                    <div class="ph">
                        <label for="">Phone Number :</label>
                        <input type="text">
                        
                        <label for="">Email Address :</label>
                        <input type="email">
                    </div>
                    <div class="nid">
                        <label for="">NID Number :</label>
                        <input type="text">

                        <label for="">Blood Group :</label>
                        <input type="text">
                    </div>
                    <div class="occ">
                        <label for="">Occupation :</label>
                        <input type="text">
                    </div>
                    <div class="co">
                        <label for="">Course Name :</label>
                        <input type="text">
                    </div>
                </div>
                
                
                <div class="section5">
                    <div class="he">
                        <p>DECLARATION</p>
                    </div>
                    <div class="para">
                        <p>I hereby state that all the informaton noted above is accurate to the best of my beliefs and i take full responsibility for the correctness of the information</p>
                    </div>
                    <div class="btn">
                        <button type="reset"></button>
                        <button type="submit"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        
        if(isset($_POST['sname']) && !empty($_POST['sname'])){
            $name=$_POST['sname'];

            if(isset($_POST['fname']) && !empty($_POST['fname'])){
                $name=$_POST['fname'];
                
            if(isset($_POST['mname']) && !empty($_POST['mname'])){
                $name=$_POST['mname'];
                

            if(isset($_POST['dob']) && !empty($_POST['dob'])){
                $name=$_POST['dob'];
                

            if(isset($_POST['gender']) && !empty($_POST['gender'])){
                $name=$_POST['gender'];
                
                
            if(isset($_POST['present_division']) && !empty($_POST['present_division'])){
                $name=$_POST['present_division'];
                

            if(isset($_POST['present_district']) && !empty($_POST['present_district'])){
                $name=$_POST['present_district'];
                

            if(isset($_POST['present_address']) && !empty($_POST['present_address'])){
                $name=$_POST['present_address'];
             
            if(isset($_POST['permanent_division']) && !empty($_POST['permanent_division'])){
                $name=$_POST['permanent_division'];
                
            if(isset($_POST['permanent_district']) && !empty($_POST['permanent_district'])){
                $name=$_POST['permanent_district'];
                
                if(isset($_POST['permanent_address']) && !empty($_POST['permanent_address'])){
                    $name=$_POST['permanent_address'];

                    if(isset($_POST['Religion']) && !empty($_POST['Religion'])){
                        $name=$_POST['Religion'];
                        if(isset($_POST['Nationality']) && !empty($_POST['Nationality'])){
                            $name=$_POST['Nationality'];
                            if(isset($_POST['Phone']) && !empty($_POST['Phone'])){
                                $name=$_POST['Phone'];

                                if(isset($_POST['Email']) && !empty($_POST['Email'])){
                                    $name=$_POST['Email'];

                                    if(isset($_POST['NID']) && !empty($_POST['NID'])){
                                        $name=$_POST['NID'];
                                            
                                    if(isset($_POST['Blood']) && !empty($_POST['Blood'])){
                                        $name=$_POST['Blood'];
                                        if(isset($_POST['Occupation']) && !empty($_POST['Occupation'])){
                                            $name=$_POST['Occupation'];
                                            if(isset($_POST['Course']) && !empty($_POST['Course'])){
                                                $name=$_POST['Course'];
                                                


            }}}}}}}

            }
  
          }

          else{

            echo 'data not found';
          }
            
            }}}}}}}}}}}
?>