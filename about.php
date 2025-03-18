<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MALAS STORE</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="icon" href="img/logo/web/Favicons/browser.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logo/web/png/logo1.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                
                <?php
                session_start();
                if (isset($_SESSION['pengguna'])) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?>

                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>KNOW US</h2>
        <p>Explore Who We Are And What Sets Us Apart</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/who.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>
                We're more than just an e-commerce website, we're a community of fashion and lifestyle 
                enthusiasts who understand that every purchase is more than just a transaction. 
                Here, we strive to create a shopping experience that not only meets your needs but also 
                reflects your identity. Behind every click and product selection, there's a passionate team 
                committed to providing the best service. We're here to inspire, help you express yourself 
                through your unique style, and offer more than just shopping items. Think of us not only as 
                an online shopping destination but as your lifestyle partner. Thank you for joining our 
                community, where every visit is a meaningful journey.
            </p>
        <abbr title="">Shop with confidence! Our commitment to quality ensures that every product is guaranteed to meet your expectations.
        </abbr>
        <br><br>
        <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Exciting discounts await! Stay tuned for exclusive offers coming your way.</marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="img/about/Clother.mp4"></video>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div> 
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Get The Newsletter</h4>
            <p>Subscribe to receive email updates on our <span>newest arrivals and specials offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Subscribe</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo/web/png/logo3.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Jl. Jkt Garden City Boulevard No.1, Cakung, Jakarta Timur</p>
            <p><strong>Phone:</strong> +62 858-0944-8620 / (021) 234-299-873</p>
            <p><strong>Hours:</strong> 10:00 - 21:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instragram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>Ilmu Komputer 153B07 &copy; 2023 <strong><a href="https://bsi.id/home/kampus/6">Bina Sarana Informatika Kramat 98</a></strong></p>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>