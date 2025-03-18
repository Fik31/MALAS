<?php
session_start();
// mengosongkan array
$_SESSION = array();

// mengakhiri sesi
session_destroy();
header("location: login.php");
exit();
?>
