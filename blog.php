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
                <li><a href="blog.php" class="active">Blog</a></li>
                <li><a href="about.php">About</a></li>
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

    <section id="page-header" class="blog-header">
        <h2>READ MORE</h2>
        <p>Read All Case Studies About Our Products!</p>
    </section>

    <section id="blog">
        <div class="blog-box" id="blogBox1">
            <div class="blog-img">
                <img src="img/blog/blazer.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Elegant Long Coat</h4>
                <p id="blogContent1">Long coats, with their elegant and timeless design, serve as both a stylish and functional addition to any wardrobe. These versatile garments are perfect for colder seasons, providing warmth and protection against the chill..
                </p>
                <a href="#" onclick="toggleContent(1)">CONTINUE READING</a>
            </div>
            <h1>12/10</h1>
        </div>
        <script>
        function toggleContent(blogId) {
                var contentId = "blogContent" + blogId;
                var content = document.getElementById(contentId);
                var link = document.querySelector("#blogBox" + blogId + " a");

                if (content.getAttribute("data-show") === "short") {
                    content.innerHTML = "Long coats, with their elegant and timeless design, serve as both a stylish and functional addition to any wardrobe. These versatile garments are perfect for colder seasons, providing warmth and protection against the chill. Crafted from high-quality materials, long coats are not only a fashion statement but also a practical choice for those seeking a balance between style and comfort. The length of these coats, extending beyond the hips or even reaching the ankles, adds a touch of sophistication to any ensemble. The flowing silhouette of a long coat drapes gracefully over the body, creating a flattering and elongated appearance. This length not only offers enhanced coverage but also exudes an air of refinement, making it a go-to choice for various occasions, from formal events to casual outings. Long coats come in a variety of styles, ranging from classic trench coats with belted waists to sweeping floor-length overcoats. The diverse options cater to individual tastes, allowing wearers to express their personality and style preferences. Whether opting for a structured and tailored look or a loose and relaxed fit, the long coat effortlessly complements different fashion aesthetics.";
                    link.innerHTML = 'SHOW LESS';
                    content.setAttribute("data-show", "full");
                } else {
                    content.innerHTML = "Long coats, with their elegant and timeless design, serve as both a stylish and functional addition to any wardrobe. These versatile garments are perfect for colder seasons, providing warmth and protection against the chill..";
                    link.innerHTML = 'CONTINUE READING';
                    content.setAttribute("data-show", "short");
                }
            }
        </script>
        <div class="blog-box" id="blogBox2">
            <div class="blog-img">
                <img src="img/blog/hoodie.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Casual Hoodie</h4>
                <p id="blogContent2">The hoodie, a casual wardrobe essential, is celebrated for its comfort and laid-back style. Characterized by its attached hood and often featuring a front pocket, this versatile garment effortlessly blends fashion..
                </p>
                <a href="#" onclick="toggleContent2(2)">CONTINUE READING</a>
            </div>
            <h1>12/12</h1>
        </div>
        <script>
        function toggleContent2(blogId) {
                var contentId = "blogContent" + blogId;
                var content = document.getElementById(contentId);
                var link = document.querySelector("#blogBox" + blogId + " a");

                if (content.getAttribute("data-show") === "short") {
                    content.innerHTML = "The hoodie, a casual wardrobe essential, is celebrated for its comfort and laid-back style. Characterized by its attached hood and often featuring a front pocket, this versatile garment effortlessly blends fashion with functionality. The hoodie has evolved beyond its athletic roots to become a symbol of urban streetwear and a go-to choice for individuals seeking a comfortable yet trendy look. With its soft and cozy fabric, the hoodie provides a feeling of warmth and relaxation, making it the perfect choice for casual outings, lounging at home, or staying cozy during cooler weather. The attached hood not only adds a touch of urban flair but also provides an extra layer of protection against the elements, making it an ideal companion for unpredictable weather conditions. Hoodies come in a myriad of styles, colors, and designs, catering to diverse tastes and preferences. From classic solid colors to bold patterns and graphics, the hoodie allows individuals to showcase their personality and sense of style. It effortlessly transitions from a lazy day at home to a stylish streetwear statement, making it a versatile piece in any wardrobe.";
                    link.innerHTML = 'SHOW LESS';
                    content.setAttribute("data-show", "full");
                } else {
                    content.innerHTML = "The hoodie, a casual wardrobe essential, is celebrated for its comfort and laid-back style. Characterized by its attached hood and often featuring a front pocket, this versatile garment effortlessly blends fashion..";
                    link.innerHTML = 'CONTINUE READING';
                    content.setAttribute("data-show", "short");
                }
            }
        </script>
        <div class="blog-box" id="blogBox3">
            <div class="blog-img">
                <img src="img/blog/cardigan.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Cozy Cardigan</h4>
                <p id="blogContent3">The cardigan, a classic and cozy wardrobe staple, adds a touch of sophistication to any ensemble. This button-up sweater is known for its versatility, making it an excellent layering piece for both casual and more formal occasions..
                </p>
                <a href="#" onclick="toggleContent3(3)">CONTINUE READING</a>
            </div>
            <h1>12/15</h1>
        </div>
        <script>
        function toggleContent3(blogId) {
                var contentId = "blogContent" + blogId;
                var content = document.getElementById(contentId);
                var link = document.querySelector("#blogBox" + blogId + " a");

                if (content.getAttribute("data-show") === "short") {
                    content.innerHTML = "The cardigan, a classic and cozy wardrobe staple, adds a touch of sophistication to any ensemble. This button-up sweater is known for its versatility, making it an excellent layering piece for both casual and more formal occasions. With its timeless design and comfortable fit, the cardigan seamlessly bridges the gap between style and comfort, earning its place as a must-have in every fashion-conscious individual's wardrobe. Characterized by its front-button closure, the cardigan offers a range of styling possibilities. Whether worn open for a relaxed and laid-back look or buttoned up for a polished and refined appearance, the cardigan adapts to various fashion preferences and occasions. Its ability to effortlessly transition from a cozy sweater for a casual outing to an elegant layering piece for the workplace makes it a versatile choice for all seasons.The cardigan's design often includes a V-neck or crew neck, providing a canvas for accessorizing with statement necklaces or scarves. The sleeves may vary in length, catering to different style preferences and weather conditions. Crafted from a variety of materials, including soft cotton, luxurious wool, or cozy blends, the cardigan offers options for both lightweight layering and added warmth during colder months.";
                    link.innerHTML = 'SHOW LESS';
                    content.setAttribute("data-show", "full");
                } else {
                    content.innerHTML = "The cardigan, a classic and cozy wardrobe staple, adds a touch of sophistication to any ensemble. This button-up sweater is known for its versatility, making it an excellent layering piece for both casual and more formal occasions..";
                    link.innerHTML = 'CONTINUE READING';
                    content.setAttribute("data-show", "short");
                }
            }
        </script>
        <div class="blog-box" id="blogBox4">
            <div class="blog-img">
                <img src="img/blog/jumpsuit.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Monochrome Jumpsuit</h4>
                <p id="blogContent4">
                    The jumpsuit, a one-piece wonder, seamlessly merges style and convenience into a single garment. This versatile outfit eliminates the need for matching separates, providing a chic and effortless look. Jumpsuits come in various style..
                </p>
                <a href="#" onclick="toggleContent4(4)">CONTINUE READING</a>
            </div>
            <h1>12/18</h1>
        </div>
        <script>
        function toggleContent4(blogId) {
                var contentId = "blogContent" + blogId;
                var content = document.getElementById(contentId);
                var link = document.querySelector("#blogBox" + blogId + " a");

                if (content.getAttribute("data-show") === "short") {
                    content.innerHTML = "The jumpsuit, a one-piece wonder, seamlessly merges style and convenience into a single garment. This versatile outfit eliminates the need for matching separates, providing a chic and effortless look. Jumpsuits come in various styles, making them a go-to choice for fashion-forward individuals seeking a statement piece that transitions seamlessly from casual to formal occasions. Available in a spectrum of cuts and designs, jumpsuits cater to diverse tastes and body types. Whether it's a tailored and structured jumpsuit for a polished office ensemble or a relaxed and flowy design for a weekend getaway, the jumpsuit offers a solution for every fashion preference. The one-piece nature of this garment streamlines the getting-ready process, allowing wearers to achieve a put-together look with minimal effort. The jumpsuit's adaptability extends to its fabric choices, ranging from breezy cotton for casual outings to luxurious silk or satin for more formal events. The wide array of materials contributes to the jumpsuit's ability to transcend seasons, providing comfort and style year-round. Additionally, jumpsuits often feature details such as belts, pockets, and unique necklines, adding personality and flair to the overall look.";
                    link.innerHTML = 'SHOW LESS';
                    content.setAttribute("data-show", "full");
                } else {
                    content.innerHTML = "The jumpsuit, a one-piece wonder, seamlessly merges style and convenience into a single garment. This versatile outfit eliminates the need for matching separates, providing a chic and effortless look. Jumpsuits come in various style..";
                    link.innerHTML = 'CONTINUE READING';
                    content.setAttribute("data-show", "short");
                }
            }
        </script>
        <div class="blog-box" id="blogBox5">
            <div class="blog-img">
                <img src="img/blog/shoes.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Stylish Shoes</h4>
                <p id="blogContent5">Shoes, essential to our daily lives, go beyond their practical purpose to make a style statement. From comfy sneakers for active days to elegant heels for special occasions, shoes play a key role in completing our outfits..
                </p>
                <a href="#" onclick="toggleContent5(5)">CONTINUE READING</a>
            </div>
            <h1>12/20</h1>
        </div>
        <script>
        function toggleContent5(blogId) {
                var contentId = "blogContent" + blogId;
                var content = document.getElementById(contentId);
                var link = document.querySelector("#blogBox" + blogId + " a");

                if (content.getAttribute("data-show") === "short") {
                    content.innerHTML = "Shoes, essential to our daily lives, go beyond their practical purpose to make a style statement. From comfy sneakers for active days to elegant heels for special occasions, shoes play a key role in completing our outfits and expressing our personal style. The world of footwear is a vast and diverse landscape, offering an array of designs, materials, and functionalities to meet the varied needs and preferences of individuals. Sneakers, with their blend of comfort and casual style, have become a fashion staple embraced not only for athletic pursuits but also as a trendy and versatile option for everyday wear. Whether adorned with vibrant colors and bold patterns or maintaining a minimalist aesthetic, sneakers allow for self-expression and can effortlessly elevate a laid-back ensemble. Boots, with their sturdy construction and diverse styles, transition seamlessly between seasons. From ankle boots perfect for casual outings to knee-high boots that add a touch of sophistication, this footwear choice is both functional and fashionable. The rich variety of materials, such as leather, suede, or even rubber, further contributes to the adaptability of boots in different settings and weather conditions.";
                    link.innerHTML = 'SHOW LESS';
                    content.setAttribute("data-show", "full");
                } else {
                    content.innerHTML = "Shoes, essential to our daily lives, go beyond their practical purpose to make a style statement. From comfy sneakers for active days to elegant heels for special occasions, shoes play a key role in completing our outfits..";
                    link.innerHTML = 'CONTINUE READING';
                    content.setAttribute("data-show", "short");
                }
            }
        </script>
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