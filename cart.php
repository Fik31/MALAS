<?php
// koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_malasstore";

$conn = new mysqli($servername, $username, $password, $dbname);

// cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ambil data dari database
$sql = "SELECT product_id, img, product_name, price, quantity, subtotal FROM cart";
$result = $conn->query($sql);
?>

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

                <li id="lg-bag"><a href="cart.php" class="active"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header"> 
        <h2>CHECKOUT</h2>
        <p>Stay Tuned For Exclusive Offers Coming Your Way!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>REMOVE</td>
                    <td>IMAGE</td>
                    <td>PRODUCT</td>
                    <td>PRICE</td>
                    <td>QUANTITY</td>
                    <td>SUBTOTAL</td>
                </tr>
            </thead>
            <tbody>

                <?php
                // Perulangan melalui data yang diambil dan menghasilkan baris tabel
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><a href='#' onclick='removeCartItem(" . $row['product_id'] . ")'><i class='far fa-times-circle'></i></a></td>";
                        echo "<td><img src='" . $row['img'] . "' alt=''></td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td>" . $row['subtotal'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No items in the cart</td></tr>";
                }

                $conn->close();
                ?>

            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" id="couponCode" placeholder="Enter your coupon">
                <button class="normal" onclick="applyCoupon()">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td id="cartSubtotal">0</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td id="shippingCost">Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td id="total">0</td>
                </tr>
            </table>
            <button class="normal" onclick="proceedToCheckout()">Proceed to checkout</button>
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

    <!-- fungsi hapus item -->
    <script>
        function removeCartItem(productId) {
            console.log('Removing item with productId:', productId);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'removeCartItem.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    console.log('Response:', xhr.responseText);

                    if (xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);

                        if (response.status === 'success') {
                            // Update the table dynamically after successful removal
                            // You can reload the page or update the table without reloading
                            alert('Success deleting item');
                            updateCartTotals(); // Update cart totals after successful removal
                            window.location.reload();
                        } else {
                            alert('Error removing item');
                        }
                    } else {
                        alert('Request failed. Status: ' + xhr.status);
                    }
                }
            };
            xhr.send('productId=' + productId);
        }
    </script>

    <!-- fungsi update cart -->
    <script>
        // Function to update cart totals
        function updateCartTotals() {
            var productId = 1; // You may need to set the appropriate product ID here

            // Send AJAX request to removeCartItem.php with the product ID
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'removeCartItem.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);

                        // Update cart totals dynamically
                        document.getElementById('cartSubtotal').innerText = response.cartSubtotal;
                        document.getElementById('shippingCost').innerText = response.shippingCost;
                        document.getElementById('total').innerText = response.total;
                    } else {
                        alert('Request failed. Status: ' + xhr.status);
                    }
                }
            };
            xhr.send('productId=' + productId);
        }

        // Initial display of cart totals when the page loads
        updateCartTotals();

        function applyCoupon() {
            var couponCode = document.getElementById('couponCode').value;
            var productId = 1; // You may need to set the appropriate product ID here

            // Send AJAX request to removeCartItem.php with the coupon code and product ID
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'removeCartItem.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);

                        // Update cart totals dynamically
                        document.getElementById('cartSubtotal').innerText = response.cartSubtotal;
                        document.getElementById('shippingCost').innerText = response.shippingCost;
                        document.getElementById('total').innerText = response.total;
                    } else {
                        alert('Request failed. Status: ' + xhr.status);
                    }
                }
            };
            xhr.send('productId=' + productId + '&coupon=' + couponCode);
        }
    </script>

    <!-- fungsi checkout -->
    <script>
        function proceedToCheckout() {
            // Replace '085949849678' with the actual WhatsApp number
            var phoneNumber = '085839478650';

            // Replace 'BANG%20BELI%20!' with the encoded message
            var message = 'BANG%20BELI%20!';

            // Construct the WhatsApp link with the message
            var whatsappLink = 'https://wa.me/' + phoneNumber + '?text=' + message;

            // Open the WhatsApp link
            window.location.href = whatsappLink;
        }
    </script>

    <script src="script.js"></script>
</body>
</html>