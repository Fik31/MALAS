<?php 
session_start();
include 'connection.php';

// Cek jika form tersubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil username dan password dari form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // Query database cek user
    $query = "INSERT INTO user (username, password, name, email, phone) VALUES ('$username', '$password', '$name', '$email', '$phone')";
    $result = mysqli_query($conn, $query);
  
    if ($result) {
        // mengarahkan ke index page jika berhasil
        header("location: login.php");
        exit();
    } else {
        // mengarahkan kembali ke register page dengan pesan gagal
        header("location: register.php?pesan=gagal");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="img/logo/web/Favicons/browser.png">
    <link rel="stylesheet" href="logstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="register.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Name" name="name" required>
                <i class='bx bx-rename'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Phone" name="phone" required>
                <i class='bx bxs-phone'></i>
            </div>
            <!-- tampil pesan gagal jika register gagal -->
            <?php 
            if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") {
                echo "<div class='alert'><center>Registration failed. Please try again.</center></div>";
            }
            ?>

            <button type="submit" class="btn" name="register">Register</button>
            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
