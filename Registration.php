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
    <form id="contact" action="includes/signup.inc.php" method="POST">
        <img src="css/PoolMasters.jpg">
        <br>
        <fieldset>
            <input placeholder="First Name" type="text" id="first" name="first" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Last Name" type="text" id="last" name="last" required>
        </fieldset>
        <fieldset>
            <input placeholder="Username" type="text" id="username" name="username" required>
        </fieldset>
        <fieldset>
            <input placeholder="Email" type="email" id="email" name="email" required>
        </fieldset>
        <fieldset>
            <input placeholder="Password" type="password" id="password" name="password" required>
        </fieldset>
        <fieldset>
            <input placeholder="Repeat Password" type="password" id="passwordRepeat" name="passwordRepeat" required>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="submit">Submit</button>
        </fieldset>
        <a href="Login.php">Login</a>
    </form>
</div>
</body>
</html>