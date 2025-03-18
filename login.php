<?php 
session_start();
include 'connection.php';

// Cek jika form tersubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil username dan password dari form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query database cek user
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Cek jika matching user ditemukan
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch user data and store in session
        $user_data = mysqli_fetch_assoc($result);
        $_SESSION['pengguna'] = $user_data;

        // mengarahkan ke home page jika berhasil
        header("location:index.php");
        exit();
    } else {
        // mengarahkan kembali ke login page dengan pesan gagal
        header("location:login.php?pesan=gagal");
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
    <title>Login</title>
    <link rel="icon" href="img/logo/web/Favicons/browser.png">
    <link rel="stylesheet" href="logstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <!-- Checkbox untuk "Remember Me" dan link untuk "Forgot Password" -->
            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember">Remember Me
                </label>
                <a href="forgotPass.php">Forgot Password</a>
            </div>
            <!-- tampil pesan gagal jika login gagal -->
            <?php 
            if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") {
                echo "<div class='alert'><center>Username and Password do not match!</center></div>";
            }
            ?>
            <button type="submit" class="btn" name="login">Login</button>
            <div class="register-link">
                <p>Don't Have an Account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
