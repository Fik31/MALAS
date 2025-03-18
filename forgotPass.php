<?php
session_start();
include 'connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $usernameOrEmailOrPhone = mysqli_real_escape_string($conn, $_POST['username']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['password']);

    // Query database to check if the username/email/phone exists
    $query = "SELECT * FROM user WHERE username = '$usernameOrEmailOrPhone' OR email = '$usernameOrEmailOrPhone' OR phone = '$usernameOrEmailOrPhone'";
    $result = mysqli_query($conn, $query);

    // Check if user exists
    if ($result && mysqli_num_rows($result) > 0) {
        // Update the password for the found user
        $updateQuery = "UPDATE user SET password = '$newPassword' WHERE username = '$usernameOrEmailOrPhone' OR email = '$usernameOrEmailOrPhone' OR phone = '$usernameOrEmailOrPhone'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            // Password reset successful, redirect to login page or any other page
            header("location: login.php");
            exit();
        } else {
            // Password reset failed, display an error message
            header("location: forgotPass.php?pesan=gagal");
            exit();
        }
    } else {
        // User not found, display an error message
        header("location: forgotPass.php?pesan=gagal");
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
    <title>Reset Password</title>
    <link rel="icon" href="img/logo/web/Favicons/browser.png">
    <link rel="stylesheet" href="logstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="forgotPass.php" method="post">
            <!-- Input kolom username dan password -->
            <h1>Reset Password</h1>
            <div class="input-box">
                <input type="text" placeholder="Username/Email/Phone" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="New Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <!-- tampil pesan gagal jika reset gagal -->
            <?php 
            if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") {
                echo "<div class='alert'><center>Password reset failed. Please try again.</center></div>";
            }
            ?>

            <button type="submit" class="btn" name="reset">Reset</button>
            
            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
