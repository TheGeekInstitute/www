<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Logo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <link rel="stylesheet" href="./css/more.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <!-- <h2>LOGO</h2> -->
                <a href="./index.html"><img src="../Images/Brands/Logo.png" alt="logo image"></a>
            </div>
            <div class="nav-menu">
                <a href="./index.html">Home</a>
                <a href="#">Shop</a>
                <a href="#">Pages</a>
                <a href="#">Contact</a>
            </div>
            <div class="cart-navigation">
                <form action="">
                    <input type="text">
                    <button id="searchbtn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <a href="#"><i class="fa-light fa-cart-shopping"></i></a>
                <a href="#"><i class="fa-light fa-user"></i></a>
            </div>
        </nav>
    </header>
    <div class="signup-container">
        <div class="signup-hero">
            <div class="signup-image">
                <img src="../Images/Assets/login.svg" alt="signup Image">
            </div>
            <div class="signup-details">
                <h2>OwnOnlineShop</h2>
                <h2>Let's Create Your Account <i class="fa-solid fa-arrow-right-long"></i> </h2>

              <!-- alert start  -->
              <div class="alert" style="background-color:red;">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

                  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                </div>
                <!-- alert end  -->


                <form action="">
                    <section class="name-section">
                        <p>Full Name</p>
                        <input type="text">
                    </section>
                    <section class="email-section">
                        <p>Email</p>
                        <input type="email" name="useremail" id="">
                    </section>
                    <section class="mobile-section">
                        <p>Mobile No</p>
                        <input type="number" name="usermobile" id="">
                    </section>
                    <section class="gender-section">
                        <p>Gender</p>
                        <select name="gender" id="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </section>
                    <section>
                        <p>Password</p>
                        <input type="password">
                    </section>
                    <section>
                        <p>Confirm Password</p>
                        <input type="password">
                    </section>
                    <div class="submit-section">
                        <button type="submit">Sign Up</button>
                        <p>Already Have Account ? <a href="./login.html">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Starts -->
    <footer>
        <div class="footer-hero">
            <div class="about-footer">
                <h2>Easter</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus adipisci nostrum voluptatibus
                    porro dignissimos qui doloremque, fugit minima id voluptate?</p>
            </div>
            <div class="service-footer">
                <h2>Services</h2>
                <ul>
                    <li><a href="#">Deals in Devices</a></li>
                    <li><a href="#">Home Decor</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Health</a></li>
                </ul>
            </div>
            <div class="Cateogaries-footer">
                <h2>Cateogaries</h2>
                <ul>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Refurbished Devices</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Accesories</a></li>
                    <li><a href="#">Decoration</a></li>
                    <li><a href="#">Beauty Products</a></li>
                    <li><a href="#">Tickets</a></li>
                </ul>
            </div>
            <div class="contact-footer">
                <ul>
                    <h2>Contact Us</h2>
                    <li><a href="mailto:mrabraham@thegics.in"> <i class="fa-solid fa-envelope"></i> Email US</a></li>
                    <li><a href="tel:8447377952"> <i class="fa-solid fa-phone"></i> Call Us</a></li>
                    <li><a href="#"> <i class="fa-solid fa-house-chimney-crack"></i> Kapashera New Delhi</a></li>
                </ul>
                <div class="contact-social">
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-facebook-square"></i></a>
                    <a href="https://wa.me/8447377952"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <p>Copyright &copy; 2022 | Created By <a href="https://www.thegics.in/" target="_blank">Gics</a></p>
        </div>
    </footer>
    <!-- Footer ends -->
</body>

</html>