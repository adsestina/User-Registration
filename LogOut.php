<?php
// Initialize Session
session_start();

// Destroy Session
 $_SESSION = array();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href = "css/layout.css" type="text/css">
</head>
<body>
<div class="container">
    <form id="contact" action="includes/login.inc.php" method="POST">
        <img src="css/PoolMasters.jpg">
        <br>
        <h1>Logged out.</h1>
        <h1>We recommend you close your browser.</h1>
        <a href="Login.php">Login</a>
    </form>
</div>
</body>
</html>