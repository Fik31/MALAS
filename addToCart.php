<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // mengambil data dari AJAX
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $imagePath = $_POST['imagePath'];
    $quantity = $_POST['quantity'];
    $subtotal = $_POST['subtotal'];

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

    //insert data ke database
    $sql = "INSERT INTO cart (img, product_name, price, quantity, subtotal) VALUES ('$imagePath', '$productName', $price, $quantity, $subtotal)";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
