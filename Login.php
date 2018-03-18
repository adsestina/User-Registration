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
            <fieldset>
                <input placeholder="Username" type="text" id="username" name="username" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Password" type="password" id="password" name="password" required>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="submit">Submit</button>
            </fieldset>
        <h2>Not a member yet?</h2><a href="Registration.php">Register</a>
    </form>
</div>
</body>
</html>