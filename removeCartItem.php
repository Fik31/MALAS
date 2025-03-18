<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_malasstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ambil product ID dan coupon code dari AJAX
    $productId = $_POST['productId'];
    $couponCode = isset($_POST['coupon']) ? $_POST['coupon'] : '';

    // query sql untuk delete
    $deleteSql = "DELETE FROM cart WHERE product_id = $productId";

    if ($conn->query($deleteSql) === TRUE) {
        // cek coupon code dan sesuaikan shipping cost
        $shippingCost = ($couponCode == 'ILKOMBSI') ? 0 : 10000;

        // hitung cart subtotal
        $cartSubtotal = 0;
        $sql = "SELECT subtotal FROM cart";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $cartSubtotal += $row['subtotal'];
        }

        // hitung total
        $total = $cartSubtotal + $shippingCost;

        // update cart totals
        echo json_encode(array(
            'cartSubtotal' => $cartSubtotal,
            'shippingCost' => $shippingCost,
            'total' => $total,
            'status' => 'success'
        ));
    } else {
        // handle error jika delete gagal
        echo json_encode(array('status' => 'error'));
    }
} else {
    // penanganan jika request method bukan POST
    echo json_encode(array('status' => 'Invalid request method'));
}

$conn->close();
?>
