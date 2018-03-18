<?php

session_start();

if(isset($_SESSION['u_uid'])) {

    echo
    "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User Registration</title>
    <link rel='stylesheet' href = 'css/dogs.css' type='text/css'>
</head>
<body>

<div class=\"navbar\">
  <a href=\"LogOut.php\">Log out</a>
</div>

<div class='dogs'>
<img src='css/dogswim.gif'>
<img src='css/dogswim3.gif'>
<img src='css/dogswim4.gif'>
<img src='css/dogswim5.gif'>
<img src='css/dogswim6.gif'>
<img src='css/dogswim7.gif'>
<img src='css/dogswim8.gif'>
<img src='css/dogswim11.gif'>
<img src='css/dogswim12.gif'>
</div>
</body>
</html>";

} else {

    echo

    "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>User Registration</title>
    <link rel=\"stylesheet\" href = \"css/layout.css\" type=\"text/css\">
</head>
<body>
<div class=\"container\">
    <form id=\"contact\" action=\"includes/login.inc.php\" method=\"POST\">
        <img src=\"css/PoolMasters.jpg\">
        <br>
        <h1>You are not logged in!</h1>
        <a href=\"Login.php\">Login</a>
    </form>
</div>
</body>
</html>";

}

?>