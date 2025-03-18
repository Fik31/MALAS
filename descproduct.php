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
                <li><a href="shop.php" class="active">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        
        <div class="single-pro-details">
            <h6>Shop / T-Shirt</h6>
            <h4>Pastel Fauna T-Shirt</h4>
            <h2>RP 60000</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1" id="quantityInput">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Crafted from high-quality materials. With its soft and breathable fabric, this shirt ensures a luxurious 
                feel against the skin. The meticulous attention to detail and superior 
                craftsmanship guarantee durability and long-lasting quality. Whether it's the 
                smooth finish, fine stitching, or the richness of the fabric, our casual shirts 
                embody a commitment to both comfort and excellence. Elevate your everyday style 
                with a casual shirt that not only looks good but also boasts exceptional quality.
            </span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Discover Modern Designs in Work Collection</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt ="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Pastel Blue Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RP 60.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt ="">
                <div class="des">
                    <span>Balenciaga</span>
                    <h5>Grey Block Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RP 100.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt ="">
                <div class="des">
                    <span>H & M</span>
                    <h5>White Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RP 80.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt ="">
                <div class="des">
                    <span>Burberry</span>
                    <h5>Brown Leaf Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RP 50.000</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
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

    <!-- fungsi klik gambar -->
    <script>
        var MainImg = document.getElementById("MainImg");
        var smalling = document.getElementsByClassName("small-img");

        // fungsi untuk mengatur gambar utama dan detail produk
        function setProductDetails(index, productName, price, imagePath) {
            MainImg.src = smalling[index].src;

            // atur detail produk
            document.querySelector('#prodetails h4').innerText = productName;
            document.querySelector('#prodetails h2').innerText = 'RP ' + price;

            // menambahkan jalur sebagai atribut data
            document.querySelector('button.normal').setAttribute('data-image-path', imagePath);
        }

        // atur detail produk untuk setiap klik gambar kecil
        smalling[0].onclick = function () {
            setProductDetails(0, 'Pastel Fauna T-Shirt', 60000, 'img/products/f1.jpg');
        }

        smalling[1].onclick = function () {
            setProductDetails(1, 'Fresh Lily T-Shirts', 120000, 'img/products/f2.jpg');
        }

        smalling[2].onclick = function () {
            setProductDetails(2, 'Full Floral T-Shirts', 80000, 'img/products/f3.jpg');
        }

        smalling[3].onclick = function () {
            setProductDetails(3, 'Sakura T-Shirts', 50000, 'img/products/f4.jpg');
        }

        document.querySelector('button.normal').addEventListener('click', function () {
            // ambil detail produk
            var productName = document.querySelector('#prodetails h4').innerText;
            var price = document.querySelector('#prodetails h2').innerText.replace('RP ', '');
            var imagePath = this.getAttribute('data-image-path');
            
            // ambil quantity dan hitung subtotal
            var quantity = parseInt(document.getElementById('quantityInput').value);
            var subtotal = price * quantity;

            // AJAX dikirim ke server
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'addToCart.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // handle respon dari server
                    if (xhr.responseText === "Success") {
                        alert('Product added to cart successfully');
                    } else {
                        alert('Failed to add product to cart');
                    }
                }
            };

            // mengirim data ke server
            xhr.send('productName=' + productName + '&price=' + price + '&imagePath=' + imagePath + '&quantity=' + quantity + '&subtotal=' + subtotal);
        });
    </script>

    <script src="script.js"></script>
</body>
</html>